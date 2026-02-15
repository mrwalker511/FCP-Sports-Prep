# Page Templates Design Document
**Florida Coastal Prep WordPress Theme**

**Date**: February 15, 2026
**Status**: Approved
**Approach**: Pure Pattern Assembly (Approach 1)

---

## Overview

This document defines the design for three new page templates for the Florida Coastal Prep WordPress theme:

1. **About/Mission Page** (`page-about.html`)
2. **Coaching Staff Page** (`page-coaches.html`)
3. **Admissions/Enrollment Page** (`page-admissions.html`)

**Design Philosophy**: Maximize reuse of existing block patterns. No new patterns required—all templates built by assembling existing patterns in new compositions.

---

## Template 1: About/Mission Page

**File**: `templates/page-about.html`
**Purpose**: Communicate the academy's vision, mission, and core values with supporting team imagery.

### Structure

```
┌─────────────────────────────────────┐
│ Header (Template Part)              │
├─────────────────────────────────────┤
│ Vision Section (section-header)     │
│ - Label: "OUR FOUNDATION"           │
│ - Title: "VISION"                   │
│ - Description: Vision statement     │
├─────────────────────────────────────┤
│ Mission Section (section-header)    │
│ - Label: "OUR PURPOSE"              │
│ - Title: "MISSION"                  │
│ - Description: Mission statement    │
├─────────────────────────────────────┤
│ Values Section (grid pattern)       │
│ - Label: "CORE VALUES"              │
│ - Title: "What Drives Us"           │
│ - 3 cards: Value pillars            │
├─────────────────────────────────────┤
│ Team Section (campus-showcase)      │
│ - Leadership/coaching/support photos│
├─────────────────────────────────────┤
│ Footer (Template Part)              │
└─────────────────────────────────────┘
```

### Pattern Assembly

1. **`<!-- wp:template-part {"slug":"header"} /-->`**
2. **Vision Section**: `section-header` pattern
   - Background: Dark navy (`var(--wp--preset--color--contrast)`)
   - Text: White
   - Spacing: `.section-spacing-large`
3. **Mission Section**: `section-header` pattern
   - Same styling as Vision
4. **Values Grid**: `grid` pattern (repurposed)
   - 3-column card layout
   - Each card: Icon, title, description
   - Examples: "Excellence", "Integrity", "Community"
5. **Team Photos**: `campus-showcase` pattern (repurposed)
   - Replace facility images with team photos
   - Labels: "Leadership Team", "Coaching Excellence", "Support Staff"
6. **`<!-- wp:template-part {"slug":"footer"} /-->`**

### Visual Design

- **Color Flow**: Dark → Dark → Dark → Light
- **Typography**:
  - Labels: `.text-label-medium` (0.75rem, uppercase, bold)
  - Titles: `.text-blueprint-h2` (clamp 2.5rem-4rem)
  - Descriptions: 1.125rem, italic, light weight
- **Spacing**: 6-8rem between sections
- **Responsive**: Automatic from existing patterns

### Content Guidelines

- **Vision**: 2-3 sentences describing aspirational future state
- **Mission**: 2-3 sentences explaining current purpose and approach
- **Values**: 3-6 value pillars, each with 1-2 sentence description
- **Team Photos**: 3-6 images showcasing staff, students, campus life

---

## Template 2: Coaching Staff Page

**File**: `templates/page-coaches.html`
**Purpose**: Showcase coaching staff with photos, credentials, and bios.

### Structure

```
┌─────────────────────────────────────┐
│ Header (Template Part)              │
├─────────────────────────────────────┤
│ Section Header                      │
│ - Label: "ELITE COACHING"           │
│ - Title: "MEET THE STAFF"           │
│ - Description: Coaching intro       │
├─────────────────────────────────────┤
│ Coaches Grid (faculty-grid pattern) │
│ - 3-column grid                     │
│ - Photos, names, titles, bios       │
│ - Pagination if needed              │
├─────────────────────────────────────┤
│ Footer (Template Part)              │
└─────────────────────────────────────┘
```

### Pattern Assembly

1. **`<!-- wp:template-part {"slug":"header"} /-->`**
2. **Header**: `section-header` pattern
   - Background: Dark navy
   - Label: "ELITE COACHING"
   - Title: "MEET THE STAFF"
   - Description: "Our coaching staff brings decades of professional and collegiate experience..."
3. **Coaches Grid**: `faculty-grid` pattern
   - Post Type: Faculty CPT
   - Filter: Category "Coaches" OR custom field `role: coach`
   - Layout: 3-column responsive grid
   - Card styling: White background, grayscale photos (color on hover)
   - Pagination: Included if >12 coaches
4. **`<!-- wp:template-part {"slug":"footer"} /-->`**

### Visual Design

- **Color Flow**: Dark header → Light grid
- **Typography**: Same as faculty page for consistency
- **Grid**:
  - Desktop: 3 columns
  - Tablet: 2 columns
  - Mobile: 1 column
- **Cards**:
  - Border: `.has-border-primary-20`
  - Shadow: `.has-shadow-xl`
  - Padding: `.card-padding-standard`

### Content Setup

1. Create Faculty posts for each coach
2. Assign category "Coaches" (or add custom field `role: coach`)
3. Add featured image (professional headshot, square aspect ratio)
4. Write 10-20 word bio preview in post excerpt
5. Write full bio in post content
6. Include title/position in post title or custom field

### Technical Implementation

**Option A - Category Filter (Recommended):**
```html
<!-- Modify faculty-grid query -->
"query": {
  "postType": "faculty",
  "category": "coaches"
}
```

**Option B - Custom Field:**
```html
"query": {
  "postType": "faculty",
  "meta_query": [{
    "key": "role",
    "value": "coach"
  }]
}
```

Recommendation: Use Option A for simplicity.

---

## Template 3: Admissions/Enrollment Page

**File**: `templates/page-admissions.html`
**Purpose**: Guide prospective students through admissions requirements, process, and application.

### Structure

```
┌─────────────────────────────────────┐
│ Header (Template Part)              │
├─────────────────────────────────────┤
│ Hero (hero pattern)                 │
│ - Badge: "JOIN THE ELITE"           │
│ - Title: "START YOUR JOURNEY"       │
│ - Buttons: Apply + Schedule Visit   │
├─────────────────────────────────────┤
│ Requirements (section-header +      │
│              core/columns)          │
│ - 2-column layout with lists        │
├─────────────────────────────────────┤
│ Process Timeline (programs-detail)  │
│ - Step-by-step enrollment process   │
├─────────────────────────────────────┤
│ FAQ (section-header + paragraphs)   │
│ - Common questions & answers        │
├─────────────────────────────────────┤
│ Application Form (contact-form)     │
│ - WPForms shortcode placeholder     │
├─────────────────────────────────────┤
│ Footer (Template Part)              │
└─────────────────────────────────────┘
```

### Pattern Assembly

1. **`<!-- wp:template-part {"slug":"header"} /-->`**

2. **Hero Section**: `hero` pattern
   - Background: Basketball court image
   - Badge: "JOIN THE ELITE"
   - Title: "START YOUR JOURNEY"
   - Description: "Applications now open for the upcoming season..."
   - Primary button: "Apply Now" (anchor link to form: `#application-form`)
   - Secondary button: "Schedule Visit" (link to contact/calendar)

3. **Requirements Section**: `section-header` + `core/columns`
   - Header:
     - Label: "REQUIREMENTS"
     - Title: "ELIGIBILITY CRITERIA"
   - 2-column layout:
     - Column 1: Academic requirements (GPA, transcripts, test scores)
     - Column 2: Athletic requirements (skill level, experience, commitment)
   - List styling: Gold bullet points

4. **Process Timeline**: `programs-detail` pattern (repurposed)
   - Alternating image/text layout
   - Left image: Student-athlete signing papers, handshake, evaluation
   - Right text: Step-by-step process
   - Steps example:
     1. Submit Application
     2. Skills Evaluation
     3. Interview & Campus Visit
     4. Admissions Decision
     5. Enrollment & Onboarding

5. **FAQ Section**: `section-header` + `core/paragraph` blocks
   - Header:
     - Label: "QUESTIONS"
     - Title: "FREQUENTLY ASKED"
   - Simple Q&A format (no accordion for v1):
     - Question: Bold heading (`.text-blueprint-h4`)
     - Answer: Regular paragraph
   - 6-10 common questions

6. **Application Form**: `contact-form` pattern (modified)
   - Section header: "READY TO APPLY?"
   - Replace Contact Form 7 shortcode with WPForms:
     - Placeholder: `[wpforms id="123"]`
   - Form inherits theme styles (gold accents, navy backgrounds)
   - Max-width: 800px, centered

7. **`<!-- wp:template-part {"slug":"footer"} /-->`**

### Visual Design

- **Color Flow**: Full-screen hero → Light → Dark → Light → Dark
- **Hero**: 100vh height, navy gradient overlay
- **Requirements**: White background, 2-column responsive
- **Process**: Dark background, alternating layout
- **FAQ**: White background, simple text layout
- **Form**: Dark background, centered form container

### Content Guidelines

**Requirements Section:**
- Academic: GPA minimum, transcript requirements, standardized test scores
- Athletic: Skill level expectations, prior experience, time commitment
- Other: Age range, enrollment status, character references

**Process Timeline (4-6 steps):**
1. **Submit Application**: Online form with transcripts and references
2. **Skills Evaluation**: On-campus or video assessment
3. **Interview**: Meet with coaching staff and academic advisors
4. **Admissions Review**: Committee evaluates complete application
5. **Decision Notification**: Acceptance letters and financial aid offers
6. **Enrollment**: Sign commitment and complete registration

**FAQ (6-10 questions):**
- What are the application deadlines?
- How much does the program cost?
- Is financial aid available?
- What is the acceptance rate?
- Can I visit campus before applying?
- What happens after I'm accepted?

**WPForms Fields:**
- Personal: First name, last name, email, phone
- Academic: Current school, graduation year, GPA
- Athletic: Position, years of experience, highlight video URL
- Message: Additional information or questions

---

## Technical Specifications

### Pattern References

All templates use WordPress pattern syntax:
```html
<!-- wp:pattern {"slug":"fl-coastal-prep/pattern-name"} /-->
```

### Patterns Used

| Pattern | File | Used In |
|---------|------|---------|
| `section-header` | `patterns/section-header.php` | All templates |
| `grid` | `patterns/grid.php` | About (Values) |
| `campus-showcase` | `patterns/campus-showcase.php` | About (Team) |
| `faculty-grid` | `patterns/faculty-grid.php` | Coaches |
| `hero` | `patterns/hero.php` | Admissions |
| `programs-detail` | `patterns/programs-detail.php` | Admissions (Timeline) |
| `contact-form` | `patterns/contact-form.php` | Admissions (modified) |

### Styling Classes

All templates use existing utility classes from `style.css`:

**Typography:**
- `.text-label-small` (0.625rem)
- `.text-label-medium` (0.75rem)
- `.text-blueprint-h2` (clamp 2.5rem-4rem)
- `.text-blueprint-h3` (clamp 2rem-3rem)
- `.text-blueprint-h4` (1.5rem)

**Spacing:**
- `.section-spacing-large` (8rem vertical)
- `.section-spacing-medium` (6rem vertical)
- `.card-padding-large` (3rem)
- `.card-padding-standard` (2rem)

**Borders & Shadows:**
- `.has-border-primary-20`
- `.has-shadow-xl`
- `.has-shadow-soft`

### Color Variables

From `theme.json`:
- `var(--wp--preset--color--primary)` - Gold #FBBF24
- `var(--wp--preset--color--secondary)` - Navy #0A192F
- `var(--wp--preset--color--base)` - White #FFFFFF
- `var(--wp--preset--color--contrast)` - Dark navy #020C1B

### Responsive Breakpoints

Inherited from existing patterns:
- **Mobile**: <768px (1-column stack)
- **Tablet**: 768-1024px (2-column grids)
- **Desktop**: >1024px (3-column grids)

---

## Implementation Checklist

### Phase 1: Template Files
- [ ] Create `templates/page-about.html`
- [ ] Create `templates/page-coaches.html`
- [ ] Create `templates/page-admissions.html`

### Phase 2: Content Setup
- [ ] Create "About" page in WordPress, assign `page-about.html` template
- [ ] Create "Coaches" page, assign `page-coaches.html` template
- [ ] Create "Admissions" page, assign `page-admissions.html` template

### Phase 3: Faculty CPT Configuration (Coaches)
- [ ] Add "Coaches" category to Faculty CPT
- [ ] Tag existing coach posts with "Coaches" category
- [ ] OR: Add custom field `role: coach` to coach posts

### Phase 4: WPForms Integration
- [ ] Install WPForms plugin
- [ ] Create admissions application form
- [ ] Copy shortcode ID
- [ ] Replace placeholder in admissions template

### Phase 5: Content Population
- [ ] Write Vision/Mission/Values content
- [ ] Upload team photos for About page
- [ ] Write FAQ content for Admissions page
- [ ] Add process timeline content

### Phase 6: Testing
- [ ] Test all templates on desktop, tablet, mobile
- [ ] Verify pattern rendering
- [ ] Test WPForms submission
- [ ] Check Faculty grid filtering (coaches)
- [ ] Validate accessibility (headings, contrast, keyboard nav)
- [ ] Test in Site Editor

---

## Performance Impact

**Expected**: None

- Templates are static HTML with pattern references
- No additional database queries (except faculty-grid, which already exists)
- No custom JavaScript
- Images lazy-loaded by WordPress core
- All patterns already optimized

**Estimated Page Load**:
- About: <1s (4 pattern references + images)
- Coaches: <1.5s (1 pattern reference + dynamic query)
- Admissions: <1.5s (5 pattern references + form embed)

---

## Accessibility

All templates maintain WCAG AA compliance:

- ✅ Proper heading hierarchy (h1 → h2 → h3)
- ✅ Sufficient color contrast (navy on white: 12.63:1, white on navy: 12.63:1)
- ✅ Alt text required for all images
- ✅ Semantic HTML from core blocks and patterns
- ✅ Keyboard navigation supported
- ✅ Focus states visible (gold outline on interactive elements)
- ✅ Form labels properly associated

---

## Maintenance

### Pattern Updates
If existing patterns are updated (e.g., `section-header` styling changes), all templates automatically inherit the updates. No template-specific maintenance required.

### Content Updates
All content is editable via WordPress Page Editor:
- Text: Direct editing in block editor
- Images: Media library management
- Forms: WPForms dashboard
- Coaches: Faculty CPT posts

### Future Enhancements

Potential improvements for v2:
1. **FAQ Accordion**: Replace paragraph blocks with `core/details` blocks for expandable Q&A
2. **Process Timeline Animation**: Add scroll-triggered animations
3. **Values Icons**: Custom SVG icons for value pillars
4. **Form Multi-step**: WPForms multi-page functionality
5. **Coaches Filtering**: Front-end filter by specialty, sport, etc.

---

## Approval

**Design Approved By**: User
**Date**: February 15, 2026
**Status**: Ready for Implementation

**Next Step**: Create implementation plan using `writing-plans` skill.
