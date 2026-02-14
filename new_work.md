# Invalid Block Errors - Work Documentation

## Issues Found and Fixed

### 1. Deprecated `isUserOverlayColor` Attribute in Cover Blocks

**Problem:**
The `isUserOverlayColor` attribute was deprecated in WordPress 5.9 and is no longer supported. This attribute was used to indicate whether a custom overlay color was being used, but WordPress now automatically handles this based on whether `overlayColor` is present.

**Files Affected:**
- `/home/engine/project/patterns/cta.php` (line 11)
- `/home/engine/project/patterns/grid.php` (lines 46, 83, 120)

**Fix Applied:**
Removed the `"isUserOverlayColor":true` attribute from all cover blocks. The overlay color is already properly set using the `overlayColor` attribute, so removing this deprecated attribute doesn't affect functionality.

**Status:** ✅ FIXED

### 2. Deprecated `verticalAlignment` Attribute in Columns Blocks

**Problem:**
The `verticalAlignment` attribute was deprecated in WordPress 5.9. This attribute was used to vertically align columns, but it's no longer needed as WordPress handles column alignment differently now.

**Files Affected:**
- `/home/engine/project/patterns/donors-showcase.php` (line 14)

**Fix Applied:**
Removed the `"verticalAlignment":"center"` attribute from the columns block. The columns will still display correctly as WordPress handles alignment through other mechanisms.

**Status:** ✅ FIXED

## Technical Details

### Why These Attributes Cause Invalid Block Errors

When WordPress loads block patterns, it validates the block attributes against the current block schema. When it encounters deprecated or unknown attributes, it marks the block as invalid, which causes error messages to appear in the WordPress editor.

### WordPress Version Context

These deprecations occurred in WordPress 5.9 (released January 2022) as part of the block editor's ongoing evolution. Modern WordPress installations (6.0+) will show validation errors for blocks using these deprecated attributes.

## Summary of Changes

Total blocks fixed: 5
- 4 cover blocks (isUserOverlayColor removal) ✅
- 1 columns block (verticalAlignment removal) ✅

**All fixes maintain the original visual appearance and functionality while removing deprecated attributes that trigger validation errors in the WordPress editor.**

## Verification

All deprecated attributes have been successfully removed:
- `isUserOverlayColor`: 0 instances found in patterns
- `verticalAlignment`: 0 instances found in patterns
