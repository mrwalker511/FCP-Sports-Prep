# AGENT MEDIATOR — READ THIS FIRST

**MANDATORY**: Every LLM agent working on this repository MUST read this file completely BEFORE reading any other documentation or making any changes.

---

## Purpose

This is the **single source of truth** and coordination point for all AI agents working on the Florida Coastal Prep WordPress FSE Block Theme. It prevents conflicting changes and ensures consistency across all LLM sessions.

---

## Quick Start (60-Second Overview)

**What is this project?**

- WordPress Full Site Editing (FSE) Block Theme — v2.0.0
- Production-ready theme for Florida Coastal Preparatory Academy (elite athletic academy)
- Dark cinematic aesthetic: Gold (`#FBBF24`) on Navy (`#0A192F`)
- React prototype exists as design reference only — **never shipped**

**Repository map:**

```
/                          ← Production theme root
├── theme.json             ← Design tokens (colors, fonts, spacing, shadows)
├── functions.php          ← Slim loader — requires 7 /inc/ modules
├── style.css              ← Theme metadata + skip-link CSS only
├── index.php              ← WordPress-required fallback (empty)
├── /inc/                  ← 7 modular PHP files (setup, post-types, seo, block-styles, security, forms, customizer)
├── /templates/            ← 30 FSE block templates (.html ONLY)
├── /parts/                ← 3 template parts: header, footer, comments (.html ONLY)
├── /patterns/             ← 16 block patterns (.php ONLY)
├── /assets/               ← 4 self-hosted WOFF2 fonts + animations.css
├── /styles/               ← light.json style variation
├── /tests/                ← PHPUnit test suite (11 test files)
├── /docs/                 ← Internal documentation (read after this file)
├── /prototype/react/      ← Design reference (NOT shipped, not installed)
└── /demo-data/            ← demo-content.xml for import
```

**Text Domain**: `fl-coastal-prep` — NEVER change this.

**Your first 3 steps**:
1. Read this entire file
2. Check `docs/STATUS.md`
3. Run `git log -5` to see recent changes

---

## Architecture Overview

### 1. Production WordPress Theme (root level)

The theme is a strict WordPress FSE block theme. All content is in HTML block markup or PHP patterns — no classic PHP templates.

| Layer | Location | File Type | Notes |
|-------|----------|-----------|-------|
| Theme config | root | `.css`, `.json`, `.php` | `style.css`, `theme.json`, `functions.php` |
| Templates | `/templates/` | `.html` ONLY | 30 FSE block templates |
| Template parts | `/parts/` | `.html` ONLY | header, footer, comments |
| Block patterns | `/patterns/` | `.php` ONLY | 16 registered patterns |
| PHP modules | `/inc/` | `.php` | 7 slim functional modules |
| Assets | `/assets/` | `.woff2`, `.css` | Self-hosted fonts, animations |

### 2. PHP Module Architecture (`functions.php` → `/inc/`)

`functions.php` is a slim loader. All theme logic lives in these seven modules:

| Module | File | Responsibility |
|--------|------|----------------|
| Setup | `inc/setup.php` | Theme supports, nav menus, starter content |
| Post Types | `inc/post-types.php` | CPT registration + registered meta with `sanitize_callback` |
| SEO | `inc/seo.php` | Meta tags, Open Graph, JSON-LD schema, Customizer address settings |
| Block Styles | `inc/block-styles.php` | Block pattern categories, custom block styles |
| Security | `inc/security.php` | CSP headers, X-Frame-Options, Referrer-Policy, Permissions-Policy |
| Forms | `inc/forms.php` | Form handling and processing |
| Customizer | `inc/customizer.php` | Customizer settings for schema/metadata fields |

`functions.php` also directly handles:
- `fl_coastal_prep_scripts()` — conditional enqueuing of `animations.css` (front page, programs, singles only)
- `fl_coastal_prep_preload_fonts()` — `<link rel="preload">` for critical WOFF2 files

### 3. Design Reference (NOT shipped)

`/prototype/react/` — React 19 / TypeScript / Vite prototype. Use only to understand design intent. Never copy TSX into production. Never install or build it in a WordPress deployment.

---

## Design System

All design tokens are in `theme.json`. Use CSS variables — **never hardcode values**.

### Color Palette

| Token | Slug | Hex | Use |
|-------|------|-----|-----|
| Base (White) | `base` | `#FFFFFF` | Text on dark backgrounds |
| Contrast (Navy) | `contrast` | `#0A192F` | Primary background |
| Primary Gold | `primary` | `#FBBF24` | CTAs, accents, highlights |
| Secondary Navy | `secondary` | `#112240` | Section backgrounds |
| Deep Space | `tertiary` | `#020C1B` | Deepest background layer |
| Light Gray | `light-gray` | `#F1F5F9` | Subtle fills on light areas |

CSS variable pattern: `var(--wp--preset--color--{slug})`

### Typography

| Role | Font | Slug | Usage |
|------|------|------|-------|
| Display | Bebas Neue | `display` | Hero titles, large headings |
| Heading | Oswald | `heading` | Section headers, labels |
| Body | Inter | `sans` | Paragraphs, UI text |

All fonts are self-hosted WOFF2 in `/assets/fonts/` — no Google Fonts CDN in production.

### Layout

- Content width: `1200px`
- Wide width: `1400px`
- Full-width: Available via `alignfull`

### Gradients

- `navy-deep`: `linear-gradient(180deg, #112240 0%, #020C1B 100%)`
- `gold-trans`: `linear-gradient(180deg, rgba(251,191,36,0.2) 0%, rgba(251,191,36,0) 100%)`

---

## Custom Post Types

Registered in `inc/post-types.php`. All have `show_in_rest: true` for Gutenberg compatibility.

| CPT | Slug | Icon | Purpose |
|-----|------|------|---------|
| Faculty | `faculty` | `dashicons-groups` | Coaching staff, faculty bios |
| Program | `program` | `dashicons-welcome-learn-more` | Athletic/academic programs |
| Schedule | `schedule` | `dashicons-calendar-alt` | Game dates, opponents, scores |
| Donor | `donor` | *(registered)* | Donor recognition wall |

**Schedule CPT registered post meta** (with `sanitize_callback`): `game_date`, `opponent`, `location`, `score_home`, `score_away`, `game_result`.

---

## Template Inventory (30 templates in `/templates/`)

### Core Templates
| File | Purpose |
|------|---------|
| `front-page.html` | Homepage — primary entry point |
| `index.html` | Blog/post archive fallback |
| `single.html` | Default single post |
| `page.html` | Default page |
| `404.html` | Error page |
| `archive.html` | Generic archive |
| `search.html` | Search results |

### CPT Templates
| File | Purpose |
|------|---------|
| `archive-faculty.html` | Faculty/coaches listing |
| `single-faculty.html` | Single faculty member |
| `archive-program.html` | Programs listing |
| `single-program.html` | Single program |
| `archive-schedule.html` | Game schedule archive |
| `single-schedule.html` | Single game/schedule entry |
| `archive-donor.html` | Donor archive |
| `single-donor.html` | Single donor |

### Named Page Templates
| File | Purpose |
|------|---------|
| `page-about.html` | Academy vision/mission/values |
| `page-admissions.html` | Enrollment/admissions |
| `page-apply.html` | Application form |
| `page-campus.html` | Facilities showcase |
| `page-coaches.html` | Coaching staff page |
| `page-contact.html` | Contact portal |
| `page-donors.html` | Donor wall |
| `page-faculty.html` | Faculty directory |
| `page-news.html` | News archive |
| `page-privacy.html` | Privacy policy |
| `page-programs.html` | Programs overview |
| `page-schedule.html` | Schedule page |
| `page-terms.html` | Terms of service |
| `page-elementor-canvas.html` | Elementor — blank canvas |
| `page-elementor-full-width.html` | Elementor — with header/footer |

---

## Block Patterns (16 in `/patterns/`)

All patterns use namespace `fl-coastal-prep/` and are auto-registered via PHP file headers.

| Slug | File | Description |
|------|------|-------------|
| `fl-coastal-prep/hero` | `hero.php` | Full-screen hero with background, title, CTA buttons |
| `fl-coastal-prep/stats` | `stats.php` | Floating stats bar with 3 metrics |
| `fl-coastal-prep/grid` | `grid.php` | 3-column feature grid (Athletics, Academics, Staff) |
| `fl-coastal-prep/cta` | `cta.php` | Gold banner with Apply CTA |
| `fl-coastal-prep/section-header` | `section-header.php` | Reusable section header (label + title + description) |
| `fl-coastal-prep/programs-hero` | `programs-hero.php` | Programs page hero |
| `fl-coastal-prep/programs-detail` | `programs-detail.php` | Program curriculum detail section |
| `fl-coastal-prep/faculty-grid` | `faculty-grid.php` | Faculty/coaching staff card grid |
| `fl-coastal-prep/campus-showcase` | `campus-showcase.php` | Facilities image gallery |
| `fl-coastal-prep/blueprint-gallery` | `blueprint-gallery.php` | Blueprint/stylized image gallery |
| `fl-coastal-prep/news-archive` | `news-archive.php` | Blog post grid with featured images |
| `fl-coastal-prep/schedule-results` | `schedule-results.php` | Game schedule table |
| `fl-coastal-prep/apply-form` | `apply-form.php` | Application/enrollment form |
| `fl-coastal-prep/contact-form` | `contact-form.php` | Contact information and form |
| `fl-coastal-prep/donors-grid` | `donors-grid.php` | Donor recognition grid |
| `fl-coastal-prep/donors-showcase` | `donors-showcase.php` | Tiered donor recognition wall |

---

## Template Parts (3 in `/parts/`)

| File | Purpose |
|------|---------|
| `header.html` | Site navigation, logo, primary menu |
| `footer.html` | Footer content, secondary menu, credits |
| `comments.html` | Comment list, pagination, comment form |

---

## Critical Rules — Do Not Violate

1. **File types are strict**: Templates/parts = `.html` ONLY. Patterns = `.php` ONLY. No exceptions.
2. **Text domain**: Always `fl-coastal-prep`. Never change it.
3. **Design tokens only**: Use `var(--wp--preset--color--{slug})` and `var(--wp--preset--font-family--{slug})`. Zero hardcoded colors or fonts.
4. **No plugin dependencies**: Theme must be fully functional standalone. Elementor is optional, not required.
5. **No legacy PHP templates**: No `header.php`, `footer.php`, `single.php`, `page.php`, etc. at root level. FSE block template parts only.
6. **Gutenberg is primary**: Never disable the block editor. Elementor is an optional alternative.
7. **No `!important`**: Use `body .selector` for specificity instead.
8. **Security in all new code**: Forms need `wp_nonce_field()`. REST endpoints need `permission_callback`. Post meta needs `sanitize_callback`.
9. **No external image URLs in patterns**: Use local placeholder references in `assets/images/`.
10. **No new patterns for single-use layout**: Compose existing patterns in templates first.

---

## CSS Rules

- No `!important` declarations — use `body` selector for specificity
- Performance hints required on animated elements: `will-change: transform; contain: layout style;`
- Opacity utility class names must match values: `.opacity-70 { opacity: 0.7; }`
- Block styles scoped under `body`: e.g., `body .is-style-glassmorphism { ... }`
- Animations loaded conditionally via `fl_coastal_prep_scripts()` — not globally

---

## Role-Specific Guidelines

### Design Agent
- **Focus**: `theme.json` design tokens, visual consistency, color/typography/spacing
- **Key files**: `theme.json`, `docs/DEVELOPER_GUIDE.md`
- **Constraint**: Any new color, font size, or spacing must be added as a token in `theme.json`, not hardcoded

### Pattern Agent
- **Focus**: Block patterns in `/patterns/` (`.php` files only)
- **Key files**: `/patterns/*.php`, `docs/REFERENCE.md`
- **Constraint**: Patterns must use PHP file headers for auto-registration. Use existing patterns as structure reference.

### Template Agent
- **Focus**: FSE templates in `/templates/` and parts in `/parts/` (`.html` files only)
- **Key files**: `/templates/*.html`, `/parts/*.html`, `docs/REFERENCE.md`, `docs/plans/`
- **Constraint**: Compose templates from existing patterns using `<!-- wp:pattern {"slug":"fl-coastal-prep/..."} /-->`. Prefer pattern reuse over new inline blocks.

### Functionality Agent
- **Focus**: `functions.php`, `/inc/` modules, CPTs, hooks, filters
- **Key files**: `functions.php`, `/inc/*.php`, `docs/DEVELOPER_GUIDE.md`
- **Constraint**: Keep `functions.php` as a slim loader only. All logic goes in the appropriate `/inc/` module.

### QA Agent
- **Focus**: Test suite, validation, audit findings
- **Key files**: `/tests/`, `docs/AUDIT_REPORTS.md`, `block-check-output.txt`
- **Constraint**: Run PHPUnit via `phpunit.xml`. Never commit new files with invalid block attributes.

---

## Before Making Changes — Checklist

1. Read this `AGENT_MEDIATOR.md` completely.
2. Check `docs/STATUS.md` for current theme status and known issues.
3. Run `git log -5` to review recent commits and avoid duplicate work.
4. Verify your change follows the file-type rules above.
5. Confirm you are on the correct feature branch before committing.

---

## Known Completed Work (as of v2.0.0)

- WordPress 6.8+ compatibility — all deprecated block attributes removed (`isUserOverlayColor`, `verticalAlignment`)
- Full FSE architecture — no legacy PHP templates at root
- Gutenberg re-enabled — Elementor demoted to optional
- 30 FSE templates covering all content types
- 16 block patterns with `fl-coastal-prep/` namespace
- 7 modular PHP files in `/inc/`
- Self-hosted WOFF2 fonts (no CDN required)
- CSP + security headers in `inc/security.php`
- Font preloading in `functions.php`
- Conditional `animations.css` loading
- PHPUnit test suite (security, patterns, templates, debugging, code quality)
- Schedule CPT meta fields with `sanitize_callback`
- Customizer settings for schema address fields
- `.distignore` for clean distribution packaging
- Page templates: `page-about.html`, `page-coaches.html`, `page-admissions.html` (added Feb 2026)
- Demo content XML in `/demo-data/`

---

## Version & Compatibility

| Property | Value |
|----------|-------|
| Theme version | 2.0.0 |
| WordPress minimum | 6.4 |
| WordPress tested | 6.8 |
| PHP minimum | 8.0 |
| Theme type | FSE Block Theme |
| Text domain | `fl-coastal-prep` |
| Theme JSON schema | v3 |
| License | GPL v2 or later |

---

## Documentation Reference

| File | Purpose | Read When |
|------|---------|-----------|
| **`AGENT_MEDIATOR.md`** (this file) | Coordination, rules, architecture | Always first |
| [`docs/STATUS.md`](./docs/STATUS.md) | What works, recent fixes, known issues | Before every session |
| [`docs/DEVELOPER_GUIDE.md`](./docs/DEVELOPER_GUIDE.md) | Architecture deep-dive, design system, security rules | Before writing code |
| [`docs/REFERENCE.md`](./docs/REFERENCE.md) | Complete file inventory, pattern visuals, naming conventions | When adding files |
| [`docs/AUDIT_REPORTS.md`](./docs/AUDIT_REPORTS.md) | Security, performance, and quality audit findings | QA work |
| [`docs/USER_GUIDE.md`](./docs/USER_GUIDE.md) | End-user manual, demo content setup | Content/UX work |
| [`docs/CONTENT_CHECKLIST.md`](./docs/CONTENT_CHECKLIST.md) | Content implementation steps | Content migration |
| [`docs/plans/`](./docs/plans/) | Feature design and implementation plans | Template/feature work |

---

**Last Updated**: 2026-02-18
**File Version**: 2.0.0
**Theme Version**: 2.0.0
