# Florida Coastal Prep — Documentation Index

## ⚠️ START HERE — For All AI Agents

**MANDATORY FIRST READ**: [`/AGENT_MEDIATOR.md`](../AGENT_MEDIATOR.md)

This is the **central coordination file** for all LLM agents working on this repository. It prevents conflicting changes and ensures consistency. **You MUST read it before reading any other documentation.**

📊 **Visual Guide**: See [`DOCUMENTATION_MAP.md`](./DOCUMENTATION_MAP.md) for a visual flowchart of how documentation files relate to each other.

---

## 📚 Documentation Organization

All documentation is organized into three categories:

1. **Coordination & Guidelines** (for AI agents)
2. **Technical Implementation** (for development)
3. **Quality Assurance** (for testing and validation)

---

## 1️⃣ Coordination & Guidelines

**Read these FIRST if you are an AI agent:**

| Document | Purpose | Location |
|----------|---------|----------|
| **AGENT_MEDIATOR.md** | ⚠️ **MANDATORY FIRST READ** - Central coordination file for all LLM agents (includes quick start) | `/AGENT_MEDIATOR.md` |
| **DOCUMENTATION_MAP.md** | 📊 Visual flowchart showing how all docs relate | `/docs/DOCUMENTATION_MAP.md` |
| **INDEX.md** | 📚 Complete documentation index (this file) | `/docs/INDEX.md` |
| **AGENTS.md** | Role-specific guidelines and permissions | `/AGENTS.md` |
| **README.md** | Repository overview and setup | `/README.md` |

---

## 2️⃣ Technical Implementation

**For understanding and modifying the theme:**

### Architecture & Design
| Document | Purpose | Location |
|----------|---------|----------|
| **ARCHITECT.md** | High-level architecture decisions | `/docs/ARCHITECT.md` |
| **DESIGN_SYSTEM.md** | Colors, typography, spacing tokens | `/docs/DESIGN_SYSTEM.md` |
| **WORDPRESS_MIGRATION_GUIDE.md** | Complete React → WordPress conversion guide | `/docs/WORDPRESS_MIGRATION_GUIDE.md` |

### File Structure
| Document | Purpose | Location |
|----------|---------|----------|
| **FILE_INVENTORY.md** | Complete listing of all files | `/docs/FILE_INVENTORY.md` |
| **PRODUCTION_FILE_LIST.md** | Files to include in production ZIP | `/docs/PRODUCTION_FILE_LIST.md` |

### Patterns & Components
| Document | Purpose | Location |
|----------|---------|----------|
| **PATTERN_VISUAL_REFERENCE.md** | Visual guide to all block patterns | `/docs/PATTERN_VISUAL_REFERENCE.md` |

### Content & Demo Data
| Document | Purpose | Location |
|----------|---------|----------|
| **DEMO_CONTENT.md** | Demo content setup and structure | `/docs/DEMO_CONTENT.md` |
| **USER_MANUAL.md** | End-user documentation | `/docs/USER_MANUAL.md` |

---

## 3️⃣ Quality Assurance

**For testing, validation, and understanding current status:**

### Current Status
| Document | Purpose | Location |
|----------|---------|----------|
| **THEME_STATUS_REPORT.md** | ✅ Current working state of theme | `/THEME_STATUS_REPORT.md` |
| **THEME_FIXES_SUMMARY.md** | Summary of completed fixes | `/THEME_FIXES_SUMMARY.md` |

### Audit Reports
| Document | Purpose | Location |
|----------|---------|----------|
| **THEME_AUDIT_REPORT.md** | Comprehensive audit findings | `/THEME_AUDIT_REPORT.md` |
| **VERIFICATION_REPORT.md** | Verification of fixes | `/VERIFICATION_REPORT.md` |
| **COMPREHENSIVE_REVIEW_REPORT.md** | Complete theme review | `/docs/COMPREHENSIVE_REVIEW_REPORT.md` |

### Detailed Findings
| Document | Focus Area | Location |
|----------|-----------|----------|
| **security-findings.md** | Security audit results | `/docs/security-findings.md` |
| **code-quality-findings.md** | Code quality and WordPress standards | `/docs/code-quality-findings.md` |
| **fse-compliance-findings.md** | FSE compliance validation | `/docs/fse-compliance-findings.md` |
| **performance-findings.md** | Performance optimization review | `/docs/performance-findings.md` |
| **functionality-findings.md** | Functionality verification | `/docs/functionality-findings.md` |

### Testing
| Document | Purpose | Location |
|----------|---------|----------|
| **tests/README.md** | Testing documentation and setup | `/tests/README.md` |

### Development Planning
| Document | Purpose | Location |
|----------|---------|----------|
| **plans/** | Historical development plans and reviews | `/docs/plans/` |

---

## 🎯 Quick Navigation by Task

### I need to...

**Understand the project structure**
→ Read: `/AGENT_MEDIATOR.md` → `/README.md` → `/docs/ARCHITECT.md`

**Create or modify a block pattern**
→ Read: `/AGENT_MEDIATOR.md` → `/docs/PATTERN_VISUAL_REFERENCE.md` → `/docs/DESIGN_SYSTEM.md`

**Fix a bug or issue**
→ Read: `/AGENT_MEDIATOR.md` → `/THEME_STATUS_REPORT.md` → Relevant findings doc

**Understand design tokens**
→ Read: `/AGENT_MEDIATOR.md` → `/docs/DESIGN_SYSTEM.md` → `theme.json`

**Work with custom post types**
→ Read: `/AGENT_MEDIATOR.md` → `/docs/WORDPRESS_MIGRATION_GUIDE.md` → `functions.php`

**Prepare for production**
→ Read: `/docs/PRODUCTION_FILE_LIST.md` → `/THEME_STATUS_REPORT.md`

**Add demo content**
→ Read: `/AGENT_MEDIATOR.md` → `/docs/DEMO_CONTENT.md`

**Run tests**
→ Read: `/tests/README.md`

---

## 🔄 Multi-Agent Workflow

If you are working on this repository as part of a series of LLM sessions:

1. ✅ **ALWAYS** read `/AGENT_MEDIATOR.md` first
2. ✅ Check `/THEME_STATUS_REPORT.md` for current state
3. ✅ Review recent git commits: `git log -5`
4. ✅ Read relevant technical docs for your task
5. ✅ Make changes following the rules in AGENT_MEDIATOR.md
6. ✅ Update `/THEME_STATUS_REPORT.md` with what you accomplished
7. ✅ Use clear commit messages explaining WHY changes were made

---

## 📝 Documentation Maintenance

### When to Update Documentation

- **AGENT_MEDIATOR.md**: When discovering new coordination needs or critical rules
- **THEME_STATUS_REPORT.md**: After completing any task or fix
- **Status/Audit Reports**: After major changes or fixes
- **Technical Docs**: When architecture or patterns change
- **This INDEX.md**: When adding new documentation files

### Documentation Standards

- Use clear headings and table of contents
- Include "For AI Agents" warnings at the top
- Reference AGENT_MEDIATOR.md for coordination
- Use emoji for visual scanning (⚠️ ✅ 🔴 🟠 🟡)
- Keep paths relative and accurate
- Date significant updates

---

## 🆘 Need Help?

**Confused about file organization?** → `/docs/FILE_INVENTORY.md`  
**Don't understand FSE structure?** → `/docs/WORDPRESS_MIGRATION_GUIDE.md`  
**Need to know what works?** → `/THEME_STATUS_REPORT.md`  
**Finding conflicts?** → `/AGENT_MEDIATOR.md` (conflict resolution section)  
**Everything else?** → Start with `/AGENT_MEDIATOR.md`

---

**Last Updated**: 2026-02-03  
**Maintained By**: AI Agent Coordination System
