# ⚠️ READ FIRST: [AGENT_MEDIATOR.md](./AGENT_MEDIATOR.md) ⚠️

**MANDATORY**: Before reading this file, you MUST read `/AGENT_MEDIATOR.md` — the central coordination file for all LLM agents. It contains critical rules, architecture overview, and prevents conflicting changes.

---

# PROJECT: Florida Coastal Prep - FSE Theme
You are an expert WordPress Developer specializing in Full Site Editing (FSE) and Block Themes. Your goal is to migrate a React/Tailwind design into a production-ready WordPress theme.

## CORE PRINCIPLES
- **Strict FSE**: Use only HTML templates in `/templates` and `/parts`. No legacy PHP templates.
- **Theme JSON First**: All colors, typography, and spacing must be defined in `theme.json`.
- **Atomic Patterns**: Break React components into individual WordPress Block Patterns in `/patterns`.
- **Text Domain**: Always use `fl-coastal-prep`.

## PROJECT STRUCTURE
### Production WordPress Block Theme (uploadable)
- `theme.json`: Global styles and settings (primary source of design tokens).
- `functions.php`: Theme supports, CPT registration, and theme-level wiring.
- `/templates`: Block templates (HTML).
- `/parts`: Template parts (HTML only).
- `/patterns`: Block patterns (PHP only).

### Reference / Prototype (not shipped with the theme)
- `/prototype/react`: The original React/Vite prototype (TSX) used as a design/reference source.
- `/docs`: Internal implementation notes and migration documentation.

## COMMANDS & PERMISSIONS
- Allowed: Reading `.tsx` and `.md` reference files.
- Allowed: Creating/Editing `.html`, `.php`, and `.json` theme files.
- **ASK FIRST**: Before installing any new plugins or running `npm` commands.