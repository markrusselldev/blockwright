// Deterministic composer: stable key order, merges arrays by slug/name, escapes non-ASCII
import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const ROOT = path.resolve(__dirname, '..');
const SRC_DIR = path.join(ROOT, 'config', 'theme');
const OUT = path.join(ROOT, 'theme.json');
const SCSS_BP_OUT = path.join(ROOT, 'src', 'styles', '_breakpoints.generated.scss');
const WATCH = process.argv.includes('--watch');

const TOP_LEVEL_ORDER = [
	'$schema',
	'__blockwrightEdit',
	'version',
	'settings',
	'styles',
	'customTemplates',
];

function safeReadJSON(file) {
	try {
		const txt = fs.readFileSync(file, 'utf8');
		if (!txt.trim()) throw new Error('Empty JSON');
		return JSON.parse(txt);
	} catch (e) {
		console.error(`[compose-theme] Failed to read ${file}: ${e.message}`);
		process.exitCode = 1;
		return {};
	}
}

function deepMerge(a, b) {
	if (Array.isArray(a) && Array.isArray(b)) {
		const objArr = (arr) =>
			arr.length &&
			arr.every((x) => x && typeof x === 'object' && !Array.isArray(x));
		const keyFor = (o) => o.slug ?? o.name ?? null;
		if (
			objArr(a) &&
			objArr(b) &&
			keyFor(a[0]) !== null &&
			keyFor(b[0]) !== null
		) {
			const map = new Map();
			for (const i of a) map.set(keyFor(i), i);
			for (const i of b)
				map.set(
					keyFor(i),
					map.has(keyFor(i)) ? deepMerge(map.get(keyFor(i)), i) : i
				);
			return Array.from(map.values());
		}
		return b.slice();
	}
	if (
		a &&
		typeof a === 'object' &&
		!Array.isArray(a) &&
		b &&
		typeof b === 'object' &&
		!Array.isArray(b)
	) {
		const out = { ...a };
		for (const [k, v] of Object.entries(b))
			out[k] = k in out ? deepMerge(out[k], v) : v;
		return out;
	}
	return b;
}

function sortKeys(obj, isTop = false) {
	if (Array.isArray(obj)) return obj.map((x) => sortKeys(x, false));
	if (obj && typeof obj === 'object') {
		const keys = Object.keys(obj);
		const out = {};
		if (isTop) {
			for (const k of TOP_LEVEL_ORDER)
				if (k in obj) out[k] = sortKeys(obj[k], false);
			for (const k of keys.sort())
				if (!TOP_LEVEL_ORDER.includes(k))
					out[k] = sortKeys(obj[k], false);
		} else {
			for (const k of keys.sort()) out[k] = sortKeys(obj[k], false);
		}
		return out;
	}
	return obj;
}

function stringifyEscaped(value) {
	const raw = JSON.stringify(value, null, 2);
	let out = '';
	for (let i = 0; i < raw.length; i++) {
		const code = raw.charCodeAt(i);
		out +=
			code > 0x7f
				? '\\u' + ('0000' + code.toString(16)).slice(-4)
				: raw[i];
	}
	return out;
}

/**
 * Strip underscore-prefixed meta fields (_comment, _deprecated, _note, etc.)
 * from the composed theme.json. These fields provide documentation in source
 * fragments but violate WordPress theme.json schema (additionalProperties: false).
 */
function stripMetaFields(obj) {
	if (Array.isArray(obj)) {
		return obj.map((item) => stripMetaFields(item));
	}
	if (obj && typeof obj === 'object') {
		const out = {};
		for (const [key, value] of Object.entries(obj)) {
			if (!key.startsWith('_')) {
				out[key] = stripMetaFields(value);
			}
		}
		return out;
	}
	return obj;
}

function gatherFragments() {
	const order = ['settings', 'styles', 'blocks', 'extras'];
	const files = [];
	for (const dir of order) {
		const abs = path.join(SRC_DIR, dir);
		if (!fs.existsSync(abs)) continue;
		const list = fs
			.readdirSync(abs)
			.filter((f) => f.endsWith('.json'))
			.map((f) => path.join(abs, f))
			.sort();
		files.push(...list);
	}
	const basePath = path.join(SRC_DIR, 'base.json');
	if (fs.existsSync(basePath)) files.unshift(basePath);
	return files;
}

/**
 * Read custom.css if it exists and return its contents.
 * This CSS will be appended to the composed styles.css property.
 */
function readCustomCss() {
	const cssPath = path.join(SRC_DIR, 'styles', 'custom.css');
	if (!fs.existsSync(cssPath)) return null;
	return fs.readFileSync(cssPath, 'utf8').trim();
}

function composeOnce() {
	const fragments = gatherFragments();
	let composed = {};
	for (const f of fragments) composed = deepMerge(composed, safeReadJSON(f));
	if (!('version' in composed)) composed.version = 3;
	composed['$schema'] = 'https://schemas.wp.org/wp/6.9/theme.json';

	// Inject custom.css into styles.css (prepend so it comes before any JSON-embedded CSS)
	const customCss = readCustomCss();
	if (customCss) {
		composed.styles = composed.styles || {};
		composed.styles.css = composed.styles.css
			? customCss + composed.styles.css
			: customCss;
		console.log(
			`[compose-theme] Injected custom.css (${customCss.length} chars)`
		);
	}

	// Strip _comment, _deprecated, etc. for schema compliance (additionalProperties: false)
	const cleaned = stripMetaFields(composed);
	const sorted = sortKeys(cleaned, true);
	fs.writeFileSync(OUT, stringifyEscaped(sorted));
	console.log(
		`[compose-theme] Wrote theme.json from ${fragments.length} fragment(s).`
	);

	writeBreakpointsScss(composed);
}

/**
 * Emit the responsive breakpoints as an SCSS map so media queries derive their
 * widths from the SAME single source as theme.json (config/theme/settings/
 * custom.json -> settings.custom.layout.breakpoints). CSS @media can't consume a
 * var() token, so instead of hardcoding widths per query we generate them here and
 * consume via the below()/above() mixins in _breakpoints.scss.
 */
function writeBreakpointsScss(composed) {
	const bps = composed?.settings?.custom?.layout?.breakpoints;
	if (!bps || typeof bps !== 'object') {
		console.warn(
			'[compose-theme] No settings.custom.layout.breakpoints found; skipped _breakpoints.generated.scss.'
		);
		return;
	}
	const rows = Object.entries(bps)
		.map(([name, value]) => `\t${name}: ${value},`)
		.join('\n');
	const out =
		'// GENERATED by scripts/compose-theme.js from config/theme/settings/custom.json\n' +
		'// (settings.custom.layout.breakpoints). Do NOT edit by hand - run `npm run compose`.\n' +
		'// Single source of truth for responsive breakpoints; consume via _breakpoints.scss.\n' +
		`$breakpoints: (\n${rows}\n);\n`;
	fs.writeFileSync(SCSS_BP_OUT, out);
	console.log(
		`[compose-theme] Wrote _breakpoints.generated.scss (${Object.keys(bps).length} breakpoints).`
	);
}

function main() {
	composeOnce();
	if (!WATCH) return;
	console.log('[compose-theme] Watching for changes...');
	for (const d of ['settings', 'styles', 'blocks', 'extras']) {
		const abs = path.join(SRC_DIR, d);
		if (!fs.existsSync(abs)) continue;
		fs.watch(abs, { recursive: false }, () => {
			try {
				composeOnce();
			} catch (e) {
				console.error('[compose-theme] compose error:', e.message);
			}
		});
	}
	// Watch custom.css separately (it's in styles/ but we want explicit handling)
	const customCssPath = path.join(SRC_DIR, 'styles', 'custom.css');
	if (fs.existsSync(customCssPath)) {
		fs.watch(customCssPath, () => {
			try {
				composeOnce();
			} catch (e) {
				console.error('[compose-theme] compose error:', e.message);
			}
		});
	}
}

main();
