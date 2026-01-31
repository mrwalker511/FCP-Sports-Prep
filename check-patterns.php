<?php
// Temporary test script to identify block markup issues
require 'vendor/autoload.php';
require 'tests/utilities/TestHelpers.php';

$patterns = glob('patterns/*.php');
foreach ($patterns as $file) {
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
