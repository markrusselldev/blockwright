# About this repository

This is a **read-only mirror** of the Blockwright theme, published here for reference and so
the source can be read, built, and forked. Development happens in a private canonical
repository, and this mirror is published from it.

**This repository does not take code contributions, and its Issues tab is off.** Pull requests
opened here are not merged.

**For bug reports, questions, and support, use the WordPress.org support forum:**
https://wordpress.org/support/theme/blockwright/

That is the single place support is handled, so nothing falls through the cracks.

## Building

Requires Node 18 or newer.

```
npm install
npm run compose   # regenerate theme.json from the config/theme fragments
npm run build     # compile the SCSS in src/styles/ to dist/theme.css
```

`theme.json` is generated from the fragments in `config/theme/`; edit the fragments and re-run
`npm run compose`, never `theme.json` directly. The compiled `dist/` is intentionally not
committed; build it locally.

## License

GPL-2.0-or-later.
