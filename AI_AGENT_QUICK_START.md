# AI Agent Quick Start Guide

**⏱️ 2-Minute Orientation for LLM Agents**

---

## 🚨 STOP — Read This First

Before doing ANYTHING else, read: **[`AGENT_MEDIATOR.md`](./AGENT_MEDIATOR.md)**

That file contains:
- ✅ Critical rules you MUST follow
- ✅ File structure enforcement
- ✅ Multi-agent coordination
- ✅ What NOT to do
- ✅ Common task procedures

---

## ⚡ 60-Second Overview

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

---

## 🎯 Your First 5 Steps

### 1. Read the Mediator File (MANDATORY)
```
Read: AGENT_MEDIATOR.md
Time: 5-10 minutes
Why: Contains ALL critical rules and prevents conflicts
```

### 2. Check Current Status
```
Read: THEME_STATUS_REPORT.md
Time: 2-3 minutes
Why: Tells you what's working and what's not
```

### 3. Review Recent Changes
```bash
git log -5
git diff HEAD~1
```
```
Time: 2 minutes
Why: Understand what the last agent did
```

### 4. Read Task-Specific Docs
```
If creating patterns → docs/PATTERN_VISUAL_REFERENCE.md
If fixing bugs → THEME_AUDIT_REPORT.md
If working with CPTs → docs/WORDPRESS_MIGRATION_GUIDE.md
```

### 5. Make Changes Following Rules
```
- Use existing design tokens from theme.json
- Follow file type rules (HTML in templates, PHP in patterns)
- Keep text domain as fl-coastal-prep
- Test before committing
- Update THEME_STATUS_REPORT.md
```

---

## 🚫 Top 5 Rules — DO NOT VIOLATE

### 1. ❌ Never Change Text Domain
**Always use:** `fl-coastal-prep`
**Never use:** anything else

### 2. ❌ Never Mix File Types
- Templates → `.html` ONLY (no PHP)
- Patterns → `.php` ONLY (no HTML)
- No legacy PHP templates (no `header.php`, `footer.php`, etc.)

### 3. ❌ Never Hardcode Design Values
**Wrong:** `style="color: #FBBF24"`
**Right:** Use theme.json tokens: `var(--wp--preset--color--primary-gold)`

### 4. ❌ Never Delete Existing Patterns/Templates Without Verification
**Always:** Check if they're used elsewhere first
**Then:** Document why you're removing them

### 5. ❌ Never Skip Reading AGENT_MEDIATOR.md
**It's not optional.** Every agent must read it. No exceptions.

---

## 📚 Documentation Quick Reference

| I need to... | Read this |
|--------------|-----------|
| **Start here** | `AGENT_MEDIATOR.md` |
| **Understand structure** | `README.md` |
| **Check current state** | `THEME_STATUS_REPORT.md` |
| **Find all docs** | `docs/INDEX.md` |
| **See visual flowchart** | `docs/DOCUMENTATION_MAP.md` |
| **Create patterns** | `docs/PATTERN_VISUAL_REFERENCE.md` |
| **Work with colors/fonts** | `docs/DESIGN_SYSTEM.md` + `theme.json` |
| **Fix bugs** | `THEME_AUDIT_REPORT.md` |

---

## 🔄 Multi-Agent Awareness

**If another LLM worked on this before you:**

1. ✅ **DO** read their commit messages
2. ✅ **DO** understand WHY they made changes
3. ✅ **DO** preserve working functionality
4. ❌ **DON'T** revert changes without good reason
5. ❌ **DON'T** assume your approach is better

**Remember:** Multiple agents working together. Coordination > Individual preferences.

---

## 🎯 Common Tasks — Where to Start

### Task: Create a New Block Pattern
```
1. AGENT_MEDIATOR.md (pattern section)
2. docs/DESIGN_SYSTEM.md (design tokens)
3. docs/PATTERN_VISUAL_REFERENCE.md (examples)
4. Create: /patterns/your-pattern.php
5. Update: THEME_STATUS_REPORT.md
```

### Task: Fix a Security Issue
```
1. AGENT_MEDIATOR.md (security rules)
2. docs/security-findings.md (current findings)
3. Review: functions.php or relevant file
4. Fix with proper escaping/sanitization
5. Update: THEME_STATUS_REPORT.md
```

### Task: Modify theme.json
```
1. AGENT_MEDIATOR.md (design token rules)
2. Read: current theme.json
3. docs/DESIGN_SYSTEM.md (understand tokens)
4. Check: what patterns/templates use affected tokens
5. Change: preserve existing tokens in use
6. Update: THEME_STATUS_REPORT.md
```

### Task: Debug Template Issue
```
1. AGENT_MEDIATOR.md (template rules)
2. Check: /templates/ directory
3. Verify: HTML only, no PHP
4. Test: does template reference correct patterns?
5. Fix and document in THEME_STATUS_REPORT.md
```

---

## ✅ Success Checklist

Before calling your work "done":

- [ ] Read `AGENT_MEDIATOR.md` completely
- [ ] Checked `THEME_STATUS_REPORT.md` for current state
- [ ] Reviewed recent git commits
- [ ] Followed file type rules (HTML in templates, PHP in patterns)
- [ ] Used text domain `fl-coastal-prep` consistently
- [ ] Used theme.json design tokens (no hardcoded values)
- [ ] Tested changes don't break existing functionality
- [ ] Updated `THEME_STATUS_REPORT.md` with your changes
- [ ] Wrote clear commit message explaining WHY

---

## 🆘 Emergency Help

**Confused about rules?**
→ Read `AGENT_MEDIATOR.md` Section: "CRITICAL RULES — DO NOT VIOLATE"

**Don't know what's working?**
→ Read `THEME_STATUS_REPORT.md`

**Can't find a file?**
→ Read `docs/FILE_INVENTORY.md`

**Need to understand FSE?**
→ Read `docs/WORDPRESS_MIGRATION_GUIDE.md`

**Lost in documentation?**
→ Read `docs/DOCUMENTATION_MAP.md` (visual guide)

**Still confused?**
→ Read the actual code files — code is truth

---

## ⚡ TL;DR — Absolute Minimum

If you're in a hurry (you shouldn't be, but if you are):

1. **READ:** [`AGENT_MEDIATOR.md`](./AGENT_MEDIATOR.md) ← NOT OPTIONAL
2. **CHECK:** [`THEME_STATUS_REPORT.md`](./THEME_STATUS_REPORT.md)
3. **FOLLOW:** File type rules (HTML templates, PHP patterns)
4. **USE:** Text domain `fl-coastal-prep` always
5. **UPDATE:** `THEME_STATUS_REPORT.md` when done

**But seriously:** Read `AGENT_MEDIATOR.md` properly. It will save you from breaking things.

---

## 📌 Remember

> **"Preservation of working functionality is more important than pursuing 'perfect' architecture."**
> 
> — AGENT_MEDIATOR.md

- Don't break what works
- Coordinate with other agents (via documentation and git)
- Follow the rules in AGENT_MEDIATOR.md
- Test your changes
- Document what you did

---

**Time to complete this guide:** 2 minutes  
**Time to read AGENT_MEDIATOR.md:** 10 minutes  
**Time saved by reading both:** Hours (and preventing merge conflicts)

---

**Next Step:** Go read [`AGENT_MEDIATOR.md`](./AGENT_MEDIATOR.md) now! 🚀
