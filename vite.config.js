// vite.config.js - Blockwright minimal production build
// Compiles src/index.js (which only imports CSS/SCSS partials) into
// dist/theme.js + dist/theme.css. No third-party component-library plugin
// or external asset copy step.
import { defineConfig } from 'vite';
import path from 'path';
import { fileURLToPath } from 'node:url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

export default defineConfig(({ mode }) => ({
	root: process.cwd(),

	build: {
		outDir: 'dist',
		emptyOutDir: true,
		sourcemap: mode === 'development',
		// WP.org requires shipped CSS to be human-readable (the SCSS source is
		// not in the release zip), so don't minify - the file is ~20KB anyway.
		cssMinify: false,
		rollupOptions: {
			input: { theme: path.resolve(__dirname, 'src/index.js') },
			output: {
				entryFileNames: '[name].js',
				chunkFileNames: 'chunks/[name]-[hash].js',
				assetFileNames: (assetInfo) => {
					const name = (assetInfo.name || '').toLowerCase();
					if (/\.(woff2?|ttf|otf)$/.test(name))
						return 'fonts/[name][extname]';
					if (name.endsWith('.css')) return '[name][extname]';
					if (/\.(svg|png|jpe?g|gif|webp)$/.test(name))
						return 'images/[name][extname]';
					return 'assets/[name][extname]';
				},
			},
		},
	},
}));
