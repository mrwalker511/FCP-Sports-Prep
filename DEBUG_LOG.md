# Debugging & Optimization Log - Florida Coastal Prep Theme

## Session Date: October 2024
**Engineer**: Senior Frontend/WordPress Engineer

---

### 1. Issue: Missing Block Pattern Registrations
- **Discovery**: The FSE `.html` templates (e.g., `front-page.html`) reference pattern slugs like `fl-coastal-prep/hero`. However, these patterns were only defined as React components (`.tsx`) for the preview, and not registered in WordPress via PHP.
- **Risk**: Activating the theme in WordPress would result in "Missing Block Pattern" errors in the Site Editor.
- **Resolution**: Updated `functions.php` to include a `register_block_pattern` block that officially maps the HTML structure of our components to WordPress-recognizable slugs.

### 2. Issue: "Boxed" vs "Full Width" Layout Conflict
- **Discovery**: `theme.json` had `contentSize` set to `100%`. While this is great for Elementor users, it makes standard Gutenberg blocks (like Paragraphs) stretch edge-to-edge on 4K monitors, which is a poor default UX.
- **Risk**: Unreadable content for non-Elementor pages.
- **Resolution**: Adjusted `theme.json` settings to use a `wideSize` of `1200px` and a `contentSize` of `800px`. The "Elementor Full Width" template remains at 100% via its own container definition.

### 3. Issue: Hardcoded JSON-LD Values
- **Discovery**: The `fl_coastal_prep_schema_markup` function in `functions.php` used hardcoded strings for the address.
- **Risk**: Inaccurate SEO data for different installations.
- **Resolution**: Modified the function to allow for easier filtering and added a check to ensure the script only loads on the front end.

### 4. Issue: Broken Navigation in React Simulation
- **Discovery**: Some buttons in `parts/Footer.tsx` and `patterns/ApplyPattern.tsx` had incomplete `setPage` calls or missing state updates, preventing full-path testing of the "Apply" flow.
- **Risk**: Poor staging experience for the client.
- **Resolution**: Audited all `setPage` hooks in `App.tsx` and child components to ensure every link correctly maps to the `PageType` union.

### 5. Issue: Meta Description Redundancy
- **Discovery**: The SEO function was adding a meta description even if a plugin like Yoast or RankMath was already present.
- **Risk**: Duplicate meta tags causing SEO penalties.
- **Resolution**: Added a `!defined('WPSEO_VERSION')` check (and similar for other plugins) to ensure the theme's lightweight SEO only fires as a fallback.

### 6. Issue: Template Part naming in index.html (FSE)
- **Discovery**: `templates/index.html` used a generic structure that didn't match the specific visual branding of the News archive.
- **Risk**: The "News" page looking like a generic blog.
- **Resolution**: Synchronized `templates/index.html` to mirror the high-impact grid layout found in `patterns/NewsArchivePattern.tsx`.

---
*Status: All high-priority issues resolved. Theme is production-ready.*