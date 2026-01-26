# THEME ARCHITECTURE GUIDE

## 1. PATTERN CONVERSION (CRITICAL)
When converting a `.tsx` pattern to a WordPress Block Pattern:
- Use standard WordPress Block Comments: ``.
- Map Tailwind utility classes to WordPress "Layout" or "Custom CSS" settings.
- **Query Loops**: For `FacultyPattern.tsx` and `NewsArchivePattern.tsx`, use the `wp:query` block.
- **Registering**: Ensure every pattern is registered in `functions.php` with the slug format `fl-coastal-prep/[name]`.

## 2. TEMPLATE HIERARCHY
- Follow `docs/FILE_INVENTORY.md` exactly for template naming.
- Ensure `front-page.html` is the primary entry point.
- Use the `wp:pattern` block within templates to include patterns.

## 3. CUSTOM POST TYPES
- Ensure the `Faculty`, `Program`, and `Schedule` types in `functions.php` have `'show_in_rest' => true` to enable the Block Editor.
- Support Elementor by including `'elementor'` in the `'supports'` array.