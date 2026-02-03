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

**Text Domain:** `fl-coastal-prep` (NEVER change this)

**Your First 3 Steps:**
1. Read this entire file (10 minutes)
2. Check `THEME_STATUS_REPORT.md` (2 minutes)
3. Review recent commits: `git log -5`

---

## 🎯 Project Identity

**Project Name**: Florida Coastal Prep  
**Theme Type**: WordPress Full Site Editing (FSE) Block Theme  
**Text Domain**: `fl-coastal-prep` (NEVER change this)  
**Version**: 1.0.0  
**Status**: Production-ready

---

## 🏗️ Architecture Overview

### What This Repository Contains

1. **Production WordPress Theme** (root level)
   - Uploadable to WordPress as-is
   - All production files: `style.css`, `functions.php`, `theme.json`, `readme.txt`, `metadata.json`
   - `/templates/` — Block templates (HTML only)
   - `/parts/` — Template parts (HTML only)
   - `/patterns/` — Block patterns (PHP only)

2. **Reference Implementation** (NOT shipped with theme)
   - `/prototype/react/` — React/Vite/TypeScript/Tailwind prototype
   - Used as design/visual reference ONLY
   - Should be excluded from production ZIP files

3. **Documentation** (internal use)
   - `/docs/` — Implementation notes, migration guides, inventories
   - Root-level reports: `THEME_AUDIT_REPORT.md`, `VERIFICATION_REPORT.md`, etc.

---

## 🚨 CRITICAL RULES — DO NOT VIOLATE

### 1. File Type Enforcement
- **Templates** (`/templates/`) → `.html` ONLY (no PHP)
- **Template Parts** (`/parts/`) → `.html` ONLY (no PHP)
- **Patterns** (`/patterns/`) → `.php` ONLY (no HTML files)
- **Never** create legacy PHP templates (e.g., `header.php`, `single.php`)

### 2. Text Domain
- **ALWAYS** use `fl-coastal-prep` for all translatable strings
- **NEVER** change the text domain or use a different one
- Format: `<?php esc_html_e( 'Text', 'fl-coastal-prep' ); ?>`

### 3. Design Tokens — theme.json First
- ALL colors, typography, spacing, and layout settings MUST be defined in `theme.json`
- Do NOT hardcode hex colors, font sizes, or spacing values in templates/patterns
- Use CSS custom properties: `var(--wp--preset--color--primary-blue)`
- Reference existing tokens before creating new ones

### 4. Block Pattern Registration
- Patterns in `/patterns/*.php` are auto-registered via `functions.php`
- Each pattern file MUST return an array with `title`, `categories`, `content`
- Use `inserter: false` for utility patterns not meant for the inserter
- Test patterns in the block editor after creation

### 5. Custom Post Types (CPTs)
- Currently registered: `faculty`, `programs`, `schedule`
- Registration happens in `functions.php` using `register_post_type()`
- Do NOT change CPT slugs without updating all templates/patterns that reference them

### 6. No Plugin Dependencies
- Theme must work standalone (no required plugins)
- Do NOT assume third-party plugins are active
- Use WordPress core blocks and features only

---

## 📋 Before Making Changes — Checklist

1. ✅ Read this AGENT_MEDIATOR.md file completely
2. ✅ Read `/AGENTS.md` for role-specific guidelines
3. ✅ Check current theme status in `/THEME_STATUS_REPORT.md`
4. ✅ Review relevant documentation in `/docs/`
5. ✅ Understand the file structure conventions
6. ✅ Verify you're following FSE best practices (no legacy PHP templates)
7. ✅ Test changes don't conflict with existing patterns/templates
8. ✅ Use existing design tokens from `theme.json`

---

## 🔄 Common Tasks — Standard Procedures

### Creating a New Block Pattern
1. Check if similar pattern exists in `/patterns/`
2. Create new `.php` file in `/patterns/` directory
3. Follow naming convention: `descriptive-name.php` (lowercase, hyphenated)
4. Return array structure (see existing patterns as examples)
5. Use design tokens from `theme.json` (no hardcoded values)
6. Add to appropriate category: `'categories' => ['fl-coastal-prep/category-name']`
7. Test in block editor

### Modifying theme.json
1. Read current `theme.json` completely first
2. Preserve existing design tokens (don't remove colors/fonts in use)
3. Follow WordPress schema (version 2)
4. Validate JSON syntax before saving
5. Document any breaking changes

### Updating Templates or Template Parts
1. Templates are in `/templates/*.html`
2. Template parts are in `/parts/*.html`
3. Use HTML comments for organization: `<!-- wp:group -->`
4. Reference patterns using: `<!-- wp:pattern {"slug":"fl-coastal-prep/pattern-name"} /-->`
5. Never use PHP code in these files

### Editing functions.php
1. Read existing code to understand current hooks/filters
2. Maintain consistent code style (tabs, spacing, comments)
3. Use proper WordPress escaping/sanitization functions
4. Don't remove existing theme supports or CPT registrations
5. Test for PHP errors after changes

---

## 🛑 What NOT to Do

### ❌ NEVER:
- Change the text domain from `fl-coastal-prep`
- Create legacy PHP templates (`header.php`, `footer.php`, `single.php`, etc.)
- Put PHP code in `/templates/` or `/parts/` (HTML only)
- Put HTML files in `/patterns/` (PHP only)
- Hardcode colors, fonts, or spacing instead of using theme.json tokens
- Remove existing CPTs without checking for dependencies
- Install plugins without explicit user permission
- Modify CI/CD files unless specifically requested
- Delete existing patterns/templates without verifying they're unused
- Override WordPress core block styles without good reason
- Use inline styles instead of theme.json settings

### ⚠️ ASK FIRST:
- Installing or requiring any WordPress plugins
- Changing CPT slugs or post type arguments
- Removing existing theme.json design tokens
- Major refactoring that affects multiple files
- Adding new npm packages or dependencies
- Modifying test files or test configurations

---

## 📚 Documentation Quick Reference

### For All Agents
- **THIS FILE**: `/AGENT_MEDIATOR.md` — Central coordination (you are here)
- **Role-Specific Rules**: `/AGENTS.md` — Additional role-specific guidelines
- **Project Overview**: `/README.md` — Repository structure and setup
- **Current Status**: `/THEME_STATUS_REPORT.md` — What works, what doesn't

### For Technical Implementation
- **Architecture**: `/docs/ARCHITECT.md` — High-level design decisions
- **Design System**: `/docs/DESIGN_SYSTEM.md` — Colors, typography, spacing
- **Migration Guide**: `/docs/WORDPRESS_MIGRATION_GUIDE.md` — React → WordPress conversion
- **File Inventory**: `/docs/FILE_INVENTORY.md` — Complete file listing
- **Pattern Reference**: `/docs/PATTERN_VISUAL_REFERENCE.md` — Visual guide to patterns

### For Content & Demo Data
- **Demo Content**: `/docs/DEMO_CONTENT.md` — Sample content setup
- **User Manual**: `/docs/USER_MANUAL.md` — End-user documentation

### For Quality Assurance
- **Audit Report**: `/THEME_AUDIT_REPORT.md` — Comprehensive audit findings
- **Verification**: `/VERIFICATION_REPORT.md` — Validation test results
- **Code Quality**: `/docs/code-quality-findings.md`
- **FSE Compliance**: `/docs/fse-compliance-findings.md`
- **Security**: `/docs/security-findings.md`
- **Performance**: `/docs/performance-findings.md`
- **Functionality**: `/docs/functionality-findings.md`

---

## 🤝 Multi-Agent Coordination

### If Another Agent Made Recent Changes:
1. Run `git log -5` to see recent commits
2. Review changed files: `git diff HEAD~1`
3. Understand WHY the changes were made (check commit messages)
4. DO NOT revert changes without good reason
5. If you disagree, document concerns in a NEW file or comment

### If You Find Conflicting Information:
1. **This file (AGENT_MEDIATOR.md) takes precedence** over all other docs
2. Next: `/AGENTS.md` for role-specific guidelines
3. Then: `/THEME_STATUS_REPORT.md` for current state
4. If still unclear: READ the actual theme files to understand current implementation
5. When in doubt: Preserve existing behavior, don't break what works

### Leaving Notes for Future Agents:
- Update `/THEME_STATUS_REPORT.md` with work completed
- Document complex decisions in `/docs/` with dated filenames
- Use clear commit messages explaining WHY changes were made
- Update this file if you discover new coordination needs

---

## 🎯 Success Criteria

Your work is successful when:
- ✅ All files follow the correct location and file type rules
- ✅ Text domain is consistently `fl-coastal-prep`
- ✅ Design tokens from theme.json are used (no hardcoded values)
- ✅ Theme works without required plugins
- ✅ No PHP errors or warnings
- ✅ Block editor can insert and edit all patterns
- ✅ Templates render correctly on the front end
- ✅ Existing functionality is preserved (nothing breaks)
- ✅ Code follows WordPress coding standards
- ✅ Documentation is updated to reflect changes

---

## 📞 Emergency Contacts / Escalation

If you encounter:
- **Conflicting requirements**: Prioritize this file > AGENTS.md > other docs
- **Breaking changes needed**: Document thoroughly and explain trade-offs
- **Unknown WordPress behavior**: Consult WordPress.org documentation
- **Impossible requests**: Explain constraints clearly to the user

---

## 🔐 Version History

| Date       | Agent/User | Change Description |
|------------|------------|-------------------|
| 2026-02-03 | User Request | Initial creation of AGENT_MEDIATOR.md as coordination file |

---

**Remember**: When in doubt, READ the existing code and documentation before making changes. Preservation of working functionality is more important than pursuing "perfect" architecture.

---

## 📚 Need More Documentation?

See [`/docs/INDEX.md`](./docs/INDEX.md) for a complete, organized guide to all documentation files in this repository.

---

**Last Updated**: 2026-02-03  
**File Version**: 1.0.0
