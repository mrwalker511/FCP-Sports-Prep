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
├── templates/          ← Page & archive templates (19 .html files)
├── parts/              ← Header & footer template parts (2 .html files)
├── patterns/           ← Block patterns (14 .php files)
├── demo-data/          ← Demo content WXR file (optional)
└── docs/               ← User documentation (optional)
```

| Folder | Required | Contents |
|--------|----------|----------|
| `templates/` | ✅ YES | FSE page templates (.html) |
| `parts/` | ✅ YES | Template parts - header.html, footer.html |
| `patterns/` | ✅ YES | Block patterns (.php) |
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

### 📁 Templates Folder (19 files)
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
✅ templates/single.html
```

**Note**: Exclude `templates/test-tokens.html` (development file)

### 📁 Template Parts Folder (2 files)
```
✅ parts/header.html            (2,567 bytes)  - Site header
✅ parts/footer.html            (5,087 bytes)  - Site footer
```

### 📁 Block Patterns Folder (14 files)
```
✅ patterns/apply-form.php           (2,900 bytes)
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
✅ docs/USER_MANUAL.md            - End user guide (optional; include in ZIP if desired)
✅ docs/DEMO_CONTENT.md           - Demo content setup instructions
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
❌ AGENTS.md
❌ docs/**   (internal docs; optionally include docs/USER_MANUAL.md)
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
  -x "AGENTS.md" \
  -x "docs/ARCHITECT.md" "docs/DEBUG_LOG.md" "docs/DESIGN_SYSTEM.md" \
  -x "docs/FILE_INVENTORY.md" "docs/PATTERN_VISUAL_REFERENCE.md" "docs/PRODUCTION_FILE_LIST.md" \
  -x "docs/WORDPRESS_MIGRATION_GUIDE.md" \
  -x "*/test-tokens.html"
```

---

## 📊 PACKAGE SUMMARY

| Category | Count | Total Size |
|----------|-------|------------|
| Core Files | 6 | ~222 KB |
| Templates | 19 | ~18 KB |
| Template Parts | 2 | ~8 KB |
| Block Patterns (PHP) | 14 | ~76 KB |
| Documentation | 2 | ~3 KB |
| **TOTAL** | **63** | **~325 KB** |

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
- [ ] **TODO**: Test ZIP file uploads to WordPress successfully

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
- ✅ 14 converted block patterns (PHP format)
- ✅ 19 page templates
- ✅ Header and footer template parts
- ✅ Full Site Editing (FSE) support
- ✅ Custom Post Types (Faculty, Schedule)
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
