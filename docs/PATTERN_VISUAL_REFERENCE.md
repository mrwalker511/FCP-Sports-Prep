# Pattern Visual Reference Guide
## Detailed Component Descriptions for WordPress Block Conversion

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
