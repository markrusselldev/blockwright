=== Blockwright ===
Contributors: markrussellwp
Requires at least: 7.0
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: full-site-editing, block-patterns, block-styles, style-variations, editor-style, custom-colors, featured-images, threaded-comments, wide-blocks, full-width-template, template-editing, grid-layout, two-columns, portfolio, blog, translation-ready, rtl-language-support

A lightweight, adaptive block theme for full-site editing, with automatic light and dark mode and one-click color and typography style variations.

== Description ==

Blockwright is a block theme for people who build sites for other people. It looks finished the moment you activate it, and when a client asks to make the whole thing warmer, you change one token, not forty files. Every color, space, and typeface comes from a single set of theme.json tokens, so the site stays consistent, and stays yours.

Color is adaptive out of the box. The theme follows each visitor's light or dark system setting on its own, with AA contrast built into both, so there is nothing you or your visitors have to switch and it reads well either way from the first load. If you would rather offer a manual choice, the companion Blockwright Blocks plugin adds an optional light and dark toggle for your header.

Spacing is a fluid, calculated scale (the Utopia method), so gaps grow smoothly with the screen instead of jumping at fixed breakpoints, and every size stays in proportion. Pick a preset for a consistent rhythm, or type an exact value in any unit when you need one.

Making it your own takes one click in the Site Editor. Pick a color palette (Gold, Blue, Green, or Violet) and a type set (Modern, Technical, Editorial, or Geometric), mix them however you like, and reach for the Card, Card Divided, or Panel block styles when a section wants a little more structure.

A library of patterns covers the sections most sites actually need: headers and footers, heroes, feature and service grids, pricing tables, testimonials, an FAQ accordion, contact sections, a status scorecard, and full starter layouts for business, portfolio, landing, and sales pages. It is all core WordPress blocks, edited in the Site Editor, so there is no page builder to learn and no plugin you are required to keep.

Blockwright ships clean, accessible markup and self-hosted fonts, with nothing loaded from third parties. It also pairs with two optional plugins: Blockwright Blocks adds adaptive blocks, dynamic content, and an icon collection, while Blockwright Workbench keeps the development loop tidy while you build.

== Installation ==

1. In your dashboard, go to Appearance, then Themes, then Add New, then Upload Theme.
2. Upload the Blockwright theme zip and click Install Now.
3. Click Activate.
4. Go to Appearance, then Editor, then Styles to choose a color palette and a typography set.
5. Build your pages with patterns: while editing a page, open the block inserter (the plus button) and select the Patterns tab, or start a new page from a full-page layout in the "Choose a pattern" window.

== Frequently Asked Questions ==

= Does Blockwright support light and dark mode? =

Yes. Colors are adaptive and follow each visitor's operating-system light or dark setting automatically. There is nothing to configure, and both modes meet WCAG AA contrast.

= How do I change the colors or fonts? =

Open Appearance, then Editor, then Styles, and select Browse styles. Pick a color palette (Gold, Blue, Green, or Violet) and a typography set (Modern, Technical, Editorial, or Geometric). You can pair any color with any typeset.

= Does Blockwright require a page builder or any plugin? =

No. Blockwright is a full-site-editing block theme built entirely with core WordPress blocks. Everything is edited in the Site Editor.

= Where do I find the block patterns? =

While editing a page or post, open the block inserter (the plus button) and choose the Patterns tab. The full-page starter layouts (Business, Portfolio, Landing, and Sales) appear when you are editing a Page, either in the Patterns tab under Featured or in the "Choose a pattern" window that opens for a new, empty page. You can also review and edit patterns under Appearance, then Editor, then Patterns.

= How can I see all the patterns and styles on one page? =

Blockwright includes an optional Style Guide template that renders every pattern on a single page, along with a quick reference for the theme's colors, typography, buttons, and spacing. To use it, create a new page (Pages, then Add New), and in the page settings under Template, choose "Style Guide," then preview or publish it. It is a handy reference while you build. Keep it as a draft or delete the page whenever you are done; it is not required for your site to work.

= How do I make the header stick to the top when scrolling? =

Open Appearance, then Editor, and edit the header. Select the header group, and in the block settings set Position to Sticky.

= Is Blockwright translation ready and right-to-left ready? =

Yes. All theme text is translatable, and the theme includes right-to-left (RTL) language support.

= Where are the developer docs? =

See the project repository's README.md.

== Roadmap ==

Blockwright grows with the sites built on it. On the way: more patterns and full-page layouts, additional color palettes and type sets, and a visual token editor (arriving through the companion Blockwright Blocks plugin) so you can adjust the design system from a friendly screen instead of editing JSON. What lands first follows what the people building with it ask for.

== Changelog ==

= 1.1.2 =
Maintenance release: internal code cleanup and a version-string fix. No visual or functional changes.

= 1.1.1 =
* Fixed: the border radius control in the editor showed a duplicate "None" step.

= 1.1.0 =
Adds marketing and layout patterns, styling for the newest core blocks, and fixes.
* New patterns: a full-bleed image hero, an image gallery, and a stats grid.
* New marketing patterns: an announcement bar, an offer callout, guarantee badges, and comparison cards.
* New page layouts in the new-page picker: About, Contact, Pricing, Coming soon, and a blog home; plus a Related posts band and an Author bio for single posts.
* Styling for the newest core blocks: Tabs (new in WordPress 7.1), Details and Accordion (WordPress 7.0), and Comments Pagination. Each uses the theme's adaptive tokens, so it re-hues with your chosen colour variation.
* Patterns now appear under labelled Hero, Layout, and Theme categories in the inserter.
* Fixed: the archive feature grid showed posts in a single column instead of a grid.
* Fixed: post content sat flush against the footer on some templates; restored the bottom spacing.
* Fixed: body text could look washed out when a dark-OS visitor forced light mode with the Light/Dark Toggle.

= 1.0.0 =
* Initial public release.

== Upgrade Notice ==

= 1.0.0 =
Initial public release of Blockwright.

== Resources ==

Blockwright bundles the following fonts in assets/fonts/, each subset to Latin and each licensed under the SIL Open Font License, version 1.1 (https://scripts.sil.org/OFL). Full license text: assets/fonts/LICENSE.txt.

IBM Plex Sans and IBM Plex Mono
* Copyright 2017 IBM Corp.
* Source: https://github.com/IBM/plex

Gabarito
* Copyright 2023 The Gabarito Project Authors
* Source: https://github.com/naipefoundry/gabarito

Instrument Sans
* Copyright 2022 The Instrument Sans Project Authors
* Source: https://github.com/Instrument/instrument-sans

JetBrains Mono
* Copyright 2020 The JetBrains Mono Project Authors
* Source: https://github.com/JetBrains/JetBrainsMono

Fraunces
* Copyright 2018 The Fraunces Project Authors
* Source: https://github.com/undercasetype/Fraunces

Source Serif 4
* Copyright 2014 The Source Serif 4 Project Authors
* Source: https://github.com/adobe-fonts/source-serif

Outfit
* Copyright 2021 The Outfit Project Authors
* Source: https://github.com/Outfitio/Outfit-Fonts

Inter
* Copyright 2020 The Inter Project Authors
* Source: https://github.com/rsms/inter

No fonts are loaded remotely; all are self-hosted from assets/fonts/. All other bundled assets, including the placeholder SVG images in assets/images/, the inline pattern icons, and all CSS and PHP, are original work by Mark Russell, licensed under GPLv2 or later.
