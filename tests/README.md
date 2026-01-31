# Florida Coastal Prep Theme - Test Suite

Comprehensive security and debugging test suite for the FCP-Sports-Prep WordPress Block Theme.

## Overview

This test suite provides automated testing for:

- **Security**: XSS prevention, SQL injection, CSRF protection, input sanitization
- **Debugging**: WordPress function availability, theme setup validation, error prevention
- **Pattern Validation**: Block pattern integrity and WordPress compliance
- **Template Validation**: Template file structure and registration
- **Code Quality**: WordPress coding standards and best practices

## Requirements

- PHP 7.4 or higher
- Composer
- WordPress Test Library (optional, for full WordPress integration tests)

## Installation

### 1. Install Composer Dependencies

```bash
composer install
```

This will install:
- PHPUnit 9.6
- WordPress PHPUnit Polyfills
- WordPress Test Library

### 2. (Optional) Set Up WordPress Test Environment

For full WordPress integration tests, you need to set up the WordPress test suite:

```bash
# Install WordPress test suite
bash bin/install-wp-tests.sh wordpress_test root '' localhost latest
```

Or set the `WP_TESTS_DIR` environment variable to point to your WordPress test installation:

```bash
export WP_TESTS_DIR=/path/to/wordpress-tests-lib
```

**Note**: If WordPress test suite is not available, many tests will still run but some will be skipped.

## Running Tests

### Run All Tests

```bash
composer test
```

Or directly with PHPUnit:

```bash
./vendor/bin/phpunit
```

### Run Specific Test Suites

**Security Tests Only:**
```bash
composer test:security
# or
./vendor/bin/phpunit tests/security
```

**Debugging Tests Only:**
```bash
composer test:debugging
# or
./vendor/bin/phpunit tests/debugging
```

**Pattern Validation Only:**
```bash
composer test:patterns
# or
./vendor/bin/phpunit tests/patterns
```

**Template Validation Only:**
```bash
./vendor/bin/phpunit tests/templates
```

**Code Quality Tests Only:**
```bash
./vendor/bin/phpunit tests/code-quality
```

### Run Individual Test Files

```bash
./vendor/bin/phpunit tests/security/SecurityTest.php
./vendor/bin/phpunit tests/debugging/FunctionAvailabilityTest.php
```

### Generate Code Coverage Report

```bash
composer test:coverage
# or
./vendor/bin/phpunit --coverage-html coverage-report
```

Then open `coverage-report/index.html` in your browser.

## Test Suite Structure

```
tests/
├── bootstrap.php                          # Test environment setup
├── utilities/
│   └── TestHelpers.php                    # Helper functions for tests
├── security/
│   ├── SecurityTest.php                   # Main security tests
│   └── OutputEscapingTest.php             # Output escaping validation
├── debugging/
│   ├── FunctionAvailabilityTest.php       # WordPress function availability
│   ├── ThemeSetupTest.php                 # Theme initialization tests
│   └── CustomPostTypeTest.php             # CPT registration tests
├── patterns/
│   └── PatternValidationTest.php          # Block pattern validation
├── templates/
│   └── TemplateValidationTest.php         # Template file validation
└── code-quality/
    └── ThemeStandardsTest.php             # WordPress standards compliance
```

## What Each Test Suite Covers

### Security Tests

**SecurityTest.php:**
- ✅ No raw SQL queries (prevents SQL injection)
- ✅ Proper output escaping (prevents XSS)
- ✅ SEO meta function escaping
- ✅ Schema markup JSON encoding
- ✅ No unsanitized superglobals ($_GET, $_POST)
- ✅ No dangerous functions (eval, exec, system)
- ✅ Secure file upload handling
- ✅ Nonce usage for forms
- ✅ User capability checks
- ✅ No sensitive information exposure

**OutputEscapingTest.php:**
- ✅ Pattern files escape dynamic content
- ✅ Meta tags properly escaped
- ✅ URLs escaped with esc_url()
- ✅ HTML content uses esc_html()/esc_attr()
- ✅ Automated security scanning

### Debugging Tests

**FunctionAvailabilityTest.php:**
- ✅ WordPress core functions exist
- ✅ Conditional tags available
- ✅ Internationalization functions available
- ✅ Escaping functions available
- ✅ Post/page functions available
- ✅ Custom post type functions available
- ✅ Enqueue functions available

**ThemeSetupTest.php:**
- ✅ Theme setup function exists and is hooked
- ✅ CPT registration hooked correctly
- ✅ Scripts enqueue hooked correctly
- ✅ SEO meta hooked correctly
- ✅ Schema markup hooked correctly
- ✅ functions.php has no syntax errors
- ✅ theme.json is valid JSON
- ✅ ABSPATH check exists
- ✅ Function naming conventions followed

**CustomPostTypeTest.php:**
- ✅ Faculty CPT registered with correct settings
- ✅ Program CPT registered with correct settings
- ✅ Schedule CPT registered with correct settings
- ✅ CPTs support required features
- ✅ CPT labels properly set

### Pattern Validation Tests

**PatternValidationTest.php:**
- ✅ All pattern files have valid PHP syntax
- ✅ Patterns have required metadata (Title, Slug, Categories)
- ✅ Pattern slugs follow naming convention
- ✅ Valid WordPress block markup
- ✅ No deprecated blocks used
- ✅ Valid HTML structure
- ✅ Filename matches slug
- ✅ Minimal inline styles (prefer theme.json)
- ✅ All expected patterns exist

### Template Validation Tests

**TemplateValidationTest.php:**
- ✅ Required templates exist (index, front-page, single, 404)
- ✅ Valid HTML structure
- ✅ Valid WordPress block markup
- ✅ Template parts referenced correctly
- ✅ Archive templates for CPTs exist
- ✅ Page templates exist
- ✅ No deprecated blocks
- ✅ Elementor templates exist
- ✅ Templates registered in theme.json
- ✅ Template parts registered in theme.json

### Code Quality Tests

**ThemeStandardsTest.php:**
- ✅ Required theme files exist
- ✅ style.css has required headers
- ✅ theme.json has correct version
- ✅ Color palette defined
- ✅ Typography settings defined
- ✅ PHP files documented
- ✅ No PHP short tags
- ✅ Screenshot exists
- ✅ readme.txt has required content
- ✅ Template parts exist
- ✅ No unwanted files

## Interpreting Test Results

### Successful Test Run

```
PHPUnit 9.6.x by Sebastian Bergmann and contributors.

...............................................................  63 / 100 ( 63%)
.......................................                         100 / 100 (100%)

Time: 00:02.345, Memory: 10.00 MB

OK (100 tests, 250 assertions)
```

### Failed Test

```
F

Time: 00:01.234, Memory: 8.00 MB

There was 1 failure:

1) FCPTheme\Tests\Security\SecurityTest::test_output_escaping_in_functions
Echo statement without proper escaping found: echo $variable;

FAILURES!
Tests: 100, Assertions: 249, Failures: 1.
```

### Warnings

Some tests may produce warnings rather than failures. These are informational and should be reviewed:

```
OK, but incomplete, skipped, or risky tests!
Tests: 100, Assertions: 250, Warnings: 2.
```

## Adding New Tests

### 1. Create a New Test File

```php
<?php
namespace FCPTheme\Tests\YourCategory;

use PHPUnit\Framework\TestCase;

class YourTest extends TestCase
{
    public function test_your_feature()
    {
        $this->assertTrue(true, 'Your test description');
    }
}
```

### 2. Add to Appropriate Directory

Place your test file in the relevant directory:
- `tests/security/` for security tests
- `tests/debugging/` for debugging tests
- `tests/patterns/` for pattern tests
- `tests/templates/` for template tests
- `tests/code-quality/` for code quality tests

### 3. Run Your New Test

```bash
./vendor/bin/phpunit tests/your-category/YourTest.php
```

## Continuous Integration

### GitHub Actions Example

Create `.github/workflows/tests.yml`:

```yaml
name: Tests

on: [push, pull_request]

jobs:
  test:
    runs-on: ubuntu-latest
    
    steps:
    - uses: actions/checkout@v2
    
    - name: Setup PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: '7.4'
        
    - name: Install dependencies
      run: composer install
      
    - name: Run tests
      run: composer test
```

## Troubleshooting

### "WordPress test suite not found"

Many tests will be skipped if WordPress test suite is not installed. To fix:

1. Install WordPress test suite (see Installation section)
2. Or set `WP_TESTS_DIR` environment variable
3. Or run only non-WordPress tests

### "Class not found" errors

Run `composer install` to ensure all dependencies are installed.

### "Permission denied" errors on Windows

Run PowerShell as Administrator or adjust file permissions.

## Best Practices

1. **Run tests before committing**: Always run the full test suite before committing changes
2. **Fix failures immediately**: Don't commit code with failing tests
3. **Review warnings**: Warnings indicate potential issues that should be addressed
4. **Keep tests updated**: Add new tests when adding new features
5. **Use descriptive test names**: Test method names should clearly describe what they test

## Resources

- [PHPUnit Documentation](https://phpunit.de/documentation.html)
- [WordPress Plugin Handbook - Testing](https://developer.wordpress.org/plugins/testing/)
- [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/)

## Support

For issues or questions about the test suite, please refer to the main theme documentation or contact the development team.
