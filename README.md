# Florida Coastal Prep — WordPress FSE Block Theme

This repository contains the **Florida Coastal Prep** Full Site Editing (FSE) WordPress block theme (production files live in the repo root) plus supporting documentation and a React/Vite prototype used as a visual reference during migration.

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
