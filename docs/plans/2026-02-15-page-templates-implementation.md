# Page Templates Implementation Plan

> **For Claude:** REQUIRED SUB-SKILL: Use superpowers:executing-plans to implement this plan task-by-task.

**Goal:** Create three new WordPress FSE page templates (About, Coaches, Admissions) using pure pattern assembly with zero new pattern files.

**Architecture:** Build templates by composing existing block patterns from `patterns/` directory. Each template is a static HTML file in `templates/` that references patterns using WordPress pattern syntax. All styling inherited from existing utility classes and theme.json.

**Tech Stack:** WordPress Full Site Editing (FSE), WordPress Block Patterns, HTML templates

**Design Reference:** `docs/plans/2026-02-15-page-templates-design.md`

---

## Task 1: Create About/Mission Page Template

**Files:**
- Create: `templates/page-about.html`

**Purpose:** Template for academy's vision, mission, values, and team photos.

### Step 1: Create template file with header/footer structure

Create `templates/page-about.html`:

```html
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
	<!-- Content will go here -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
```

### Step 2: Add Vision section using section-header pattern

Replace `<!-- Content will go here -->` with:

```html
	<!-- Vision Section -->
	<!-- wp:group {"align":"full","className":"section-spacing-large","style":{"color":{"background":"var(--wp--preset--color--contrast)"}},{"layout":{"type":"constrained"}}} -->
	<div class="wp-block-group alignfull section-spacing-large has-background" style="background-color:var(--wp--preset--color--contrast)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
			<p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">OUR FOUNDATION</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"className":"text-blueprint-h2","style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)"}},"textColor":"base","fontFamily":"display"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h2" style="font-size:clamp(2.5rem, 5vw, 4rem)">VISION</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300","fontSize":"1.125rem"}},"textColor":"base","className":"opacity-80"} -->
			<p class="has-base-color has-text-color opacity-80" style="font-size:1.125rem;font-style:italic;font-weight:300">
				To become the premier destination for elite student-athletes who aspire to compete at the highest levels while excelling academically.
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
```

### Step 3: Add Mission section

Append after Vision section:

```html
	<!-- Mission Section -->
	<!-- wp:group {"align":"full","className":"section-spacing-large","style":{"color":{"background":"var(--wp--preset--color--contrast)"}},{"layout":{"type":"constrained"}}} -->
	<div class="wp-block-group alignfull section-spacing-large has-background" style="background-color:var(--wp--preset--color--contrast)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
			<p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">OUR PURPOSE</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"className":"text-blueprint-h2","style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)"}},"textColor":"base","fontFamily":"display"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h2" style="font-size:clamp(2.5rem, 5vw, 4rem)">MISSION</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300","fontSize":"1.125rem"}},"textColor":"base","className":"opacity-80"} -->
			<p class="has-base-color has-text-color opacity-80" style="font-size:1.125rem;font-style:italic;font-weight:300">
				We provide a holistic development program combining elite athletic training with rigorous academic preparation, ensuring our student-athletes are equipped for success both on the court and in the classroom.
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
```

### Step 4: Add Values section using grid pattern reference

Append after Mission section:

```html
	<!-- Values Section - Using Grid Pattern -->
	<!-- wp:pattern {"slug":"fl-coastal-prep/grid"} /-->
```

**Note:** The grid pattern will need content customization in WordPress editor after template is assigned. Default grid content shows athletic/academic/lifestyle - edit to show values like Excellence, Integrity, Community.

### Step 5: Add Team Photos section using campus-showcase pattern

Append after Values section:

```html
	<!-- Team Photos Section - Using Campus Showcase Pattern -->
	<!-- wp:pattern {"slug":"fl-coastal-prep/campus-showcase"} /-->
```

**Note:** After template assignment, edit in Site Editor to replace facility images with team photos and update labels to "Leadership Team", "Coaching Excellence", "Support Staff".

### Step 6: Verify template file is complete

Complete `templates/page-about.html` should have:
- Header template part
- Main group wrapper
- Vision section (custom blocks)
- Mission section (custom blocks)
- Values grid (pattern reference)
- Team photos (pattern reference)
- Footer template part

### Step 7: Test template in WordPress

Manual testing steps:
1. Ensure WordPress is running locally or in test environment
2. Go to Appearance → Editor → Templates
3. Verify "About/Mission" template appears in template list
4. If not appearing, check:
   - File saved in correct location: `templates/page-about.html`
   - File has valid HTML structure
   - No syntax errors in pattern references

### Step 8: Create test page

Manual testing steps:
1. Pages → Add New
2. Title: "About Our Academy"
3. Page Attributes → Template → Select "About/Mission"
4. Publish page
5. View page on frontend
6. Verify:
   - ✅ Vision section displays with dark background
   - ✅ Mission section displays with dark background
   - ✅ Grid pattern renders (3 cards)
   - ✅ Campus showcase pattern renders (image grid)
   - ✅ All typography uses correct classes
   - ✅ Responsive layout works (test mobile/tablet)

### Step 9: Commit

```bash
git add templates/page-about.html
git commit -m "feat(templates): add About/Mission page template

- Vision section with dark background and editable content
- Mission section matching Vision styling
- Values grid using existing grid pattern (customizable)
- Team photos using campus-showcase pattern (customizable)
- Pure pattern assembly, zero new patterns needed

Template file: templates/page-about.html
Reference: docs/plans/2026-02-15-page-templates-design.md

Co-Authored-By: Claude Sonnet 4.5 <noreply@anthropic.com>"
```

---

## Task 2: Create Coaching Staff Page Template

**Files:**
- Create: `templates/page-coaches.html`

**Purpose:** Template for showcasing coaching staff using faculty grid pattern.

### Step 1: Create template file with basic structure

Create `templates/page-coaches.html`:

```html
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
	<!-- wp:group {"align":"full","className":"section-spacing-large","style":{"color":{"background":"var(--wp--preset--color--contrast)"}},{"layout":{"type":"constrained"}}} -->
	<div class="wp-block-group alignfull section-spacing-large has-background" style="background-color:var(--wp--preset--color--contrast)">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
			<p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">ELITE COACHING</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"className":"text-blueprint-h2","style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)"}},"textColor":"base","fontFamily":"display"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h2" style="font-size:clamp(2.5rem, 5vw, 4rem)">MEET THE STAFF</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300","fontSize":"1.125rem"}},"textColor":"base","className":"opacity-80"} -->
			<p class="has-base-color has-text-color opacity-80" style="font-size:1.125rem;font-style:italic;font-weight:300">
				Our coaching staff brings decades of professional and collegiate experience, dedicated to developing the next generation of elite student-athletes.
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- Coaches Grid - Using Faculty Grid Pattern -->
	<!-- wp:pattern {"slug":"fl-coastal-prep/faculty-grid"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
```

### Step 2: Verify template structure

Check that `templates/page-coaches.html` includes:
- Header template part
- Main wrapper
- Section header (custom blocks) with coaching-specific content
- Faculty grid pattern reference
- Footer template part

### Step 3: Test template in WordPress

Manual testing steps:
1. Go to Appearance → Editor → Templates
2. Verify "Coaching Staff" template appears
3. Pages → Add New
4. Title: "Coaching Staff"
5. Page Attributes → Template → Select "Coaching Staff"
6. Publish page
7. View on frontend
8. Verify:
   - ✅ Header section displays with "ELITE COACHING" label
   - ✅ Faculty grid renders (will show all faculty by default)
   - ✅ Grid is 3-column responsive
   - ✅ Cards have proper styling

### Step 4: Configure Faculty filtering for coaches

**Option A: Category-based filtering (Recommended)**

Modify faculty-grid pattern reference to filter by category:

In `templates/page-coaches.html`, update the pattern reference to:

```html
	<!-- Coaches Grid -->
	<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"faculty","order":"ASC","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":["coaches"]}},"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"grid","columnCount":3}} -->

		<!-- wp:group {"className":"faculty-card has-shadow-xl has-border-primary-20 card-padding-standard","style":{"spacing":{"blockGap":"1.5rem"},"border":{"width":"1px","style":"solid"},"color":{"background":"var(--wp--preset--color--secondary)"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group faculty-card has-shadow-xl has-border-color has-border-primary-20 card-padding-standard has-background"
			style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary)">

			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","align":"center","className":"faculty-image"} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":10,"className":"text-label-medium letter-spacing-normal","textColor":"primary"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"italic","textTransform":"uppercase","fontSize":"1.875rem"}},"fontFamily":"display","textColor":"base"} /-->

				<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"border":{"top":{"color":"var(--wp--preset--color--primary)","width":"1px"}},"dimensions":{"minWidth":"1.5rem"}},"layout":{"type":"flex"}} -->
					<div class="wp-block-group"
						style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;min-width:1.5rem">
					</div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"className":"text-label-medium letter-spacing-normal opacity-80","textColor":"base"} -->
					<p class="has-base-color has-text-color text-label-medium letter-spacing-normal opacity-80">Learn More</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"4rem"}}}} -->
		<!-- wp:query-pagination-previous {"label":"Previous"} /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next {"label":"Next"} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
```

**Note:** This assumes a "Coaches" category exists in the Faculty CPT. If it doesn't exist, it will be created during content setup.

### Step 5: Test coaches filtering

Manual testing setup:
1. Posts → Faculty → Categories
2. Create new category: "Coaches"
3. Edit existing faculty posts
4. Assign coaches to "Coaches" category
5. View "Coaching Staff" page
6. Verify only coaches appear in grid

### Step 6: Commit

```bash
git add templates/page-coaches.html
git commit -m "feat(templates): add Coaching Staff page template

- Section header with elite coaching messaging
- Faculty grid pattern filtered by 'Coaches' category
- 3-column responsive grid layout
- Reuses existing faculty-grid pattern styling

Template file: templates/page-coaches.html
Reference: docs/plans/2026-02-15-page-templates-design.md

Co-Authored-By: Claude Sonnet 4.5 <noreply@anthropic.com>"
```

---

## Task 3: Create Admissions/Enrollment Page Template

**Files:**
- Create: `templates/page-admissions.html`

**Purpose:** Multi-section template for admissions process with hero, requirements, timeline, FAQ, and application form.

### Step 1: Create template with hero section

Create `templates/page-admissions.html`:

```html
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group">
	<!-- Hero Section - Using Hero Pattern -->
	<!-- wp:pattern {"slug":"fl-coastal-prep/hero"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
```

**Note:** After template creation, edit hero pattern content in Site Editor:
- Badge: "JOIN THE ELITE"
- Title: "START YOUR JOURNEY"
- Description: "Applications now open for the upcoming season..."
- Primary button: "Apply Now" (anchor link: `#application-form`)
- Secondary button: "Schedule Visit" (link to contact page)

### Step 2: Add Requirements section

Insert after hero pattern, before closing `</main>`:

```html
	<!-- Requirements Section -->
	<!-- wp:group {"className":"section-spacing-medium","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section-spacing-medium">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
			<p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">REQUIREMENTS</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"className":"text-blueprint-h2","textColor":"base","fontFamily":"display"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h2">ELIGIBILITY CRITERIA</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"4rem"},"margin":{"top":"3rem"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:3rem">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"className":"text-blueprint-h4","textColor":"secondary","fontFamily":"display"} -->
				<h3 class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-h4">Academic Requirements</h3>
				<!-- /wp:heading -->

				<!-- wp:list {"className":"is-style-no-disc"} -->
				<ul class="is-style-no-disc">
					<!-- wp:list-item -->
					<li><span class="has-primary-color">―</span> Minimum 2.5 GPA</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><span class="has-primary-color">―</span> Official transcripts</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><span class="has-primary-color">―</span> SAT/ACT scores</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><span class="has-primary-color">―</span> 2 academic references</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:heading {"level":3,"className":"text-blueprint-h4","textColor":"secondary","fontFamily":"display"} -->
				<h3 class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-h4">Athletic Requirements</h3>
				<!-- /wp:heading -->

				<!-- wp:list {"className":"is-style-no-disc"} -->
				<ul class="is-style-no-disc">
					<!-- wp:list-item -->
					<li><span class="has-primary-color">―</span> Competitive playing experience</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><span class="has-primary-color">―</span> Skills evaluation video</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><span class="has-primary-color">―</span> Coach recommendation</li>
					<!-- /wp:list-item -->
					<!-- wp:list-item -->
					<li><span class="has-primary-color">―</span> Full-time commitment</li>
					<!-- /wp:list-item -->
				</ul>
				<!-- /wp:list -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
```

### Step 3: Add Process Timeline section

Insert after Requirements section:

```html
	<!-- Process Timeline Section - Using Programs Detail Pattern -->
	<!-- wp:pattern {"slug":"fl-coastal-prep/programs-detail"} /-->
```

**Note:** After template creation, edit in Site Editor to customize for admissions process:
- Replace program images with admissions-related images (handshake, campus visit, application review)
- Update text to show enrollment steps instead of program details
- Example steps: 1. Submit Application → 2. Skills Evaluation → 3. Interview → 4. Decision → 5. Enrollment

### Step 4: Add FAQ section

Insert after Process Timeline:

```html
	<!-- FAQ Section -->
	<!-- wp:group {"className":"section-spacing-medium","layout":{"type":"constrained"}} -->
	<div class="wp-block-group section-spacing-medium">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
			<p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">QUESTIONS</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"className":"text-blueprint-h2","textColor":"base","fontFamily":"display"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h2">FREQUENTLY ASKED</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3rem"},"blockGap":"2rem"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="margin-top:3rem">
			<!-- wp:heading {"level":3,"className":"text-blueprint-h4","textColor":"secondary","fontFamily":"display"} -->
			<h3 class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-h4">What are the application deadlines?</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"base","className":"opacity-80"} -->
			<p class="has-base-color has-text-color opacity-80">We operate on a rolling admissions basis, but priority consideration is given to applications submitted by March 1st for the following academic year. Late applications are reviewed on a space-available basis.</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"text-blueprint-h4","textColor":"secondary","fontFamily":"display"} -->
			<h3 class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-h4">How much does the program cost?</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"base","className":"opacity-80"} -->
			<p class="has-base-color has-text-color opacity-80">Tuition for the full academic year is $45,000, which includes athletic training, academic instruction, room and board, and all program fees. Financial aid and scholarships are available for qualified students.</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"text-blueprint-h4","textColor":"secondary","fontFamily":"display"} -->
			<h3 class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-h4">Is financial aid available?</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"base","className":"opacity-80"} -->
			<p class="has-base-color has-text-color opacity-80">Yes. 40% of our roster is supported by full or partial scholarships funded by our donor network. Financial aid decisions are made based on both merit and demonstrated need.</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"text-blueprint-h4","textColor":"secondary","fontFamily":"display"} -->
			<h3 class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-h4">Can I visit campus before applying?</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"base","className":"opacity-80"} -->
			<p class="has-base-color has-text-color opacity-80">Absolutely. We encourage prospective students and families to schedule a campus visit. Contact our admissions office to arrange a tour, meet with coaches, and attend a practice session.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
```

### Step 5: Add Application Form section

Insert after FAQ section, before closing `</main>`:

```html
	<!-- Application Form Section - Using Contact Form Pattern -->
	<div id="application-form">
		<!-- wp:group {"align":"full","className":"section-spacing-large","style":{"color":{"background":"var(--wp--preset--color--contrast)"}},{"layout":{"type":"constrained"}}} -->
		<div class="wp-block-group alignfull section-spacing-large has-background" style="background-color:var(--wp--preset--color--contrast)">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
				<p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">APPLY NOW</p>
				<!-- /wp:paragraph -->

				<!-- wp:heading {"className":"text-blueprint-h2","style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)"}},"textColor":"base","fontFamily":"display"} -->
				<h2 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h2" style="font-size:clamp(2.5rem, 5vw, 4rem)">READY TO START?</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300","fontSize":"1.125rem"}},"textColor":"base","className":"opacity-80"} -->
				<p class="has-base-color has-text-color opacity-80" style="font-size:1.125rem;font-style:italic;font-weight:300">
					Submit your application below. Our admissions team will review your submission and contact you within 48 hours.
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:shortcode -->
				[wpforms id="123"]
				<!-- /wp:shortcode -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
```

**Note:** Replace `[wpforms id="123"]` with actual WPForms shortcode after creating the admissions form in WPForms plugin.

### Step 6: Verify complete template structure

Check that `templates/page-admissions.html` includes:
1. Header template part
2. Main wrapper with:
   - Hero pattern reference
   - Requirements section (custom blocks)
   - Process timeline (pattern reference)
   - FAQ section (custom blocks)
   - Application form (custom blocks + WPForms shortcode)
3. Footer template part

### Step 7: Test template in WordPress

Manual testing steps:
1. Go to Appearance → Editor → Templates
2. Verify "Admissions/Enrollment" template appears
3. Pages → Add New
4. Title: "Admissions"
5. Page Attributes → Template → Select "Admissions/Enrollment"
6. Publish page
7. View on frontend
8. Verify:
   - ✅ Hero section displays (full viewport height)
   - ✅ Requirements displays (2-column layout)
   - ✅ Process timeline renders (programs-detail pattern)
   - ✅ FAQ displays (questions and answers)
   - ✅ Application form section displays (with WPForms placeholder)
   - ✅ All sections have proper spacing
   - ✅ Dark/light section alternation works
   - ✅ Responsive layout (test mobile/tablet)

### Step 8: Set up WPForms integration

Manual setup steps:
1. Install WPForms plugin (if not installed)
2. WPForms → Add New
3. Create form with fields:
   - Personal Information section:
     - First Name (required)
     - Last Name (required)
     - Email (required)
     - Phone (required)
   - Academic Information section:
     - Current School (required)
     - Expected Graduation Year (dropdown: 2026-2030)
     - Current GPA (number)
   - Athletic Information section:
     - Primary Position (dropdown: PG, SG, SF, PF, C)
     - Years of Experience (number)
     - Highlight Video URL (URL field)
   - Additional Information section:
     - Message/Questions (textarea)
4. Save form and copy shortcode
5. Edit Admissions page in Site Editor
6. Replace `[wpforms id="123"]` with actual shortcode
7. Save template
8. Test form submission on frontend

### Step 9: Commit

```bash
git add templates/page-admissions.html
git commit -m "feat(templates): add Admissions/Enrollment page template

Multi-section template with:
- Hero section using hero pattern
- Requirements section (2-column layout with academic/athletic criteria)
- Process timeline using programs-detail pattern (customizable)
- FAQ section with Q&A pairs
- Application form with WPForms placeholder integration

Dark/light section alternation for visual rhythm.
Anchor link from hero button to form (#application-form).

Template file: templates/page-admissions.html
Reference: docs/plans/2026-02-15-page-templates-design.md

Co-Authored-By: Claude Sonnet 4.5 <noreply@anthropic.com>"
```

---

## Task 4: Documentation and Content Setup Guide

**Files:**
- Modify: `docs/USER_GUIDE.md` (add section on new templates)

### Step 1: Document template usage in user guide

Add to `docs/USER_GUIDE.md` after existing template documentation:

```markdown
### New Page Templates

#### About/Mission Template

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

#### Coaching Staff Template

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

#### Admissions/Enrollment Template

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
```

### Step 2: Create content checklist

Create `docs/CONTENT_CHECKLIST.md`:

```markdown
# Page Templates Content Checklist

Use this checklist to populate the three new page templates.

## About/Mission Page

### Vision Section
- [ ] Write vision statement (2-3 sentences)
- [ ] Review and approve vision text

### Mission Section
- [ ] Write mission statement (2-3 sentences)
- [ ] Review and approve mission text

### Values Grid
- [ ] Define 3-6 core values
- [ ] Write 1-2 sentence description for each value
- [ ] Source/create icons for each value
- [ ] Upload value images (if using images instead of solid backgrounds)

### Team Photos
- [ ] Collect 3-6 team photos (high-quality, web-optimized)
- [ ] Write photo captions/labels
- [ ] Upload to Media Library
- [ ] Assign to template in Site Editor

---

## Coaching Staff Page

### Header Content
- [ ] Review/edit header description text
- [ ] Approve final messaging

### Coach Posts
For each coach:
- [ ] Create Faculty post
- [ ] Add professional headshot (square crop, high-res)
- [ ] Write 10-20 word excerpt (title, specialty, experience)
- [ ] Write full bio (education, experience, achievements)
- [ ] Assign "Coaches" category
- [ ] Publish post

**Recommended Coach Count**: 6-12 coaches

---

## Admissions Page

### Hero Section
- [ ] Write hero title (max 70 characters)
- [ ] Write hero description (2-3 sentences)
- [ ] Upload hero background image (basketball court, athletes, campus)
- [ ] Set button links (Apply button → `#application-form`, Visit button → contact page)

### Requirements Section
Academic Requirements:
- [ ] Define GPA minimum
- [ ] List required documents (transcripts, test scores, references)

Athletic Requirements:
- [ ] Define skill level expectations
- [ ] List required materials (evaluation video, coach rec)

### Process Timeline
- [ ] Define 4-6 enrollment steps
- [ ] Write description for each step
- [ ] Source images for each step (handshake, campus visit, application review, etc.)
- [ ] Upload images to Media Library
- [ ] Update in Site Editor

### FAQ Section
- [ ] Write 6-10 common questions
- [ ] Write clear, concise answers
- [ ] Review for completeness

Common FAQ topics:
- Application deadlines
- Tuition costs
- Financial aid availability
- Campus visit scheduling
- Acceptance timeline
- Program start dates

### Application Form
- [ ] Install WPForms plugin
- [ ] Create admissions application form
- [ ] Add fields:
  - [ ] Personal info (name, email, phone)
  - [ ] Academic info (school, grad year, GPA)
  - [ ] Athletic info (position, experience, video URL)
  - [ ] Additional message field
- [ ] Configure form notifications (send to admissions email)
- [ ] Test form submission
- [ ] Copy shortcode
- [ ] Replace placeholder in template
- [ ] Test on frontend

---

## Final Review

- [ ] All three templates created and assigned to pages
- [ ] All content populated
- [ ] All images uploaded and optimized
- [ ] WPForms integration working
- [ ] Test on desktop, tablet, mobile
- [ ] Proofread all text
- [ ] Get stakeholder approval
- [ ] Publish pages
```

### Step 3: Commit documentation

```bash
git add docs/USER_GUIDE.md docs/CONTENT_CHECKLIST.md
git commit -m "docs: add user guide and checklist for new page templates

Added documentation for three new templates:
- About/Mission template usage and content tips
- Coaching Staff template setup with Faculty CPT filtering
- Admissions template sections and WPForms integration

Created content checklist for populating all template sections.

Co-Authored-By: Claude Sonnet 4.5 <noreply@anthropic.com>"
```

---

## Testing Checklist

After implementing all templates, verify:

### Functional Testing
- [ ] All three templates appear in WordPress Template list
- [ ] Pages can be created and templates assigned
- [ ] All pattern references render correctly
- [ ] No console errors or PHP warnings
- [ ] WPForms integration works (Admissions page)
- [ ] Coaches category filtering works (Coaches page)

### Visual Testing
- [ ] Typography scales match design specs
- [ ] Color scheme consistent (gold/navy/white)
- [ ] Spacing between sections correct (6-8rem)
- [ ] Dark/light section alternation works
- [ ] Images display with correct aspect ratios

### Responsive Testing
- [ ] Desktop (>1024px): 3-column grids, large typography
- [ ] Tablet (768-1024px): 2-column grids, medium typography
- [ ] Mobile (<768px): 1-column stack, smaller typography

### Accessibility Testing
- [ ] Heading hierarchy correct (h1 → h2 → h3)
- [ ] Color contrast meets WCAG AA (navy on white, white on navy)
- [ ] All images have alt text
- [ ] Keyboard navigation works
- [ ] Focus states visible on interactive elements
- [ ] Form labels properly associated (WPForms)

### Performance Testing
- [ ] Page load time <2s
- [ ] No layout shift (CLS)
- [ ] Images lazy-loaded
- [ ] No unnecessary database queries

### Browser Testing
- [ ] Chrome/Edge (latest)
- [ ] Firefox (latest)
- [ ] Safari (latest)
- [ ] Mobile Safari (iOS)
- [ ] Chrome Android

---

## Rollback Plan

If issues arise after deployment:

### Quick Rollback
```bash
# Revert all three template files
git revert HEAD~3..HEAD

# Or revert specific template
git checkout HEAD~1 templates/page-about.html
```

### Manual Rollback
1. Delete template files from `templates/` directory
2. Remove pages using those templates
3. Or reassign pages to different templates

### Common Issues and Fixes

**Issue**: Template doesn't appear in template list
- **Fix**: Check file is in `templates/` directory with `.html` extension
- **Fix**: Verify HTML structure is valid
- **Fix**: Clear WordPress transients: Appearance → Editor (just loading the editor clears cache)

**Issue**: Pattern not rendering
- **Fix**: Check pattern slug matches exactly: `fl-coastal-prep/pattern-name`
- **Fix**: Verify pattern file exists in `patterns/` directory
- **Fix**: Check pattern file has valid PHP header

**Issue**: Coaches not appearing in grid
- **Fix**: Verify "Coaches" category exists and is assigned to Faculty posts
- **Fix**: Check query parameters in template
- **Fix**: Verify Faculty CPT has posts

**Issue**: WPForms not displaying
- **Fix**: Verify WPForms plugin is installed and activated
- **Fix**: Check form ID matches shortcode: `[wpforms id="123"]`
- **Fix**: Verify form is published, not draft

---

## Completion Criteria

This implementation is complete when:

✅ All three template files created and committed
✅ Templates appear in WordPress template list
✅ Test pages created and templates assigned
✅ All patterns render correctly
✅ Documentation updated (USER_GUIDE.md, CONTENT_CHECKLIST.md)
✅ All tests passing (functional, visual, responsive, accessibility)
✅ No console errors or PHP warnings
✅ Stakeholder approval received

---

## Time Estimate

- **Task 1** (About template): 30-45 minutes
- **Task 2** (Coaches template): 20-30 minutes
- **Task 3** (Admissions template): 45-60 minutes
- **Task 4** (Documentation): 20-30 minutes
- **Testing**: 30-45 minutes
- **Total**: 2.5-3.5 hours

---

## References

- Design Document: `docs/plans/2026-02-15-page-templates-design.md`
- WordPress FSE Docs: https://developer.wordpress.org/block-editor/how-to-guides/themes/
- Block Pattern Syntax: https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/
- WPForms Docs: https://wpforms.com/docs/
