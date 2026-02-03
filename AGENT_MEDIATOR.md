# ⚠️ AGENT MEDIATOR — READ THIS FIRST ⚠️

**MANDATORY**: Every LLM agent working on this repository MUST read this file BEFORE reading any other documentation or making any changes.

## Purpose
This file serves as the **single source of truth** and coordination point for all AI agents working on the Florida Coastal Prep WordPress FSE Block Theme. It prevents conflicting changes and ensures consistency across different LLM sessions.

## 🚀 Quick Start (60-Second Overview)

**What is this project?**
- WordPress Full Site Editing (FSE) Block Theme
- Production-ready theme for Florida Coastal Prep academy  
- React prototype exists as reference only (not shipped)

**Where are the files?**
```
/                          ← Production theme files (root)
├── theme.json            ← Design tokens (colors, fonts, spacing)
├── functions.php         ← Theme logic, CPT registration
├── /templates/           ← Block templates (.html ONLY)
├── /parts/               ← Template parts (.html ONLY)
├── /patterns/            ← Block patterns (.php ONLY)
├── /prototype/react/     ← Reference implementation (not shipped)
└── /docs/                ← Internal documentation
```

**Text Domain**: `fl-coastal-prep` (NEVER change this)

**Your First 3 Steps**:
1. Read this entire file (10 minutes)
2. Check `docs/STATUS.md` (2 minutes)
3. Review recent commits: `git log -5`

---

## 🏗️ Architecture Overview

1. **Production WordPress Theme** (root level)
   - `style.css`, `functions.php`, `theme.json`, `readme.txt`, `metadata.json`
   - `/templates/` — Block templates (HTML only)
   - `/parts/` — Template parts (HTML only)
   - `/patterns/` — Block patterns (PHP only)

2. **Reference Implementation** (NOT shipped)
   - `/prototype/react/` — React/Vite/TypeScript/Tailwind prototype

3. **Documentation** (consolidated)
   - `/docs/` — Developer guides, reference, status, and audit reports

---

## 🎨 Role-Specific Guidelines

### 🎨 Design Agent
- **Focus**: Design tokens, `theme.json`, visual consistency.
- **Key Files**: `theme.json`, `docs/DEVELOPER_GUIDE.md`

### 🧩 Pattern Agent
- **Focus**: Block patterns in `/patterns/` (PHP only).
- **Key Files**: `/patterns/*.php`, `docs/REFERENCE.md`

### 📝 Template Agent
- **Focus**: HTML templates in `/templates/` and parts in `/parts/`.
- **Key Files**: `/templates/*.html`, `/parts/*.html`, `docs/REFERENCE.md`

### 🔧 Functionality Agent
- **Focus**: `functions.php`, CPTs, theme logic.
- **Key Files**: `functions.php`, `docs/DEVELOPER_GUIDE.md`

### 🧪 QA Agent
- **Focus**: Testing, validation, audit reports.
- **Key Files**: `/tests/`, `docs/AUDIT_REPORTS.md`

---

## 🚨 CRITICAL RULES — DO NOT VIOLATE

1. **File Type Enforcement**: Templates/Parts = `.html` ONLY. Patterns = `.php` ONLY.
2. **Text Domain**: ALWAYS use `fl-coastal-prep`.
3. **Design Tokens**: Use `theme.json` tokens via CSS variables. NO hardcoded colors/fonts.
4. **No Plugin Dependencies**: Theme must work standalone.

---

## 📋 Before Making Changes — Checklist

1. ✅ Read this `AGENT_MEDIATOR.md` file completely.
2. ✅ Check current theme status in `docs/STATUS.md`.
3. ✅ Review recent commits: `git log -5`.
4. ✅ Verify you're following FSE best practices.

---

## 📚 Documentation Reference

- **Current Status**: [`docs/STATUS.md`](./docs/STATUS.md) — What works, what doesn't.
- **Developer Guide**: [`docs/DEVELOPER_GUIDE.md`](./docs/DEVELOPER_GUIDE.md) — Architecture, Design System, Migration.
- **Reference**: [`docs/REFERENCE.md`](./docs/REFERENCE.md) — File Inventory, Pattern Visuals.
- **Audit Reports**: [`docs/AUDIT_REPORTS.md`](./docs/AUDIT_REPORTS.md) — Security, Performance, Quality findings.
- **User Guide**: [`docs/USER_GUIDE.md`](./docs/USER_GUIDE.md) — User manual, Demo content.

---

**Last Updated**: 2026-02-03  
**File Version**: 1.1.0
