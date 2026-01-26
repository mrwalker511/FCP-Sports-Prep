# Complete File Inventory
## Florida Coastal Prep WordPress Theme

Quick reference guide to every file in this project.

> **Note (repo structure):** The production WordPress theme files live in the repository root.
> The original React/Vite reference implementation has been moved to `prototype/react/`.
> Internal documentation has been consolidated under `docs/`.

---

## 📋 QUICK SUMMARY

- **Total Files**: ~60 files
- **WordPress-Ready Files**: 23 files (✅)
- **Requires Conversion**: 14 React pattern files (🔄)
- **Reference Only**: 7 React component files (ℹ️)
- **Development Only**: 11+ files (❌ exclude from WordPress zip)

---

## ✅ CORE WORDPRESS FILES (Ready to Deploy)

| File | Purpose | Size | Priority |
|------|---------|------|----------|
| `style.css` | Theme header metadata | 706 B | 🔴 Critical |
| `functions.php` | Theme functionality | 6.1 KB | 🔴 Critical |
| `theme.json` | FSE configuration | 1.7 KB | 🔴 Critical |
| `readme.txt` | WordPress.org format docs | 1.3 KB | 🟡 Important |
| `metadata.json` | Additional theme metadata | 259 B | 🟢 Optional |

**Status**: These 5 files are production-ready and require no changes.

---

## 📁 TEMPLATES FOLDER (/templates/)

### WordPress Template Files (18 total - all ✅ ready)

| File | Template For | Lines | Block Patterns Used |
|------|-------------|-------|-------------------|
| `front-page.html` | Homepage | 27 | hero, stats, grid, cta |
| `index.html` | Blog archive / fallback | 27 | news-archive |
| `single.html` | Single post/CPT | 18 | Basic content blocks |
| `404.html` | Error page | 42 | Custom error design |
| `archive-faculty.html` | Faculty CPT archive | 18 | faculty-grid |
| `archive-schedule.html` | Schedule CPT archive | 21 | schedule-results |
| `page-apply.html` | Application page | 23 | apply-form |
| `page-campus.html` | Campus facilities | 24 | campus-showcase |
| `page-contact.html` | Contact page | 24 | contact-form |
| `page-donors.html` | Donor recognition | 24 | donors-showcase |
| `page-faculty.html` | Faculty page | 24 | faculty-grid |
| `page-news.html` | News archive | 24 | news-archive |
| `page-programs.html` | Programs overview | 20 | programs-hero, programs-detail |
| `page-schedule.html` | Schedule page | 24 | schedule-results |
| `page-privacy.html` | Privacy policy | 10 | Basic content |
| `page-terms.html` | Terms of service | 10 | Basic content |
| `page-elementor-full-width.html` | Elementor with header/footer | 8 | None (Elementor canvas) |
| `page-elementor-canvas.html` | Elementor blank slate | 1 | None (completely blank) |

**Usage**: Assign templates via Page Attributes dropdown in WordPress editor.

---

## 📁 TEMPLATE PARTS FOLDER (/parts/)

| File | Type | Status | Purpose |
|------|------|--------|---------|
| `header.html` | WordPress | ✅ Ready | Site header (block markup) |
| `footer.html` | WordPress | ✅ Ready | Site footer (block markup) |

**React reference** (not shipped with the theme):
- `prototype/react/parts/Header.tsx`
- `prototype/react/parts/Footer.tsx`

---

## 📁 PATTERNS FOLDER (/patterns/)

### WordPress Block Patterns (PHP — ✅ ready)

| File | Status | Purpose |
|------|--------|---------|
| `hero.php` | ✅ Ready | Homepage hero section |
| `stats.php` | ✅ Ready | Homepage stats bar |
| `grid.php` | ✅ Ready | Homepage feature grid |
| `cta.php` | ✅ Ready | Call-to-action banner |
| `programs-hero.php` | ✅ Ready | Programs page hero |
| `programs-detail.php` | ✅ Ready | Programs detail/timeline |
| `faculty-grid.php` | ✅ Ready | Faculty CPT grid/query loop |
| `campus-showcase.php` | ✅ Ready | Campus facilities showcase |
| `section-header.php` | ✅ Ready | Reusable section header |
| `news-archive.php` | ✅ Ready | News/posts archive grid |
| `schedule-results.php` | ✅ Ready | Schedule CPT results table |
| `apply-form.php` | ✅ Ready | Apply page form (pattern markup) |
| `donors-showcase.php` | ✅ Ready | Donor recognition tiers |
| `contact-form.php` | ✅ Ready | Contact page form/info |

**React reference** (not shipped with the theme): `prototype/react/patterns/*.tsx`

---

## 📁 PROTOTYPE REACT COMPONENTS (`prototype/react/components/`)

Legacy React components used by the Vite prototype only.

| File | Status | Notes |
|------|--------|-------|
| `Hero.tsx` | Reference | Legacy component (superseded by TSX patterns) |
| `Navbar.tsx` | Reference | Legacy component (superseded by `prototype/react/parts/Header.tsx`) |
| `Footer.tsx` | Reference | Legacy component (superseded by `prototype/react/parts/Footer.tsx`) |
| `StatsBar.tsx` | Reference | Legacy component |
| `CTASection.tsx` | Reference | Legacy component |
| `DifferenceSection.tsx` | Reference | Legacy component |

**Action**: ❌ Exclude `prototype/react/**` from the WordPress theme ZIP.

---

## ❌ DEVELOPMENT FILES (Do Not Include in WordPress)

### React/Vite Prototype (reference only)
| File | Purpose |
|------|---------|
| `prototype/react/App.tsx` | React application entry point |
| `prototype/react/index.tsx` | React DOM renderer |
| `prototype/react/index.html` | Vite dev server HTML template |

### Build Configuration (development-only)
| File | Purpose |
|------|---------|
| `package.json` | npm dependencies and scripts (drives the React prototype) |
| `package-lock.json` | npm lockfile |
| `vite.config.ts` | Vite bundler configuration (uses `prototype/react/` as Vite root) |
| `prototype/react/tsconfig.json` | TypeScript compiler settings for the prototype |

### Git & Misc
| File | Purpose |
|------|---------|
| `.gitignore` | Git ignore rules |
| `.git/` | Git version control folder |
| `node_modules/` | npm packages (if exists) |
| `dist/` | Build output (if exists) |

**Action**: Exclude all of these when creating WordPress theme ZIP.

---

## 📄 DOCUMENTATION FILES

| File | Purpose | Audience | Pages |
|------|---------|----------|-------|
| `README.md` | Project overview | Developers | 1 |
| `docs/USER_MANUAL.md` | Theme usage guide | End users | 2 |
| `docs/DEBUG_LOG.md` | Development log | Developers | 1.5 |
| `docs/WORDPRESS_MIGRATION_GUIDE.md` | Migration instructions | Developers/LLM | 12 |
| `docs/PATTERN_VISUAL_REFERENCE.md` | Pattern design specs | Developers/LLM | 15 |
| `docs/FILE_INVENTORY.md` | This file | All | 3 |

**Recommendation**: Include `docs/USER_MANUAL.md` in the WordPress theme ZIP (or copy it to the theme root before packaging). Others are for development reference.

---

## 📊 FILE TYPE BREAKDOWN

### By File Type:
```
.html (templates)      18 files ✅
.php                    1 file  ✅
.css                    1 file  ✅
.json                   2 files ✅
.txt                    1 file  ✅
.tsx (patterns)        15 files 🔄
.tsx (components)       7 files ℹ️
.tsx (main app)         2 files ❌
.ts (config)            2 files ❌
.md (docs)              6 files 📄
```

### By Status:
```
WordPress-Ready (✅):      23 files (deploy as-is)
Needs Conversion (🔄):     15 files (React → WP blocks)
Reference Only (ℹ️):        7 files (legacy components)
Exclude from WP (❌):      11 files (dev environment)
Documentation (📄):         6 files (optional)
```

---

## 🎯 WORDPRESS THEME PACKAGE CHECKLIST

### Required Files:
- [x] `style.css`
- [x] `functions.php`
- [x] `theme.json`
- [x] `readme.txt`
- [x] `/templates/` folder (18 files)
- [x] `/parts/` folder (2 .html files)
- [ ] `/patterns/` folder (14 converted .php or .html files)

### Optional but Recommended:
- [x] `USER_MANUAL.md`
- [ ] `screenshot.png` (1200x900px theme preview)
- [ ] `/assets/` folder (if custom images/CSS needed)
- [ ] `/languages/` folder (if translation-ready)

### Must Exclude:
- [ ] All `.tsx` and `.ts` files
- [ ] `package.json`, `vite.config.ts`, `tsconfig.json`
- [ ] `node_modules/`, `dist/`, `.git/`
- [ ] `App.tsx`, `index.tsx`, root `index.html`

---

## 📁 RECOMMENDED FINAL STRUCTURE

```
florida-coastal-prep/
├── style.css               ← Theme header
├── functions.php           ← PHP logic
├── theme.json             ← FSE config
├── readme.txt             ← WordPress docs
├── USER_MANUAL.md         ← End user guide
├── screenshot.png         ← Theme preview (add this!)
│
├── templates/             ← Page templates
│   ├── front-page.html
│   ├── index.html
│   ├── single.html
│   ├── 404.html
│   ├── archive-*.html (2 files)
│   └── page-*.html (12 files)
│
├── parts/                 ← Template parts
│   ├── header.html
│   └── footer.html
│
└── patterns/              ← Block patterns (NEEDS WORK)
    ├── hero.php
    ├── stats.php
    ├── grid.php
    ├── cta.php
    ├── section-header.php
    └── ... (9 more files)
```

**Estimated Package Size**: 50-100 KB (excluding images)

---

## 🔍 FINDING SPECIFIC CONTENT

### Where to find colors:
- **Defined**: `theme.json` lines 8-14
- **Used**: All `.tsx` pattern files (Tailwind classes)
- **WordPress implementation**: `theme.json` → available in Site Editor

### Where to find fonts:
- **Defined**: `theme.json` lines 17-21
- **Loaded**: `functions.php` line 165
- **Used**: Tailwind `font-display`, `font-heading`, `font-sans` classes

### Where to find custom post types:
- **Registered**: `functions.php` lines 133-160
- **Templates**: `archive-faculty.html`, `archive-schedule.html`

### Where to find SEO functions:
- **Meta tags**: `functions.php` lines 70-102
- **Schema markup**: `functions.php` lines 107-128

### Where to find navigation:
- **Registered**: `functions.php` lines 24-27
- **React reference header**: `prototype/react/parts/Header.tsx`
- **React reference footer**: `prototype/react/parts/Footer.tsx`

### Where to find block patterns:
- **WordPress patterns (production)**: `/patterns/*.php`
- **Referenced in**: All `/templates/*.html` files
- **React visual reference**: `prototype/react/patterns/*.tsx`

---

## 🎨 ASSET REQUIREMENTS

### Images Needed:
1. **screenshot.png** (1200x900px) - Theme preview for WordPress admin
2. **Hero backgrounds** - Basketball court, training facility (3-4 images)
3. **Faculty photos** - Professional headshots (6-8 images)
4. **Campus photos** - Facilities, courts, classrooms (5-7 images)
5. **Logo/Icon** - Site logo (SVG preferred)
6. **Favicon** - Site icon (512x512px)

### Currently Using:
- Unsplash API images (placeholders)
- Material Icons (Google CDN)
- Google Fonts (CDN)

### Production Recommendations:
- Self-host critical fonts for GDPR compliance
- Optimize images (WebP format, responsive sizes)
- Add proper alt text to all images
- Use SVG for logos and icons

---

## 🔧 CUSTOMIZATION HOTSPOTS

### To change brand colors:
**File**: `theme.json`  
**Lines**: 8-14  
**Impact**: Site-wide (Site Editor + Elementor)

### To change fonts:
**File**: `theme.json` (lines 17-21) + `functions.php` (line 165)  
**Impact**: Site-wide typography

### To add new Custom Post Type:
**File**: `functions.php`  
**Line**: ~133 (add new `register_post_type` block)  
**Also create**: Archive and single templates

### To add new block pattern:
1. Register slug in `functions.php` (line 37+)
2. Create pattern HTML in `/patterns/` folder
3. Reference in template using `<!-- wp:pattern {"slug":"..."} /-->`

### To modify header/footer:
**Files**: `parts/header.html`, `parts/footer.html`  
**Edit in**: WordPress Site Editor (Appearance → Editor → Template Parts)

---

## 📞 TECHNICAL SPECIFICATIONS

### WordPress Requirements:
- **Version**: 6.2 minimum, 6.4+ recommended
- **PHP**: 7.4 minimum
- **MySQL**: 5.7+ or MariaDB 10.2+

### Theme Features:
- Full Site Editing (FSE)
- Custom Post Types: 3
- Block Patterns: 14
- Template Types: 18
- Elementor Support: Yes
- Translation Ready: Partial (needs .pot file)

### Performance:
- No jQuery dependency
- Minimal CSS (theme.json + custom)
- Lazy-loaded images (native)
- No external JS frameworks

### Browser Support:
- Chrome/Edge: Last 2 versions
- Firefox: Last 2 versions
- Safari: Last 2 versions
- Mobile: iOS Safari, Chrome Android

---

## 🚀 DEPLOYMENT WORKFLOW

### 1. Pre-Deployment:
```bash
# Remove development files
rm -rf node_modules/
rm package.json vite.config.ts tsconfig.json
rm App.tsx index.tsx index.html
rm -rf components/

# Convert patterns (manual work)
# Create /patterns/ folder with PHP/HTML files

# Add assets
# Create screenshot.png (1200x900)
```

### 2. Create ZIP:
```bash
# From parent directory
zip -r florida-coastal-prep.zip florida-coastal-prep/ \
  -x "*.git*" "*.tsx" "*.ts" "node_modules/*" "dist/*"
```

### 3. Upload to WordPress:
```
1. Go to: Appearance → Themes → Add New → Upload Theme
2. Choose: florida-coastal-prep.zip
3. Click: Install Now
4. Click: Activate
```

### 4. Post-Activation:
```
1. Appearance → Editor → Browse all templates
2. Customize global styles (colors, fonts)
3. Create navigation menus
4. Set site logo and icon
5. Create initial content (Faculty, Programs, Schedule)
```

---

## 📚 RELATED DOCUMENTATION

For detailed information, see:

1. **WORDPRESS_MIGRATION_GUIDE.md** - Complete migration instructions
2. **PATTERN_VISUAL_REFERENCE.md** - Visual specifications for each pattern
3. **USER_MANUAL.md** - End user theme guide
4. **DEBUG_LOG.md** - Development decisions and fixes
5. **README.md** - Project overview

---

## 💡 QUICK TIPS

### For Developers:
- Start with high-priority patterns (Hero, Stats, Grid, CTA)
- Use Contact Form 7 plugin instead of building custom forms
- Test in WordPress Site Editor frequently
- Keep pattern markup simple (native blocks when possible)

### For Theme Users:
- Use Site Editor for global changes (colors, fonts, header, footer)
- Use Elementor templates for custom landing pages
- Fill out post excerpts for SEO meta descriptions
- Add featured images to all posts for social sharing

### For Content Creators:
- Faculty: Use featured image for headshot, excerpt for bio preview
- Programs: Use editor for curriculum details, custom fields for specifics
- Schedule: Use custom fields (ACF) for dates, scores, opponents
- News: Regular WordPress posts with category "News"

---

**Last Updated**: January 2025  
**Theme Version**: 1.0.0  
**Total Project Lines**: ~2,500 (excluding node_modules)  
**Estimated Completion**: 85% (patterns need conversion)
