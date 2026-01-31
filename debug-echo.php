<?php
// Debug script to find unescaped echo statements
$content = file_get_contents('functions.php');
preg_match_all('/echo\s+[\'\"]?.*?;/s', $content, $matches);

echo "Found " . count($matches[0]) . " echo statements\n\n";

foreach ($matches[0] as $i => $echo) {
    echo "$i. " . substr($echo, 0, 80) . "...\n";

    // Skip literal strings
    if (preg_match('/echo\s+[\'\"][^\$]*[\'\"];/', $echo)) {
        echo "   [SKIP: literal string]\n\n";
        continue;
    }

    // Check for escaping
    if (preg_match('/(esc_html|esc_attr|esc_url|esc_js|wp_kses|json_encode)/', $echo)) {
        echo "   [OK: has escaping]\n\n";
    } else {
        echo "   [FAIL: no escaping found]\n";
        echo "   Full statement: $echo\n\n";
    }
}
echo "Done\n";
