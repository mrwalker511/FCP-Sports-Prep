# Florida Coastal Prep - Theme Owner's Manual

Welcome to the **Florida Coastal Prep** FSE Block Theme. This theme is designed for high-performance athletic academies, combining the power of WordPress Full Site Editing (FSE) with seamless Elementor compatibility.

## 1. Technical Requirements
- **WordPress Version**: 6.2 or higher (6.4+ recommended for full FSE support).
- **PHP Version**: 7.4 or higher.
- **Plugins (Optional)**: 
  - **Elementor**: For custom page building using our optimized templates.
  - **Advanced Custom Fields (ACF)**: Recommended for expanding the Schedule CPT.

## 2. Theme Architecture
This theme follows the modern FSE structure:
- `/templates`: The core page structures (Home, Archive, Single).
- `/parts`: Reusable site areas (Header, Footer).
- `/patterns`: Pre-designed layout blocks (Hero, Stats, Faculty Grid).
- `theme.json`: The "Brain" of the theme, controlling global colors and typography.

## 3. Installation Steps
1. **Compress**: Zip the theme directory (exclude `prototype/react/` and other development-only files if you are deploying to production).
2. **Upload**: Go to `Appearance > Themes > Add New > Upload`.
3. **Activate**: Once activated, go to `Appearance > Editor` to begin customizing your site via the Site Editor.

## 4. Working with Custom Post Types (CPTs)
The theme automatically registers three CPTs in `functions.php`:
- **Faculty**: For coaches and staff.
- **Programs**: For curriculum details.
- **Schedule**: For game dates and scores.

**To add content**: Simply navigate to the new menu items in your WordPress sidebar and create "New" entries. The theme will automatically use the corresponding `archive-` and `single-` templates.

## 5. Elementor Integration
This theme is "Elementor-Friendly" by design.
- **Full Width Template**: Use `page-elementor-full-width.html`. This keeps the theme's Header/Footer but gives Elementor a 100% wide container.
- **Canvas Template**: Use `page-elementor-canvas.html` for a completely blank slate.
- **Global Styles**: Colors defined in `theme.json` are automatically available in Elementor's "Theme Colors" color picker.

## 6. SEO & Social Sharing
Default SEO features are baked into `functions.php`:
- **Meta Tags**: Descriptions are pulled from the post "Excerpt". Ensure you fill this out for every post.
- **JSON-LD**: Injects EducationalOrganization schema for Google.
- **Open Graph**: Auto-generates tags for high-quality social sharing using the "Featured Image".

## 7. Developer Customization
To change the brand colors:
1. Open `theme.json`.
2. Locate the `settings.color.palette` section.
3. Change the Hex codes for `primary` and `contrast`.
4. The changes will instantly reflect in both the Gutenberg Editor and Elementor.

---
*Built by the Senior Engineering Team for Florida Coastal Preparatory.*
