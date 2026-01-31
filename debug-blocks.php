<?php
// Debug script to trace block validation
require 'vendor/autoload.php';

$content = file_get_contents('patterns/faculty-grid.php');

$pattern = '/<!--\s*(\/?)wp:([^\s\/>]+)(?:\s+[^>]*)?\s*(\/?)-->/s';
preg_match_all($pattern, $content, $all_blocks, PREG_SET_ORDER);

echo "Found " . count($all_blocks) . " blocks:\n\n";

$open_blocks = [];
foreach ($all_blocks as $i => $block) {
    $is_closing = !empty($block[1]);
    $block_type = $block[2];
    $is_self_closing = !empty($block[3]);

    $status = $is_closing ? "CLOSING" : ($is_self_closing ? "SELF-CLOSE" : "OPENING");
    echo "$i. [$status] wp:$block_type\n";
    echo "   Full: " . substr($block[0], 0, 60) . "...\n";

    if ($is_self_closing) {
        continue;
    }
    if ($is_closing) {
        if (empty($open_blocks) || end($open_blocks) !== $block_type) {
            echo "   *** ERROR: Closing without matching open ***\n";
        } else {
            array_pop($open_blocks);
        }
    } else {
        $open_blocks[] = $block_type;
    }
}

echo "\nRemaining open blocks: " . implode(', ', $open_blocks) . "\n";
