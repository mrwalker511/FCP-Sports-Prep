# DESIGN & STYLING SYSTEM

## ⚠️ For AI Agents
Before modifying design tokens, read [`/AGENT_MEDIATOR.md`](../AGENT_MEDIATOR.md) — especially the section on theme.json and design tokens.

---

## 1. COLOR PALETTE
Strictly follow the hex codes from `theme.json`:
- Gold: `#FBBF24` (Primary CTA)
- Navy: `#0A192F` (Contrast)
- Deep Space: `#020C1B` (Section Backgrounds)

## 2. TYPOGRAPHY
Map font-families as defined in the project:
- `Display`: Bebas Neue (Titles)
- `Heading`: Oswald (Section Headers)
- `Body`: Inter (Content)

## 3. COMPONENT STYLING
- **Buttons**: Must be `wp-block-button`. Use "Outline" or "Fill" styles rather than custom HTML.
- **Spacing**: Use the WordPress spacing scale (10, 20, 30, etc.) which maps to the Tailwind `gap` and `padding` scales.
- **Animations**: Add the custom CSS animations (fade-in, slide-in) to a dedicated `assets/css/animations.css` and enqueue it in `functions.php`.