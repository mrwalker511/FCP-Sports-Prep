<?php
// Temporary test script to identify block markup issues in templates
require 'vendor/autoload.php';
require 'tests/utilities/TestHelpers.php';

$templates = glob('templates/*.html');
foreach ($templates as $file) {
    $content = file_get_contents($file);
    $result = FCPTheme\Tests\Utilities\TestHelpers::validateBlockMarkup($content);
    if (!$result['valid']) {
        echo "FAIL: " . basename($file) . "\n";
        foreach ($result['errors'] as $error) {
            echo "  - " . $error . "\n";
        }
    }
}
echo "Done\n";
