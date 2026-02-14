=== Florida Coastal Prep ===
Contributors: Senior Frontend Engineer
Tags: full-site-editing, wp-block-styles, custom-colors, custom-logo, editor-style, one-column, wide-blocks
Requires at least: 6.2
Tested up to: 6.7
Requires PHP: 8.0
Stable tag: 1.1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Florida Coastal Prep is a high-performance, cinematic FSE block theme built for elite athletic academies. It features a high-contrast dark aesthetic, custom block patterns, and optimized typography for sports and leadership branding.

This theme includes three custom post types (Faculty, Programs, Schedule), 15 block patterns, and full Elementor compatibility.

== Installation ==
1. In your WordPress dashboard, go to Appearance > Themes > Add New.
2. Upload the theme zip file.
3. Activate the theme.
4. Go to Appearance > Editor to customize via the Full Site Editor.
5. (Optional) Install Elementor to build custom landing pages using the "Full Width" FSE template.
6. Replace placeholder images in assets/images/ with your own production photography.

== Quick Start ==
- Edit Global Styles: Appearance > Editor > Styles
- Add Coaches: Faculty > Add New
- Manage Games: Schedule > Add New
- Add Programs: Programs > Add New
- Configure Address: Appearance > Customize > Organization Address (Schema)

== Theme Architecture ==
- Modular PHP: functions.php loads inc/setup.php, inc/post-types.php, inc/seo.php, inc/block-styles.php, inc/security.php
- Security headers: CSP, X-Content-Type-Options, X-Frame-Options, Referrer-Policy, Permissions-Policy
- Font preloading: Critical WOFF2 fonts are preloaded for faster rendering
- Conditional assets: animations.css only loads on pages that use animated patterns
- Customizer integration: Organization address fields for JSON-LD schema markup

== Custom Post Types ==
This theme registers three custom post types:
- **Faculty** - Manage coaching staff and faculty members
- **Programs** - Showcase athletic and academic programs
- **Schedule** - Display game schedules and results (with registered meta fields: game_date, opponent, location, score_home, score_away, game_result)

== Building a Distribution ZIP ==
The theme includes a .distignore file listing all development files to exclude.
Use `wp dist-archive .` or a custom script referencing .distignore to build a clean theme package.

== Frequently Asked Questions ==

= Does this theme require any plugins? =
No. The theme works out of the box with the WordPress block editor. Elementor is optional for additional page building capabilities.

= How do I add a contact form? =
The theme includes form placeholder patterns. Install a form plugin like WPForms or Contact Form 7 and replace the placeholder shortcode.

= How do I replace placeholder images? =
Add your production images to the assets/images/ directory in .webp format, matching the filenames referenced in the pattern files (e.g., placeholder-hero.webp, placeholder-training.webp).

== Changelog ==

= 1.1.0 =
* Modular architecture: split functions.php into inc/ modules (setup, post-types, seo, block-styles, security)
* Added Content Security Policy and security headers (inc/security.php)
* Added Customizer settings for schema address fields (inc/seo.php)
* Registered post meta with sanitize_callback for Schedule CPT (inc/post-types.php)
* Added font preloading for critical WOFF2 files
* Conditional animations.css loading — only on pages that use animated patterns
* Removed all !important declarations; increased specificity with body selector instead
* Added will-change and contain hints for animated card elements
* Fixed opacity utility class values to match their class names
* Replaced external Unsplash URLs with local placeholder image references
* Fixed theme Tags to use wp-block-styles (WordPress.org standard)
* Fixed PHP version mismatch: composer.json now matches style.css (>=8.0)
* Added .distignore for clean distribution builds
* Updated all documentation

= 1.0.0 =
* Initial release
* Full Site Editing block theme
* 15 custom block patterns
* 3 custom post types (Faculty, Programs, Schedule)
* Custom block styles (Outline Gold, Glassmorphism, Grid Background, Blueprint)
* Elementor compatibility
* SEO meta tags and JSON-LD schema markup
* Light mode style variation

== Copyright ==

Florida Coastal Prep WordPress Theme, (C) 2025 Senior Frontend Engineer.
Florida Coastal Prep is distributed under the terms of the GNU GPL v2 or later.

Unless otherwise specified, all the theme images are created by the theme author and licensed under the same license as the theme (GPLv2).

== Resources ==

= Fonts =
Bebas Neue, Oswald, and Inter are self-hosted as WOFF2 files and loaded via theme.json fontFace declarations with fontDisplay: swap.
- Bebas Neue: SIL Open Font License, 1.1, https://fonts.google.com/specimen/Bebas+Neue
- Oswald: SIL Open Font License, 1.1, https://fonts.google.com/specimen/Oswald
- Inter: SIL Open Font License, 1.1, https://fonts.google.com/specimen/Inter

= Images =
Pattern images reference local placeholders in assets/images/. Replace with original content for production use.

= Icons =
Material Icons by Google - Apache License 2.0 - https://fonts.google.com/icons
