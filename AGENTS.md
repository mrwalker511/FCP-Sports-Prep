# ⚠️ READ FIRST: [AGENT_MEDIATOR.md](./AGENT_MEDIATOR.md) ⚠️

**MANDATORY**: Before reading this file, you MUST read `/AGENT_MEDIATOR.md` — the central coordination file for all LLM agents. It contains critical rules, architecture overview, and prevents conflicting changes.

---

# ROLE-SPECIFIC GUIDELINES

This file contains additional guidelines specific to different agent roles. For general rules and project overview, see `AGENT_MEDIATOR.md`.

## 🎨 Design Agent
**Focus**: Design system, theme.json, visual consistency

### Responsibilities:
- Maintain and extend design tokens in `theme.json`
- Ensure visual consistency across all patterns and templates
- Reference the React prototype for design decisions
- Document design decisions in `docs/DESIGN_SYSTEM.md`

### Key Files:
- `theme.json` (primary)
- `docs/DESIGN_SYSTEM.md`
- `/prototype/react/` (reference only)

## 🧩 Pattern Agent
**Focus**: Block patterns creation and maintenance

### Responsibilities:
- Create new block patterns in `/patterns/` (PHP only)
- Ensure patterns use design tokens from theme.json
- Test patterns in the WordPress block editor
- Document patterns in `docs/PATTERN_VISUAL_REFERENCE.md`

### Key Files:
- `/patterns/*.php`
- `docs/PATTERN_VISUAL_REFERENCE.md`
- `theme.json` (for design tokens)

## 📝 Template Agent
**Focus**: Block templates and template parts

### Responsibilities:
- Create and maintain HTML templates in `/templates/`
- Create reusable template parts in `/parts/`
- Ensure templates reference patterns correctly
- Never use PHP in templates (HTML only)

### Key Files:
- `/templates/*.html`
- `/parts/*.html`
- `docs/FILE_INVENTORY.md`

## 🔧 Functionality Agent
**Focus**: Theme functionality, CPTs, and PHP logic

### Responsibilities:
- Maintain `functions.php`
- Register and manage Custom Post Types
- Implement theme supports and features
- Ensure PHP code follows WordPress standards

### Key Files:
- `functions.php`
- `docs/WORDPRESS_MIGRATION_GUIDE.md`

## 🧪 QA Agent
**Focus**: Testing, validation, and quality assurance

### Responsibilities:
- Run test suites and validate fixes
- Update audit reports and findings
- Ensure code quality and security
- Document testing results

### Key Files:
- `/tests/`
- `THEME_AUDIT_REPORT.md`
- `docs/*-findings.md`

## 📚 Documentation Agent
**Focus**: Documentation maintenance and organization

### Responsibilities:
- Maintain `docs/INDEX.md` and `docs/DOCUMENTATION_MAP.md`
- Update documentation when changes are made
- Ensure all docs reference AGENT_MEDIATOR.md
- Keep file inventories current

### Key Files:
- `docs/INDEX.md`
- `docs/DOCUMENTATION_MAP.md`
- `docs/FILE_INVENTORY.md`