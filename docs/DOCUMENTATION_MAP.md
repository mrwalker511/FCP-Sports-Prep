# Documentation Map — Visual Guide

This visual guide shows the relationship between all documentation files and when to read each one.

---

## 🗺️ Documentation Flow for AI Agents

```
┌─────────────────────────────────────────────────────────────┐
│                    🚨 START HERE 🚨                          │
│                                                              │
│              ┌────────────────────────┐                      │
│              │  AGENT_MEDIATOR.md     │                      │
│              │  (MANDATORY FIRST)     │                      │
│              │  (includes quick start)│                      │
│              └──────────┬─────────────┘                      │
│                         │                                    │
│         ┌───────────────┼───────────────┐                    │
│         ▼               ▼               ▼                    │
│   ┌─────────┐    ┌──────────┐   ┌─────────────┐            │
│   │AGENTS.md│    │README.md │   │THEME_STATUS │            │
│   │(Roles)  │    │(Overview)│   │_REPORT.md   │            │
│   └─────────┘    └──────────┘   └─────────────┘            │
│                                                              │
└─────────────────────────────────────────────────────────────┘
```

---

## 📋 Documentation Layers

### Layer 1: COORDINATION (Read First)
These files ensure all LLM agents work together without conflicts.

```
┌────────────────────────────────────────────────┐
│ AGENT_MEDIATOR.md                             │  ← 🚨 START HERE
│ • Central coordination file                    │
│ • Critical rules and architecture              │
│ • Multi-agent conflict prevention              │
│ • Quick start guide (now included)            │
├────────────────────────────────────────────────┤
│ AGENTS.md                                      │
│ • Role-specific guidelines                     │
│ • Permissions and constraints                  │
├────────────────────────────────────────────────┤
│ README.md                                      │
│ • Project overview                             │
│ • Repository structure                         │
└────────────────────────────────────────────────┘
```

### Layer 2: CURRENT STATE (Check Before Changes)
These files tell you what's working and what needs attention.

```
┌────────────────────────────────────────────────┐
│ THEME_STATUS_REPORT.md                         │  ← Current working state
│ • What works                                   │
│ • Recent changes                               │
│ • Known issues                                 │
├────────────────────────────────────────────────┤
│ THEME_FIXES_SUMMARY.md                         │
│ • Completed fixes                              │
│ • Historical changes                           │
└────────────────────────────────────────────────┘
```

### Layer 3: TECHNICAL REFERENCE (Implementation Details)
Read these when you need to understand HOW to implement something.

```
docs/
├── ARCHITECT.md                    ← Architecture decisions
├── DESIGN_SYSTEM.md                ← Design tokens (colors, fonts, spacing)
├── WORDPRESS_MIGRATION_GUIDE.md    ← React → WordPress conversion
├── FILE_INVENTORY.md               ← All files in the project
├── PRODUCTION_FILE_LIST.md         ← Files for production ZIP
├── PATTERN_VISUAL_REFERENCE.md     ← Visual guide to patterns
├── DEMO_CONTENT.md                 ← Demo content setup
└── USER_MANUAL.md                  ← End-user documentation
```

### Layer 4: QUALITY ASSURANCE (Validation & Testing)
Read these to understand quality issues and test results.

```
Root Level Audits:
├── THEME_AUDIT_REPORT.md           ← Comprehensive audit
├── VERIFICATION_REPORT.md          ← Fix verification
└── docs/COMPREHENSIVE_REVIEW_REPORT.md

Detailed Findings:
docs/
├── security-findings.md            ← Security audit
├── code-quality-findings.md        ← Code quality review
├── fse-compliance-findings.md      ← FSE validation
├── performance-findings.md         ← Performance review
└── functionality-findings.md       ← Functionality check

Testing:
tests/
└── README.md                       ← Test suite documentation
```

---

## 🎯 Task-Based Reading Paths

### Task: Create a New Block Pattern

```
1. AGENT_MEDIATOR.md (Quick Start + Section: Block Pattern Registration)
      ↓
2. DESIGN_SYSTEM.md (Design tokens)
      ↓
3. PATTERN_VISUAL_REFERENCE.md (Pattern examples)
      ↓
4. FILE_INVENTORY.md (Check existing patterns)
      ↓
5. Create pattern file in /patterns/
      ↓
6. Update THEME_STATUS_REPORT.md (Document completion)
```

### Task: Fix a Bug or Issue

```
1. AGENT_MEDIATOR.md (Rules and constraints)
      ↓
2. THEME_STATUS_REPORT.md (Current state)
      ↓
3. THEME_AUDIT_REPORT.md or relevant findings file
      ↓
4. Review actual code files
      ↓
5. Make fixes following AGENT_MEDIATOR rules
      ↓
6. Update THEME_STATUS_REPORT.md and commit
```

### Task: Modify theme.json (Design Tokens)

```
1. AGENT_MEDIATOR.md (Section: Design Tokens — theme.json First)
      ↓
2. DESIGN_SYSTEM.md (Understand current tokens)
      ↓
3. Read current theme.json
      ↓
4. Check patterns/templates using affected tokens
      ↓
5. Make changes preserving existing tokens
      ↓
6. Update THEME_STATUS_REPORT.md
```

### Task: Work with Custom Post Types

```
1. AGENT_MEDIATOR.md (Section: Custom Post Types)
      ↓
2. WORDPRESS_MIGRATION_GUIDE.md (CPT structure)
      ↓
3. functions.php (Review current CPTs)
      ↓
4. Check templates/patterns referencing CPTs
      ↓
5. Make changes
      ↓
6. Update THEME_STATUS_REPORT.md
```

### Task: Understand Project Structure

```
1. AGENT_MEDIATOR.md (Architecture overview)
      ↓
2. README.md (Folder layout)
      ↓
3. ARCHITECT.md (Design decisions)
      ↓
4. FILE_INVENTORY.md (Detailed file list)
      ↓
5. PRODUCTION_FILE_LIST.md (Production files only)
```

---

## 🔄 Multi-Session Workflow

### First Session as New Agent

```
START
  │
  ├─► Read AGENT_MEDIATOR.md (MANDATORY)
  │
  ├─► Read README.md (orientation)
  │
  ├─► Check THEME_STATUS_REPORT.md (current state)
  │
  ├─► Review git log: git log -5 (recent changes)
  │
  ├─► Read task-specific technical docs
  │
  ├─► Make changes following rules
  │
  └─► Update THEME_STATUS_REPORT.md + commit
```

### Continuing Session (Same Agent)

```
START
  │
  ├─► Quick review AGENT_MEDIATOR.md (refresh rules)
  │
  ├─► Check THEME_STATUS_REPORT.md (any new changes?)
  │
  ├─► Continue work
  │
  └─► Update status + commit
```

### Different Agent Taking Over

```
START
  │
  ├─► Read AGENT_MEDIATOR.md (MANDATORY)
  │
  ├─► Check THEME_STATUS_REPORT.md (what was done)
  │
  ├─► Review recent commits: git log -10
  │
  ├─► Read git diff HEAD~1 (understand last changes)
  │
  ├─► DO NOT undo previous work without good reason
  │
  ├─► Make your changes following coordination rules
  │
  └─► Update THEME_STATUS_REPORT.md with your work
```

---

## 📊 Documentation Hierarchy

```
                    AGENT_MEDIATOR.md
                           │
                           │ (defines)
                           ▼
           ┌───────────────┴───────────────┐
           │                               │
           ▼                               ▼
    COORDINATION                    IMPLEMENTATION
    • AGENTS.md                     • docs/ARCHITECT.md
    • README.md                     • docs/DESIGN_SYSTEM.md
    • THEME_STATUS_REPORT.md        • docs/WORDPRESS_MIGRATION_GUIDE.md
    • THEME_FIXES_SUMMARY.md        • docs/PATTERN_VISUAL_REFERENCE.md
           │                               │
           │                               │
           └───────────┬───────────────────┘
                       │
                       ▼
                 VALIDATION
                 • THEME_AUDIT_REPORT.md
                 • VERIFICATION_REPORT.md
                 • docs/*-findings.md
```

---

## 🚦 Priority Levels

### 🔴 CRITICAL — Must Read Before ANY Changes
- `AGENT_MEDIATOR.md`

### 🟠 HIGH — Read Before Making Changes
- `THEME_STATUS_REPORT.md`
- `AGENTS.md`
- Task-specific technical docs

### 🟡 MEDIUM — Read When Needed
- Audit and findings reports
- File inventories
- Pattern references

### 🟢 LOW — Reference Only
- Historical plans
- User manual
- Demo content (unless working on demo content)

---

## 🔍 Quick Reference

| I need to... | Read this file(s) |
|--------------|-------------------|
| Start working on this repo | `AGENT_MEDIATOR.md` (includes quick start) → `THEME_STATUS_REPORT.md` |
| Understand file structure | `AGENT_MEDIATOR.md` (Quick Start) → `FILE_INVENTORY.md` |
| Create a pattern | `AGENT_MEDIATOR.md` (Quick Start) → `DESIGN_SYSTEM.md` → `PATTERN_VISUAL_REFERENCE.md` |
| Modify theme.json | `AGENT_MEDIATOR.md` (Quick Start) → `DESIGN_SYSTEM.md` → `theme.json` |
| Fix a bug | `AGENT_MEDIATOR.md` (Quick Start) → `THEME_STATUS_REPORT.md` → relevant findings |
| Work with CPTs | `AGENT_MEDIATOR.md` (Quick Start) → `WORDPRESS_MIGRATION_GUIDE.md` → `functions.php` |
| Prepare production ZIP | `PRODUCTION_FILE_LIST.md` |
| Understand what's working | `THEME_STATUS_REPORT.md` |
| Find all docs | `docs/INDEX.md` |

---

## 🆘 Lost or Confused?

1. **Always start with** [`AGENT_MEDIATOR.md`](../AGENT_MEDIATOR.md)
2. **Check current state** in [`THEME_STATUS_REPORT.md`](../THEME_STATUS_REPORT.md)
3. **Find all docs** in [`docs/INDEX.md`](./INDEX.md)
4. **Look at the code** — documentation might be outdated, code is truth

---

**Last Updated**: 2026-02-03  
**Purpose**: Visual guide to documentation navigation
