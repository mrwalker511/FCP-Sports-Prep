# Demo Content Technical Guide

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
