# Florida Coastal Prep — WordPress FSE Block Theme

This repository contains the **Florida Coastal Prep** Full Site Editing (FSE) WordPress block theme.

## 🤖 For AI Agents / LLMs

**⚠️ MANDATORY**: If you are an AI agent working on this repository, you MUST read [`AGENT_MEDIATOR.md`](./AGENT_MEDIATOR.md) FIRST before making any changes. This file serves as the central coordination point to prevent conflicting changes between different LLM sessions.

## 🏗️ Folder Structure

- `/` — Production theme files (`theme.json`, `functions.php`, etc.)
- `/templates/` — Block templates (HTML)
- `/parts/` — Template parts (HTML)
- `/patterns/` — Block patterns (PHP)
- `/docs/` — Consolidated documentation (Developer guides, Reference, Status)
- `/prototype/react/` — Design reference prototype (not shipped)
- `/tests/` — Security and validation test suite

## 🚀 Getting Started

1. **Read `AGENT_MEDIATOR.md`** to understand the architecture and rules.
2. **Consult `docs/STATUS.md`** for current project state.
3. **Browse `docs/`** for detailed developer and user guides.

## 🧪 Testing

The theme includes a comprehensive test suite.

```bash
composer install
composer test
```

See [tests/README.md](tests/README.md) for more information.

## 🎨 Local Prototype Preview

The React prototype can be used as a visual reference:

```bash
npm install
npm run dev
```
