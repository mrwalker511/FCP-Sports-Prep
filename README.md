# Florida Coastal Prep — WordPress FSE Block Theme

This repository contains the **Florida Coastal Prep** Full Site Editing (FSE) WordPress block theme (production files live in the repo root) plus supporting documentation and a React/Vite prototype used as a visual reference during migration.

## 🤖 For AI Agents / LLMs

**⚠️ MANDATORY**: If you are an AI agent working on this repository, you MUST read [`AGENT_MEDIATOR.md`](./AGENT_MEDIATOR.md) FIRST before making any changes. This file serves as the central coordination point to prevent conflicting changes between different LLM sessions.

📚 **Documentation Index**: See [`docs/INDEX.md`](./docs/INDEX.md) for a complete guide to all documentation files.

🎯 **Quick Start**: AGENT_MEDIATOR.md now includes a quick start section with the essential information you need to begin working.

## Folder layout

### Production theme (uploadable)
- `style.css`, `functions.php`, `theme.json`, `readme.txt`, `metadata.json`
- `templates/` — block templates (HTML)
- `parts/` — template parts (HTML)
- `patterns/` — block patterns (PHP)

### Internal docs
- `docs/` — migration notes, inventories, and the theme owner manual

### React prototype (reference only)
- `prototype/react/` — original React/Tailwind implementation (TSX) used as a design source

### Test suite
- `tests/` — comprehensive security and debugging test suite
- See [tests/README.md](tests/README.md) for full documentation

### Demo content
- `demo-data/` — WXR export file for CPT demo content (Faculty, Programs, Schedule)
- Theme includes Starter Content API for auto-creating pages and menus
- See [docs/DEMO_CONTENT.md](docs/DEMO_CONTENT.md) for setup instructions

## Testing

This theme includes a comprehensive test suite for security and debugging validation.

### Quick Start

```bash
# Install test dependencies
composer install

# Run all tests
composer test

# Run specific test suites
composer test:security    # Security tests only
composer test:debugging   # Debugging tests only
composer test:patterns    # Pattern validation only
```

For detailed testing documentation, see [tests/README.md](tests/README.md).

## Local prototype preview (optional)

The repo-level Vite config points at `prototype/react/` as its project root.

```bash
npm install
npm run dev
```

Note: The prototype is **not** used by WordPress at runtime and should be excluded from any production theme ZIP.
