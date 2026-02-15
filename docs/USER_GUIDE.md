# User Guide
## User Manual
# Florida Coastal Prep - Theme Owner's Manual

## ⚠️ For AI Agents / Developers
If you are an AI agent working on this theme, read [`/AGENT_MEDIATOR.md`](../AGENT_MEDIATOR.md) FIRST for coordination rules and architecture guidelines.

---

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

## 8. Quality Assurance & Testing
The theme includes a comprehensive automated test suite to ensure security and code quality.

**To run tests**:
1. Open a terminal in the theme root directory.
2. Ensure dependencies are installed: `composer install`.
3. Run the test command: `composer test`.

This will verify:
- **Security**: Protection against XSS and SQL injection.
- **Integrity**: Validation of all WordPress block markup in patterns and templates.
- **Availability**: Confirmation that all necessary WordPress functions and Custom Post Types are loaded correctly.

## 9. Demo Content

The theme includes demo content to help you get started quickly.

### Starter Content (Pages & Menus)
On a **fresh WordPress install**, the theme automatically provides Starter Content:
1. Activate the theme.
2. Go to `Appearance → Customize`.
3. Click **Publish** to create demo pages and navigation menus.

> **Note**: Starter Content only appears on new installations. Existing sites will not see this option.

### Importing CPT Demo Data
For demo Faculty, Programs, and Schedule entries:
1. Go to `Tools → Import → WordPress` (install the importer if prompted).
2. Upload the file: `demo-data/demo-content.xml`.
3. Assign imported content to your user account.
4. Check **Download and import file attachments**.

After import, visit the Faculty, Programs, and Schedule archive pages to see demo content.

See [DEMO_CONTENT.md](DEMO_CONTENT.md) for technical details.

---
*Built by the Senior Engineering Team for Florida Coastal Preparatory.*
\n## Demo Content Setup
# Demo Content Technical Guide

## ⚠️ For AI Agents
Before modifying demo content systems, read [`/AGENT_MEDIATOR.md`](../AGENT_MEDIATOR.md) for coordination rules.

---

This document describes the demo content system for the Florida Coastal Prep theme.

---

## Overview

Demo content is provided through two complementary mechanisms:

| Mechanism | Content Type | Activation |
|-----------|--------------|------------|
| **Starter Content API** | Pages, Menus, Options | Customizer on fresh install |
| **WXR Import File** | CPT Posts (Faculty, Programs, Schedule) | Tools → Import |

---

## 1. Starter Content API

Located in `functions.php`, the Starter Content API creates:

### Demo Pages
| Page | Template | Purpose |
|------|----------|---------|
| Home | `front-page.html` | Hero, Stats, Grid, CTA patterns |
| Programs | `page-programs` | Athletic & Academic tracks |
| Faculty & Staff | `page-faculty` | Coach/staff profiles grid |
| Campus | `page-campus` | Facilities showcase |
| Contact | `page-contact` | Contact form |
| Apply Now | `page-apply` | Application form |
| Donors | `page-donors` | Donor recognition |
| News | `page-news` | News archive |
| Schedule | `page-schedule` | Game schedule |
| Privacy Policy | `page-privacy` | Legal page |
| Terms of Service | `page-terms` | Legal page |

### Navigation Menus
- **Primary Menu**: Home, Programs, Faculty, Campus, News, Apply
- **Footer Menu**: Privacy, Terms, Contact

### Site Options
- Front page set to "Home"
- Blog description: "The Future of Elite Ball"

### How It Works
Starter Content activates when:
1. WordPress is a fresh install (no prior content)
2. The Customizer is opened
3. User clicks "Publish"

```php
// Reference: functions.php
add_theme_support('starter-content', array(
    'posts' => array(/* pages */),
    'options' => array(/* settings */),
    'nav_menus' => array(/* menus */),
));
```

---

## 2. WXR Demo Import

File: `demo-data/demo-content.xml`

### Included Content

**Faculty (5 entries)**
- Head Coach Marcus Thompson
- Assistant Coach Sarah Williams
- Academic Director Dr. James Chen
- Strength Coach Michael Rodriguez
- Athletic Trainer Lisa Park

**Programs (3 entries)**
- Elite Basketball Program
- University Preparatory Academics
- Strength & Conditioning Track

**Schedule (8 entries)**
- Sample game schedule for upcoming season
- Include opponent names, dates, locations

### Import Process
1. `Tools → Import → WordPress`
2. Upload `demo-content.xml`
3. Assign to admin user
4. Enable attachment import

---

## 3. Demo Images

Patterns use Unsplash images via CDN URLs:
- `https://images.unsplash.com/photo-1546519638-68e109498ffc` (Basketball)
- `https://images.unsplash.com/photo-1505666287802-931dc8394b5f` (Track)
- `https://images.unsplash.com/photo-1497633762265-9d179a990aa6` (Academics)

> **Production Note**: For self-hosted deployments, download images to `/assets/images/` and update pattern URLs.

---

## 4. Customizing Demo Content

### Modify Starter Content
Edit the `add_theme_support('starter-content', ...)` block in `functions.php`.

### Modify WXR Export
1. Create content in a local WordPress install
2. Go to `Tools → Export`
3. Select specific post types
4. Replace `demo-data/demo-content.xml`

### Remove Demo Content After Setup
- Delete pages via `Pages → All Pages`
- Delete CPT entries via their respective admin menus
- Clear navigation via `Appearance → Editor → Navigation`

---

## 5. Testing Demo Content

Verify installation with:

```bash
# Run pattern validation tests
composer test:patterns

# Run full test suite
composer test
```

Manual verification checklist:
- [x] Home page displays Hero, Stats, Grid, CTA
- [x] Programs page shows both Athletic and Academic tracks
- [x] Faculty archive displays grid of staff
- [x] Schedule archive displays game list
- [x] Navigation menus appear in header/footer

---

## New Page Templates

### About/Mission Template

**File**: `templates/page-about.html`

**Purpose**: Showcase academy's vision, mission, values, and team.

**How to Use**:
1. Create new page: "About Our Academy"
2. Page Attributes → Template → "About/Mission"
3. Edit content in Site Editor:
   - Vision statement (paragraph block)
   - Mission statement (paragraph block)
   - Values grid (edit card titles, descriptions, images)
   - Team photos (replace images, update labels)
4. Publish

**Content Tips**:
- Vision: 2-3 sentences, aspirational future state
- Mission: 2-3 sentences, current purpose
- Values: 3-6 pillars (Excellence, Integrity, Community, etc.)
- Team photos: High-quality images of staff, students, campus

---

### Coaching Staff Template

**File**: `templates/page-coaches.html`

**Purpose**: Display coaching staff directory.

**How to Use**:
1. Create new page: "Coaching Staff"
2. Page Attributes → Template → "Coaching Staff"
3. Publish

**Content Setup**:
1. Posts → Faculty → Categories
2. Create category: "Coaches"
3. Create/edit Faculty posts:
   - Add featured image (headshot)
   - Write excerpt (10-20 words)
   - Assign "Coaches" category
4. Posts automatically appear in grid

**Coach Post Fields**:
- Title: Coach name
- Excerpt: Title/specialty (e.g., "Head Coach • 15 Years Experience")
- Content: Full bio
- Featured Image: Professional headshot (square crop)
- Category: "Coaches"

---

### Admissions/Enrollment Template

**File**: `templates/page-admissions.html`

**Purpose**: Guide prospective students through admissions.

**How to Use**:
1. Create new page: "Admissions"
2. Page Attributes → Template → "Admissions/Enrollment"
3. Edit in Site Editor:
   - Hero: Update title, description, button links
   - Requirements: Customize criteria lists
   - Process Timeline: Update steps and images
   - FAQ: Edit questions and answers
4. Set up WPForms:
   - Create admissions application form
   - Copy shortcode
   - Replace `[wpforms id="123"]` in form section
5. Publish

**Sections**:
- Hero: Compelling CTA with apply button
- Requirements: Academic and athletic eligibility
- Process: 4-6 enrollment steps with visuals
- FAQ: 6-10 common admissions questions
- Form: WPForms application with fields for personal, academic, athletic info

**Hero Button Setup**:
- Primary button: Text "Apply Now", Link: `#application-form` (anchor to form)
- Secondary button: Text "Schedule Visit", Link: `/contact` or calendar URL
