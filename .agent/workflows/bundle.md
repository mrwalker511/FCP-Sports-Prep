---
description: Bundle the WordPress theme into a deployable .zip file
---

# Bundle for WordPress Deployment

This workflow creates a clean `fl-coastal-prep.zip` ready for upload to WordPress.

## Steps

// turbo
1. Run the bundle script from the project root:
```powershell
powershell -ExecutionPolicy Bypass -File bundle.ps1
```

2. The output file `fl-coastal-prep.zip` will be in the project root.

3. Upload to WordPress:
   - Go to **Dashboard → Appearance → Themes → Add New → Upload Theme**
   - Select `fl-coastal-prep.zip`
   - Click **Install Now**, then **Activate**

## What's included in the bundle

| Directory / File   | Purpose                                      |
|--------------------|----------------------------------------------|
| `style.css`        | Theme metadata + custom CSS                  |
| `theme.json`       | Design tokens, colors, fonts, spacing        |
| `functions.php`    | Theme logic, CPT registration, script loading|
| `index.php`        | Fallback template                            |
| `readme.txt`       | WordPress.org-formatted readme               |
| `screenshot.png`   | Theme preview image                          |
| `templates/`       | 24 block templates (.html)                   |
| `parts/`           | 3 template parts (header, footer, comments)  |
| `patterns/`        | 15 block patterns (.php)                     |
| `inc/`             | Modular PHP (setup, CPTs, SEO, security, etc)|
| `assets/`          | CSS animations + self-hosted WOFF2 fonts     |
| `styles/`          | Theme style variations (light mode)          |

## What's excluded (via `.distignore`)

Development files, tests, docs, vendor, node_modules, prototype, build tooling, and demo data are all excluded from the production bundle.

## Custom output path

To write the zip to a different location:
```powershell
powershell -ExecutionPolicy Bypass -File bundle.ps1 -OutputPath "C:\Users\Matt Walker\Desktop"
```
