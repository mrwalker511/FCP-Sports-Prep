# Reference Documentation
## File Inventory
# Complete File Inventory
## Florida Coastal Prep WordPress Theme

## ⚠️ For AI Agents
Before modifying files listed in this inventory, read [`/AGENT_MEDIATOR.md`](../AGENT_MEDIATOR.md) for critical file structure rules and constraints.

---

Quick reference guide to every file in this project.

> **Note (repo structure):** The production WordPress theme files live in the repository root.
> The original React/Vite reference implementation has been moved to `prototype/react/`.
> Internal documentation has been consolidated under `docs/`.

---

## 📋 QUICK SUMMARY

- **Total Files**: ~90 files
- **WordPress-Ready Files**: 49 files (✅)
- **Requires Conversion**: 0 files (✅)
- **Reference Only**: 24 React files (ℹ️)
- **Development Only**: 11+ files (❌ exclude from WordPress zip)
- **Test Suite**: 15+ files (🛠️)

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

### WordPress Template Files (22 total - all ✅ ready)

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
| `single-faculty.html` | Single faculty member | 18 | Basic content blocks |
| `single-program.html` | Single program | 18 | Basic content blocks |
| `single-schedule.html` | Single schedule item | 18 | Basic content blocks |
| `search.html` | Search results | 21 | Basic query loop |

**Usage**: Assign templates via Page Attributes dropdown in WordPress editor.

---

## 📁 TEMPLATE PARTS FOLDER (/parts/)

| File | Type | Status | Purpose |
|------|------|--------|---------|
| `header.html` | WordPress | ✅ Ready | Site header (block markup) |
| `footer.html` | WordPress | ✅ Ready | Site footer (block markup) |
| `comments.html` | WordPress | ✅ Ready | Comments section (block markup) |

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
| `blueprint-gallery.php` | ✅ Ready | Additional gallery pattern |

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
| `docs/USER_GUIDE.md` | Theme usage guide | End users | 2 |
| `docs/DEBUG_LOG.md` | Development log | Developers | 1.5 |
| `docs/DEVELOPER_GUIDE.md` | Migration instructions | Developers/LLM | 12 |
| `docs/REFERENCE.md` | Pattern design specs | Developers/LLM | 15 |
| `docs/REFERENCE.md` | This file | All | 3 |

**Recommendation**: Include `docs/USER_GUIDE.md` in the WordPress theme ZIP (or copy it to the theme root before packaging). Others are for development reference.

---

## 📊 FILE TYPE BREAKDOWN

### By File Type:
```
.html (templates)      22 files ✅
.html (parts)           3 files ✅
.php (patterns)        15 files ✅
.php (functions)        1 file  ✅
.css                    1 file  ✅
.json                   2 files ✅
.txt                    1 file  ✅
.tsx (patterns)        15 files ℹ️ (reference only)
.tsx (components)       7 files ℹ️ (reference only)
.tsx (main app)         2 files ❌
.ts (config)            2 files ❌
.md (docs)              6 files 📄
```

### By Status:
```
WordPress-Ready (✅):      45 files (deploy as-is)
Needs Conversion (🔄):      0 files (COMPLETE)
Reference Only (ℹ️):       24 files (React prototype)
Exclude from WP (❌):      11 files (dev environment)
Documentation (📄):         6 files (updated)
Test Suite (🛠️):           15+ files (QA)
```

---

## 🎯 WORDPRESS THEME PACKAGE CHECKLIST

### Required Files:
- [x] `style.css`
- [x] `functions.php`
- [x] `theme.json`
- [x] `readme.txt`
- [x] `/templates/` folder (22 files)
- [x] `/parts/` folder (3 .html files)
- [x] `/patterns/` folder (15 converted .php files)

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
- Block Patterns: 15
- Template Types: 22
- Template Parts: 3
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

**Last Updated**: February 2026
**Theme Version**: 1.0.0
**Total Project Lines**: ~4,500 (including tests)
**Estimated Completion**: 100% (COMPLETE)
\n## Production File List
# Production Theme Package File List
## Florida Coastal Prep WordPress Theme - Ready for Upload

**Generated**: February 01, 2026  
**Theme Version**: 1.0.0  
**Total Production Files**: 63 files

---

## ⚠️ For AI Agents
Before modifying production file structure, read [`/AGENT_MEDIATOR.md`](../AGENT_MEDIATOR.md) for critical file organization rules.

---

## 📂 REQUIRED FOLDERS

The following folder structure **MUST** be maintained in the production theme package:

```
florida-coastal-prep-theme/
├── templates/          ← Page & archive templates (22 .html files)
├── parts/              ← Template parts (3 .html files)
├── patterns/           ← Block patterns (15 .php files)
├── demo-data/          ← Demo content WXR file (optional)
└── docs/               ← User documentation (optional)
```

| Folder | Required | Contents |
|--------|----------|----------|
| `templates/` | ✅ YES | FSE page templates (22 .html files) |
| `parts/` | ✅ YES | Template parts - header.html, footer.html, comments.html |
| `patterns/` | ✅ YES | Block patterns (15 .php files) |
| `demo-data/` | ⚡ Optional | demo-content.xml for CPT imports |
| `docs/` | ⚡ Optional | USER_MANUAL.md, DEMO_CONTENT.md |

> **Note**: Folders must exist even if empty for WordPress to recognize the theme structure properly.

---

## ✅ INCLUDE THESE FILES (64 total)

### 📄 Core Theme Files (7 files)
```
✅ style.css                    (1,036 bytes)  - Theme header metadata
✅ functions.php                (4,846 bytes)  - Theme functionality
✅ index.php                    (194 bytes)    - Required for theme validity
✅ theme.json                   (2,372 bytes)  - FSE configuration
✅ readme.txt                   (1,278 bytes)  - WordPress.org documentation
✅ metadata.json                  (259 bytes)  - Additional theme metadata
✅ screenshot.png               (212 Kbytes)   - Theme preview image
```

### 📁 Templates Folder (22 files)
```
✅ templates/404.html
✅ templates/archive-faculty.html
✅ templates/archive-program.html
✅ templates/archive-schedule.html
✅ templates/front-page.html
✅ templates/index.html
✅ templates/page-apply.html
✅ templates/page-campus.html
✅ templates/page-contact.html
✅ templates/page-donors.html
✅ templates/page-elementor-canvas.html
✅ templates/page-elementor-full-width.html
✅ templates/page-faculty.html
✅ templates/page-news.html
✅ templates/page-privacy.html
✅ templates/page-programs.html
✅ templates/page-schedule.html
✅ templates/page-terms.html
✅ templates/search.html
✅ templates/single.html
✅ templates/single-faculty.html
✅ templates/single-program.html
✅ templates/single-schedule.html
```

**Note**: Exclude `templates/test-tokens.html` (development file)

### 📁 Template Parts Folder (3 files)
```
✅ parts/header.html            (2,567 bytes)  - Site header
✅ parts/footer.html            (5,087 bytes)  - Site footer
✅ parts/comments.html          (4,957 bytes)  - Comments section
```

### 📁 Block Patterns Folder (15 files)
```
✅ patterns/apply-form.php           (2,900 bytes)
✅ patterns/blueprint-gallery.php    (3,200 bytes)
✅ patterns/campus-showcase.php     (10,172 bytes)
✅ patterns/contact-form.php         (5,011 bytes)
✅ patterns/cta.php                  (4,084 bytes)
✅ patterns/donors-showcase.php      (7,085 bytes)
✅ patterns/faculty-grid.php         (3,086 bytes)
✅ patterns/grid.php                (11,253 bytes)
✅ patterns/hero.php                 (5,325 bytes)
✅ patterns/news-archive.php         (3,917 bytes)
✅ patterns/programs-detail.php      (8,474 bytes)
✅ patterns/programs-hero.php        (2,402 bytes)
✅ patterns/schedule-results.php     (4,632 bytes)
✅ patterns/section-header.php       (1,941 bytes)
✅ patterns/stats.php                (5,749 bytes)
```

### 📚 Documentation (Optional)
```
✅ docs/USER_GUIDE.md            - End user guide (optional; include in ZIP if desired)
✅ docs/USER_GUIDE.md           - Demo content setup instructions
✅ README.md                     - Project overview
```

### 📦 Demo Data (Optional)
```
✅ demo-data/demo-content.xml    - WXR import file for CPT demo content
```

---

## ❌ EXCLUDE THESE FILES (Development Only)

### React/Vite Prototype (reference only)
```
❌ prototype/react/**   (all React .tsx source files)
```

### Build/Development Configuration
```
❌ package.json
❌ package-lock.json
❌ vite.config.ts
```

### Version Control & Dependencies
```
❌ .git/ (entire folder)
❌ .gitignore
❌ node_modules/ (if exists)
❌ dist/ (if exists)
```

### Development Documentation
```
❌ AGENT_MEDIATOR.md
❌ docs/**   (internal docs; optionally include docs/USER_GUIDE.md)
```

### Test/Development Templates
```
❌ templates/test-tokens.html
```

### Test Suite (Development Only)
```
❌ composer.json
❌ composer.lock
❌ phpunit.xml
❌ tests/**
❌ vendor/**
❌ .phpunit.result.cache
❌ test-results.txt
```

---

## 📦 PACKAGING COMMANDS

### Option 1: PowerShell (Windows) - Recommended
```powershell
# Navigate to parent directory
cd "C:\Users\Matt Walker\Desktop\FCP"

# Create a clean staging folder
$staging = "florida-coastal-prep-theme"
Remove-Item -Path $staging -Recurse -Force -ErrorAction SilentlyContinue
New-Item -ItemType Directory -Path $staging | Out-Null

# Copy core theme files
Copy-Item "FCP-Sports-Prep\style.css" $staging
Copy-Item "FCP-Sports-Prep\functions.php" $staging
Copy-Item "FCP-Sports-Prep\index.php" $staging
Copy-Item "FCP-Sports-Prep\theme.json" $staging
Copy-Item "FCP-Sports-Prep\readme.txt" $staging
Copy-Item "FCP-Sports-Prep\metadata.json" $staging
Copy-Item "FCP-Sports-Prep\screenshot.png" $staging
Copy-Item "FCP-Sports-Prep\README.md" $staging

# Copy required folders (preserves structure)
Copy-Item "FCP-Sports-Prep\templates" "$staging\templates" -Recurse -Exclude "test-tokens.html"
Copy-Item "FCP-Sports-Prep\parts" "$staging\parts" -Recurse
Copy-Item "FCP-Sports-Prep\patterns" "$staging\patterns" -Recurse

# Copy optional folders
New-Item -ItemType Directory -Path "$staging\docs" | Out-Null
Copy-Item "FCP-Sports-Prep\docs\USER_MANUAL.md" "$staging\docs"
Copy-Item "FCP-Sports-Prep\docs\DEMO_CONTENT.md" "$staging\docs"
Copy-Item "FCP-Sports-Prep\demo-data" "$staging\demo-data" -Recurse

# Create the ZIP archive
Remove-Item "florida-coastal-prep-theme.zip" -Force -ErrorAction SilentlyContinue
Compress-Archive -Path $staging -DestinationPath "florida-coastal-prep-theme.zip" -Force

# Cleanup staging folder
Remove-Item -Path $staging -Recurse -Force

Write-Host "✅ Created florida-coastal-prep-theme.zip successfully!"
```

### Option 2: Manual Selection
1. Create a new folder: `florida-coastal-prep-theme/`
2. Copy the 63 production files listed above
3. Right-click folder → Send to → Compressed (zipped) folder

### Option 3: Command Line (if you have zip utility)
```bash
cd "C:\Users\Matt Walker\Desktop\FCP"

zip -r florida-coastal-prep-theme.zip FCP-Sports-Prep/ \
  -i "*.php" "*.html" "*.css" "*.json" "*.txt" "*.md" "*.png" \
  -x "*.tsx" "*.ts" \
  -x "prototype/react/*" "prototype/react/**" \
  -x "*node_modules/*" "*/.git/*" "*/dist/*" \
  -x "package.json" "package-lock.json" "vite.config.ts" \
  -x "composer.json" "composer.lock" "phpunit.xml" "tests/**" "vendor/**" \
  -x "AGENT_MEDIATOR.md" \
  -x "docs/DEVELOPER_GUIDE.md" "docs/DEBUG_LOG.md" "docs/DEVELOPER_GUIDE.md" \
  -x "docs/REFERENCE.md" "docs/REFERENCE.md" "docs/REFERENCE.md" \
  -x "docs/DEVELOPER_GUIDE.md" \
  -x "*/test-tokens.html"
```

---

## 📊 PACKAGE SUMMARY

| Category | Count | Total Size |
|----------|-------|------------|
| Core Files | 7 | ~222 KB |
| Templates | 22 | ~22 KB |
| Template Parts | 3 | ~13 KB |
| Block Patterns (PHP) | 15 | ~80 KB |
| Documentation | 2 | ~3 KB |
| **TOTAL** | **49** | **~340 KB** |

---

## ✅ PRE-UPLOAD CHECKLIST

- [x] All `.tsx` and `.ts` files excluded
- [x] All React components excluded
- [x] `package.json` and build configs excluded
- [x] `.git` folder excluded
- [x] Development documentation excluded
- [x] Only `.php` pattern files included (not `.tsx`)
- [x] Only `.html` template parts included (not `.tsx`)
- [x] Core WordPress files present (style.css, functions.php, theme.json)
- [x] **Screenshots**: `screenshot.png` (1200x900px) included
- [x] **ZIP Testing**: Ready for WordPress upload testing (requires WordPress environment)

---

## 🚀 UPLOAD INSTRUCTIONS

1. **Compress the theme** using one of the methods above
2. **Log into WordPress Admin**
3. Navigate to: **Appearance → Themes → Add New → Upload Theme**
4. Click **Choose File** and select `florida-coastal-prep-theme.zip`
5. Click **Install Now**
6. Click **Activate**

### Post-Activation Steps:
1. Go to **Appearance → Editor** to customize global styles
2. Set site logo and icon
3. Create navigation menus
4. Add initial content (Faculty, Programs, Schedule)
5. Test all page templates

---

## 📝 NOTES

### What's Included:
- ✅ All WordPress-native files (PHP, HTML, CSS, JSON)
- ✅ 15 converted block patterns (PHP format)
- ✅ 22 page templates
- ✅ 3 template parts (header, footer, comments)
- ✅ Full Site Editing (FSE) support
- ✅ Custom Post Types (Faculty, Program, Schedule)
- ✅ Elementor compatibility

### What's Excluded:
- ❌ All React/TypeScript source files
- ❌ Development tools and configurations (npm, composer, phpunit)
- ❌ Build artifacts and dependencies
- ❌ Version control files
- ❌ Development documentation

### Missing (Optional):
- ⚠️ `/assets/` folder - Custom images/icons (if needed)
- ⚠️ `/languages/` folder - Translation files (if needed)

---

**Ready to Package**: YES ✅  
**Estimated Package Size**: ~325 KB  
**WordPress Compatibility**: 6.2+ (6.4+ recommended)  
**PHP Requirement**: 7.4+
\n## Pattern Visual Reference
# Pattern Visual Reference Guide
## Detailed Component Descriptions for WordPress Block Conversion

## ⚠️ For AI Agents
Before creating or modifying patterns, read [`/AGENT_MEDIATOR.md`](../AGENT_MEDIATOR.md) — especially sections on pattern registration and design tokens.

---

This document provides detailed visual descriptions of each React pattern component to assist in converting them to WordPress block patterns.

> **Reference source location:** The React pattern components now live in `prototype/react/patterns/`.

---

## 1. HERO PATTERN (`patterns/HeroPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/hero`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  [Full-screen background image - dark navy] │
│  [Gradient overlay: navy-950 to navy-900]   │
│                                             │
│          [Small gold badge/label]           │
│       "OFFICIAL PREP ACADEMY"               │
│                                             │
│      THE FUTURE                             │
│      OF ELITE BALL                          │
│    [Display font, 160px, white + gold]      │
│                                             │
│  Experience world-class training and        │
│  academic rigor designed for the modern     │
│  student-athlete.                           │
│                                             │
│  [Gold Button]    [Outlined Button]         │
│  START JOURNEY    ACADEMY TOUR              │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Height**: 100vh (full screen)
- **Background**: Basketball court image with 40% opacity
- **Overlay**: Gradient from navy-950 → navy-900/40 → navy-900/60
- **Title**: 
  - Font: Bebas Neue
  - Size: 160px on desktop, 7xl on mobile
  - Colors: "THE FUTURE" white, "ELITE" gold, "BALL" white
  - Style: Italic, tracking-tighter
  - Drop shadow: 2xl
- **Badge**: 
  - Border: 1px solid gold with 30% opacity
  - Background: Gold 5% opacity with backdrop blur
  - Text: Uppercase, 0.5em letter spacing, font-heading
- **Buttons**:
  - Primary: Gold background (#FBBF24), navy text, padding 14px 56px
  - Secondary: Transparent with white border, white text
  - Both: Uppercase, 0.2em tracking, text-xs, shadow-2xl
  - Hover: Scale 1.05, bg changes to white

### WordPress Blocks Needed:
- wp:cover (for background image)
- wp:group (for badge)
- wp:heading (for title)
- wp:paragraph (for description)
- wp:buttons (with 2 wp:button children)

---

## 2. STATS PATTERN (`patterns/StatsPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/stats`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│ [White floating card with shadow]           │
│ ┌─────────┬─────────┬─────────┐            │
│ │   97%   │  100%   │   D1    │            │
│ │ College │ Grad    │ Alumni  │            │
│ │ Bound   │ Rate    │ Network │            │
│ └─────────┴─────────┴─────────┘            │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Container**: 
  - Background: White
  - Shadow: 2xl
  - Border: 1px solid slate-100
  - Max width: 1200px
  - Padding: 12px on mobile, 16px on desktop
  - Position: Negative margin -64px from hero (overlaps)
- **Grid**: 3 equal columns
- **Each Stat**:
  - Number: Display font, 5xl size, gold color, italic
  - Label: Uppercase, text-xs, 0.2em tracking, slate-600, font-bold

### WordPress Blocks Needed:
- wp:group (outer container with custom class)
- wp:columns (3 columns, all equal)
- wp:column (repeated 3x)
  - wp:heading (for numbers)
  - wp:paragraph (for labels)

---

## 3. GRID PATTERN (`patterns/GridPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/grid`

### Visual Structure:
```
┌──────────────────────────────────────────────────┐
│  [Small gold line] — THE COASTAL BLUEPRINT       │
│                                                  │
│  WHAT SETS US APART                              │
│  [Display font, huge]                            │
│                                                  │
│  ┌──────────┐  ┌──────────┐  ┌──────────┐      │
│  │ [Icon]   │  │ [Icon]   │  │ [Icon]   │      │
│  │ Elite    │  │ Rigorous │  │ Elite    │      │
│  │ Athletic │  │ Academic │  │ Staff    │      │
│  │ Program  │  │ Roadmap  │  │          │      │
│  │          │  │          │  │          │      │
│  │ Body txt │  │ Body txt │  │ Body txt │      │
│  └──────────┘  └──────────┘  └──────────┘      │
└──────────────────────────────────────────────────┘
```

### Styling Details:
- **Section Header**:
  - Label: Gold text, 8px line before text, 0.4em tracking
  - Title: Display font, 5xl-6xl, uppercase, italic, navy-900
  - Description: Light gray, italic, font-light
- **Cards**:
  - Background: White
  - Border: 1px solid slate-100
  - Padding: 8 on mobile, 10 on desktop
  - Shadow: lg
  - Hover: Translate -2px Y, shadow-xl
  - Transition: All 300ms
- **Icons**: Material Icons, text-6xl, primary gold
- **Card Title**: Oswald font, 2xl, navy-900, font-bold
- **Card Text**: Slate-600, text-sm, light font, 1.75 line height

### WordPress Blocks Needed:
- wp:group (section header)
- wp:columns (3 equal columns)
- wp:column (repeated 3x)
  - Custom icon HTML or wp:image
  - wp:heading
  - wp:paragraph

---

## 4. CTA PATTERN (`patterns/CTAPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/cta`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│    [Full-width gold background (#FBBF24)]   │
│                                             │
│         READY TO LEVEL UP?                  │
│    [Display font, huge, navy, italic]       │
│                                             │
│    Join the next generation of elite        │
│    student-athletes. Applications open now. │
│                                             │
│         [Navy Button: APPLY TODAY]          │
│                                             │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: Primary gold (#FBBF24)
- **Padding**: 80px vertical, 24px horizontal
- **Text Alignment**: Center
- **Title**: 
  - Display font
  - Size: 6xl-7xl
  - Color: Navy-900
  - Style: Italic, uppercase
  - Margin bottom: 6
- **Description**:
  - Max width: 600px
  - Center aligned
  - Text: lg-xl
  - Color: Navy-900/80
  - Font: Light, italic
  - Line height: Relaxed
  - Margin bottom: 12
- **Button**:
  - Background: Navy-900
  - Text: White
  - Padding: 20px 56px
  - Font: Bold, uppercase, 0.2em tracking
  - Size: text-xs
  - Hover: bg-white, text-navy-900, scale-105

### WordPress Blocks Needed:
- wp:group (with gold background color)
- wp:heading
- wp:paragraph
- wp:buttons
  - wp:button

---

## 5. PROGRAMS HERO PATTERN (`patterns/ProgramsHeroPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/programs-hero`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  [Dark navy background (#020C1B)]           │
│                                             │
│  [Small badge: "ELITE CURRICULUM"]          │
│                                             │
│     PREPARE FOR                             │
│     THE NEXT LEVEL                          │
│                                             │
│  Two-column grid below:                     │
│  ┌──────────────┐ ┌──────────────┐         │
│  │ Basketball   │ │ Basketball   │         │
│  │ icon         │ │ icon         │         │
│  │              │ │              │         │
│  │ Athletic     │ │ Academic     │         │
│  │ Excellence   │ │ Rigor        │         │
│  └──────────────┘ └──────────────┘         │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: Deep space (#020C1B)
- **Padding**: 96px vertical top, 80px bottom
- **Badge**: 
  - Border: Gold with opacity
  - Background: Gold 5% with blur
  - Padding: 8px 16px
- **Title**:
  - Display font
  - Size: 6xl-7xl
  - Color: White
  - Italic, uppercase
  - Margin bottom: 16
- **Grid Cards**:
  - Border: 1px white with 10% opacity
  - Background: White 5%
  - Padding: 48px
  - Icon: Gold, text-6xl
  - Title: White, display font, 3xl
  - Text: White 70% opacity

### WordPress Blocks Needed:
- wp:group (navy background)
- wp:paragraph (badge)
- wp:heading
- wp:columns (2 columns)
  - wp:column (repeated 2x with content)

---

## 6. PROGRAMS DETAIL PATTERN (`patterns/ProgramsDetailPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/programs-detail`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  White background section                   │
│                                             │
│  [Timeline/List structure]                  │
│  ● Freshman Year                            │
│    - Fundamentals training                  │
│    - Academic foundation                    │
│                                             │
│  ● Sophomore Year                           │
│    - Advanced techniques                    │
│    - Leadership development                 │
│                                             │
│  [etc...]                                   │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: White
- **Padding**: 96px vertical, 24px horizontal
- **Max Width**: 1200px
- **Timeline Items**:
  - Dot: Gold circle, 12px
  - Line: Connecting vertical line, 2px, slate-200
  - Year: Display font, 2xl, navy-900, italic
  - Details: Slate-600, text-base, list with bullets

### WordPress Blocks Needed:
- wp:group
- wp:list (custom styled)
- wp:heading (for year headings)
- wp:paragraph (for descriptions)

---

## 7. FACULTY PATTERN (`patterns/FacultyPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/faculty-grid`

### Visual Structure:
```
┌────────────────────────────────────────────┐
│  3-column grid (2 on tablet, 1 on mobile)  │
│  ┌────────┐ ┌────────┐ ┌────────┐         │
│  │[Photo] │ │[Photo] │ │[Photo] │         │
│  │Name    │ │Name    │ │Name    │         │
│  │Title   │ │Title   │ │Title   │         │
│  │Bio...  │ │Bio...  │ │Bio...  │         │
│  └────────┘ └────────┘ └────────┘         │
└────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: Slate-50
- **Padding**: 96px vertical, 24px horizontal
- **Grid**: 3 columns, gap-8
- **Cards**:
  - Background: White
  - Border: 1px slate-200
  - Shadow: lg
  - Overflow: hidden
  - Hover: shadow-xl, translate-y -2px
- **Image**: 
  - Aspect ratio: square
  - Object-fit: cover
  - Grayscale filter
  - Hover: grayscale-0
- **Name**: Display font, xl, italic, navy-900
- **Title**: Gold, uppercase, text-xs, 0.2em tracking, bold
- **Bio**: Slate-600, text-sm, light font

### WordPress Blocks Needed:
- wp:group
- wp:query (for Faculty CPT loop)
- wp:post-template
  - wp:post-featured-image
  - wp:post-title
  - wp:post-excerpt

---

## 8. CAMPUS PATTERN (`patterns/CampusPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/campus-showcase`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  2-column grid (1 on mobile)                │
│  ┌─────────────────┐ ┌──────────┐          │
│  │                 │ │[Image 2] │          │
│  │  [Large Image]  │ └──────────┘          │
│  │                 │ ┌──────────┐          │
│  │                 │ │[Image 3] │          │
│  └─────────────────┘ └──────────┘          │
│                                             │
│  Facility names overlaid on hover           │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: White
- **Padding**: 96px vertical, 24px horizontal
- **Grid**: 2 columns, gap-6
- **Images**:
  - Aspect ratio: 16:9 or square
  - Overlay: Navy-900 with 60% opacity on hover
  - Transition: All 500ms
- **Label Overlay**:
  - Position: Absolute bottom
  - Background: Gold
  - Padding: 16px
  - Text: Navy-900, display font, xl, italic

### WordPress Blocks Needed:
- wp:group
- wp:gallery (with linked images)
- or wp:columns with wp:image blocks

---

## 9. SECTION HEADER PATTERN (`patterns/SectionHeaderPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/section-header`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  — SMALL TAG TEXT                           │
│                                             │
│  LARGE DISPLAY TITLE                        │
│                                             │
│  Optional description text in lighter       │
│  weight and color. Can be multiple lines.   │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Tag/Label**:
  - Color: Gold (or white if `light` prop)
  - Font: Bold
  - Size: 8px-10px
  - Tracking: 0.4em
  - Uppercase
  - Margin bottom: 4
  - Decoration: 32px gold line before text
- **Title**:
  - Font: Display (Bebas)
  - Size: 5xl-6xl
  - Color: Navy-900 (or white if `light`)
  - Style: Italic, uppercase
  - Leading: Tight
  - Margin bottom: 6
- **Description**:
  - Color: Slate-600 (or white/80 if `light`)
  - Font: Light, italic
  - Size: lg-xl
  - Line height: Relaxed
  - Max width: 600px

### WordPress Blocks Needed:
- wp:group
- wp:paragraph (for tag)
- wp:heading (for title)
- wp:paragraph (for description)

---

## 10. NEWS ARCHIVE PATTERN (`patterns/NewsArchivePattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/news-archive`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  3-column grid (2 tablet, 1 mobile)         │
│  ┌────────┐ ┌────────┐ ┌────────┐          │
│  │[Image] │ │[Image] │ │[Image] │          │
│  │Title   │ │Title   │ │Title   │          │
│  │Date    │ │Date    │ │Date    │          │
│  │Excerpt │ │Excerpt │ │Excerpt │          │
│  │Read→   │ │Read→   │ │Read→   │          │
│  └────────┘ └────────┘ └────────┘          │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: Slate-50
- **Padding**: 48px vertical, 24px horizontal
- **Grid**: 3 columns, gap-8
- **Cards**:
  - Background: White
  - Border: 1px slate-200
  - Shadow: md
  - Hover: shadow-xl
  - Overflow: hidden
- **Image**:
  - Aspect ratio: 16:9
  - Object-fit: cover
  - Hover: scale-105
- **Category Badge**:
  - Background: Gold
  - Text: Navy-900, uppercase, text-xs
  - Padding: 4px 12px
  - Position: Absolute top-4 left-4
- **Title**: Navy-900, font-heading, xl, bold
- **Date**: Slate-500, text-xs, uppercase, 0.2em tracking
- **Excerpt**: Slate-600, text-sm, line-clamp-3
- **Link**: Gold text, uppercase, text-xs, arrow icon

### WordPress Blocks Needed:
- wp:query (for posts)
- wp:post-template
  - wp:post-featured-image
  - wp:post-title
  - wp:post-date
  - wp:post-excerpt
  - wp:read-more

---

## 11. SCHEDULE PATTERN (`patterns/SchedulePattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/schedule-results`

### Visual Structure:
```
┌──────────────────────────────────────────────┐
│  [Tabs: Upcoming | Results]                  │
│                                              │
│  ┌──────────────────────────────────────┐   │
│  │ FEB 15  vs. Miami Prep   7:00 PM    │   │
│  │ HOME    [Buy Tickets]                │   │
│  └──────────────────────────────────────┘   │
│  ┌──────────────────────────────────────┐   │
│  │ FEB 22  @ Orlando Elite  6:30 PM     │   │
│  │ AWAY    [Directions]                 │   │
│  └──────────────────────────────────────┘   │
└──────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: White
- **Padding**: 48px vertical, 24px horizontal
- **Tabs**:
  - Border bottom: 2px slate-200
  - Active: Gold border-bottom, gold text
  - Inactive: Slate-600
- **Game Cards**:
  - Background: White
  - Border: 1px slate-200
  - Padding: 24px
  - Margin bottom: 16px
  - Hover: shadow-lg, translate-x 4px
- **Date**: Display font, 2xl, navy-900, italic
- **Opponent**: Heading font, xl, bold
- **Location Badge**: 
  - Background: Gold (home) or slate-200 (away)
  - Text: Uppercase, text-xs, bold
  - Padding: 4px 12px
- **Action Button**: Navy-900, white bg on hover

### WordPress Blocks Needed:
- wp:group
- wp:query (for Schedule CPT)
- wp:post-template
  - Custom fields for date, opponent, location, time
  - wp:button for actions

---

## 12. APPLY PATTERN (`patterns/ApplyPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/apply-form`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  [Multi-step form with progress indicator]  │
│                                             │
│  Step 1/3: Personal Information             │
│  ●━━━○━━━○                                  │
│                                             │
│  ┌─────────────────────────────────┐       │
│  │ First Name                       │       │
│  └─────────────────────────────────┘       │
│  ┌─────────────────────────────────┐       │
│  │ Last Name                        │       │
│  └─────────────────────────────────┘       │
│  [etc...]                                   │
│                                             │
│  [Next Step Button]                         │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: White
- **Container**: Max-width 800px, centered
- **Progress Bar**:
  - Dots: Gold (active), slate-300 (inactive)
  - Line: 2px connecting dots
- **Form Fields**:
  - Border: 2px slate-300
  - Focus: Gold border
  - Padding: 12px
  - Font: text-base
  - Transition: border color 200ms
- **Labels**: Navy-900, font-bold, text-sm, uppercase
- **Button**: Gold bg, navy text, full-width on mobile

### WordPress Blocks Needed:
- wp:group
- Contact Form 7 or WPForms shortcode
- or custom HTML for form structure

---

## 13. DONORS PATTERN (`patterns/DonorsPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/donors-showcase`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  Recognition Tiers                          │
│                                             │
│  ⭐⭐⭐ CHAMPIONSHIP TIER ($100k+)           │
│  ┌────────────────────────────────────┐    │
│  │  John Smith Foundation              │    │
│  │  ABC Corporation                    │    │
│  └────────────────────────────────────┘    │
│                                             │
│  ⭐⭐ ELITE TIER ($50k+)                     │
│  ┌────────────────────────────────────┐    │
│  │  Jane Doe                           │    │
│  │  XYZ Company                        │    │
│  └────────────────────────────────────┘    │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: Slate-50
- **Padding**: 96px vertical, 24px horizontal
- **Tier Headers**:
  - Stars: Gold color
  - Text: Display font, 2xl, navy-900, italic
  - Border bottom: 2px gold
  - Margin bottom: 24px
- **Donor Cards**:
  - Background: White
  - Border: 1px slate-200
  - Padding: 24px
  - Grid: 2-3 columns depending on tier
  - Font: Heading font, lg, navy-900

### WordPress Blocks Needed:
- wp:group (per tier)
- wp:heading (tier name)
- wp:columns
  - wp:column (donor names)

---

## 14. CONTACT PATTERN (`patterns/ContactPattern.tsx`)
**Block Pattern Slug**: `fl-coastal-prep/contact-form`

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│  Two-column layout                          │
│  ┌──────────────┐ ┌──────────────┐         │
│  │ Contact Info │ │ Contact Form │         │
│  │              │ │              │         │
│  │ 📍 Address   │ │ Name ______  │         │
│  │ 📞 Phone     │ │ Email _____  │         │
│  │ ✉️  Email    │ │ Message __  │         │
│  │              │ │ [Submit]     │         │
│  └──────────────┘ └──────────────┘         │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: White
- **Padding**: 96px vertical, 24px horizontal
- **Layout**: 2 columns, 1 on mobile
- **Left Column (Info)**:
  - Background: Slate-50
  - Border: 1px slate-200
  - Padding: 48px
  - Icons: Material Icons, gold, text-2xl
  - Text: Navy-900, text-base
- **Right Column (Form)**:
  - Form fields: Same as Apply Pattern
  - Submit button: Gold bg, navy text

### WordPress Blocks Needed:
- wp:columns (2 columns)
  - wp:column (info)
    - wp:paragraph (with icon + text)
  - wp:column (form)
    - Contact Form 7 shortcode

---

## 15. LEGAL PATTERN (`patterns/LegalPattern.tsx`)
**Not registered as block pattern - used for Privacy/Terms pages**

### Visual Structure:
```
┌─────────────────────────────────────────────┐
│                                             │
│  PRIVACY POLICY                             │
│  [or TERMS OF SERVICE]                      │
│                                             │
│  Last Updated: January 2025                 │
│                                             │
│  1. Introduction                            │
│  Lorem ipsum dolor sit amet...              │
│                                             │
│  2. Data Collection                         │
│  Lorem ipsum dolor sit amet...              │
│                                             │
│  [etc...]                                   │
│                                             │
│  [Back to Home Button]                      │
└─────────────────────────────────────────────┘
```

### Styling Details:
- **Background**: White
- **Padding**: 160px top, 96px bottom, 24px horizontal
- **Max Width**: 800px
- **Title**: Display font, 6xl, navy-900, italic, uppercase
- **Date**: Slate-500, text-sm, italic
- **Content**:
  - Section headings: Heading font, 2xl, navy-900, bold
  - Body: Slate-600, text-base, leading-relaxed
  - Lists: Styled with gold bullets
  - Links: Gold color, underline on hover

### WordPress Blocks Needed:
- wp:group
- wp:heading (title)
- wp:paragraph (date)
- wp:heading (section headings)
- wp:paragraph (content)
- wp:list (where applicable)

---

## COMMON DESIGN ELEMENTS ACROSS ALL PATTERNS

### Typography Scale:
- **Mega Display**: 160px (hero titles)
- **Display Large**: 6xl-7xl (section titles)
- **Display Medium**: 3xl-5xl (card titles, subsections)
- **Heading**: 2xl-xl (card headings)
- **Body Large**: lg-xl (descriptions, intro text)
- **Body**: text-base (paragraphs)
- **Small**: text-sm (meta info)
- **Micro**: text-xs (labels, badges)

### Spacing Scale:
- **Section Padding**: 96px vertical (desktop), 48px (mobile)
- **Container Padding**: 24px horizontal
- **Card Padding**: 48px (large), 24px (medium), 12px (small)
- **Grid Gaps**: 6-8 units (24-32px)
- **Element Spacing**: 4-6 units (16-24px)

### Border Styles:
- **Default**: 1px solid slate-200
- **Dark**: 1px solid white/10
- **Accent**: 2px solid gold
- **Radius**: Generally minimal (0-4px) for sharp, athletic look

### Shadow Hierarchy:
- **Card Default**: shadow-lg
- **Card Hover**: shadow-xl
- **Floating Elements**: shadow-2xl
- **Subtle**: shadow-md

### Transitions:
- **Standard**: 300ms ease-in-out
- **Fast**: 200ms
- **Slow**: 500ms
- **Properties**: Usually "all" or specific (transform, shadow, colors)

### Hover States:
- **Cards**: Translate Y -2px, increase shadow
- **Buttons**: Change background, scale 1.05
- **Images**: Scale 1.05, remove filters
- **Links**: Change to gold, add underline

---

## COLOR USAGE GUIDELINES

### When to use Gold (#FBBF24):
- Primary CTA buttons
- Active navigation states
- Icons and decorative elements
- Accent lines and badges
- Hover states for links

### When to use Navy (#0A192F, #112240, #020C1B):
- Main text color
- Section backgrounds (dark sections)
- Button text (on gold buttons)
- Headers and headings

### When to use White/Light:
- Text on dark backgrounds
- Card backgrounds
- Alternating section backgrounds
- Button text (on navy buttons)

### When to use Gray/Slate:
- Body text (#64748B - slate-600)
- Borders (#E2E8F0 - slate-200)
- Background alternates (#F8FAFC - slate-50)
- Disabled states
- Meta information

---

## RESPONSIVE BREAKPOINTS

### Mobile (< 768px):
- Single column layouts
- Reduced font sizes (7xl → 5xl, etc.)
- Increased padding (stacks)
- Simplified navigation (hamburger)
- Full-width buttons

### Tablet (768px - 1024px):
- 2-column grids
- Medium font sizes
- Compact navigation

### Desktop (> 1024px):
- Full 3-column grids
- Large display typography
- Horizontal navigation
- Max-width containers (1200px-1400px)

---

## ACCESSIBILITY CONSIDERATIONS

### Color Contrast:
- Navy on white: Pass WCAG AAA
- White on navy: Pass WCAG AAA
- Gold on navy: Check contrast, may need darker shade for small text
- Gray text: Ensure slate-600 for WCAG AA compliance

### Focus States:
- Add gold outline to all interactive elements
- Ensure keyboard navigation works
- Skip links for accessibility

### Alt Text:
- All images need descriptive alt text
- Decorative images: alt=""
- Functional images: descriptive alt

### Semantic HTML:
- Use proper heading hierarchy (h1 → h2 → h3)
- Use <nav> for navigation
- Use <main> for main content
- Use <article> for posts/cards
- Use <section> for logical sections

---

## ANIMATION & PERFORMANCE

### CSS Animations Used:
```css
@keyframes pulse-slow {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.5; }
}

@keyframes fade-in {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slide-in-from-bottom {
  from { transform: translateY(20px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}
```

### Performance Tips:
- Lazy load images below fold
- Use WebP format for images
- Minimize animation on mobile
- Use CSS transforms (not position) for animations
- Debounce scroll events

---

This guide should provide comprehensive visual reference for converting all React patterns to WordPress block patterns. Each section includes exact styling values, spacing, colors, and recommended WordPress block types.

**Remember**: The goal is to recreate the visual design and user experience using native WordPress blocks wherever possible, adding custom CSS only when necessary.
