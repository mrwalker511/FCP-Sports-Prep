<?php
/**
 * Test Helper Utilities
 */

namespace FCPTheme\Tests\Utilities;

class TestHelpers
{
    /**
     * Scan a PHP file for potential security issues
     *
     * @param string $file_path Path to the PHP file
     * @return array Array of potential issues found
     */
    public static function scanForSecurityIssues($file_path)
    {
        $issues = [];
        $content = file_get_contents($file_path);

        // Check for unescaped echo statements
        if (preg_match_all('/echo\s+\$[^;]+;/', $content, $matches)) {
            foreach ($matches[0] as $match) {
                // Check if it uses escaping functions
                if (!preg_match('/(esc_html|esc_attr|esc_url|wp_kses)/', $match)) {
                    $issues[] = [
                        'type' => 'unescaped_output',
                        'line' => $match,
                        'severity' => 'high'
                    ];
                }
            }
        }

        // Check for SQL queries (should use WordPress APIs)
        if (preg_match_all('/(SELECT|INSERT|UPDATE|DELETE)\s+.*FROM/i', $content, $matches)) {
            $issues[] = [
                'type' => 'raw_sql',
                'severity' => 'critical',
                'message' => 'Raw SQL queries detected. Use WordPress database APIs instead.'
            ];
        }

        // Check for $_GET, $_POST without sanitization
        if (preg_match_all('/\$_(GET|POST|REQUEST)\[/', $content, $matches)) {
            $issues[] = [
                'type' => 'unsanitized_input',
                'severity' => 'high',
                'message' => 'Direct superglobal access detected. Ensure proper sanitization.'
            ];
        }

        return $issues;
    }

    /**
     * Validate HTML markup
     *
     * @param string $html HTML content to validate
     * @return array Validation results
     */
    public static function validateHTML($html)
    {
        $errors = [];

        // Check for unclosed tags (basic check)
        $opening_tags = [];
        $closing_tags = [];

        preg_match_all('/<(\w+)[^>]*>/', $html, $opening_matches);
        preg_match_all('/<\/(\w+)>/', $html, $closing_matches);

        if (isset($opening_matches[1])) {
            $opening_tags = $opening_matches[1];
        }
        if (isset($closing_matches[1])) {
            $closing_tags = $closing_matches[1];
        }

        // Self-closing tags that don't need closing tags
        $self_closing = ['img', 'br', 'hr', 'input', 'meta', 'link'];

        foreach ($opening_tags as $tag) {
            if (!in_array($tag, $self_closing) && !in_array($tag, $closing_tags)) {
                $errors[] = "Potentially unclosed tag: <{$tag}>";
            }
        }

        return [
            'valid' => empty($errors),
            'errors' => $errors
        ];
    }

    /**
     * Check if WordPress function exists (for testing function availability)
     *
     * @param string $function_name Function name to check
     * @return bool
     */
    public static function wpFunctionExists($function_name)
    {
        return function_exists($function_name);
    }

    /**
     * Get all PHP files in a directory
     *
     * @param string $directory Directory path
     * @param bool $recursive Whether to search recursively
     * @return array Array of file paths
     */
    public static function getPHPFiles($directory, $recursive = true)
    {
        $files = [];

        if (!is_dir($directory)) {
            return $files;
        }

        $iterator = $recursive
            ? new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($directory))
            : new \DirectoryIterator($directory);

        foreach ($iterator as $file) {
            if ($file->isFile() && $file->getExtension() === 'php') {
                $files[] = $file->getPathname();
            }
        }

        return $files;
    }

    /**
     * Extract pattern metadata from pattern file
     *
     * @param string $file_path Path to pattern file
     * @return array Pattern metadata
     */
    public static function extractPatternMetadata($file_path)
    {
        $content = file_get_contents($file_path);
        $metadata = [];

        // Extract Title
        if (preg_match('/\*\s*Title:\s*(.+)$/m', $content, $matches)) {
            $metadata['title'] = trim($matches[1]);
        }

        // Extract Slug
        if (preg_match('/\*\s*Slug:\s*(.+)$/m', $content, $matches)) {
            $metadata['slug'] = trim($matches[1]);
        }

        // Extract Categories
        if (preg_match('/\*\s*Categories:\s*(.+)$/m', $content, $matches)) {
            $metadata['categories'] = array_map('trim', explode(',', $matches[1]));
        }

        return $metadata;
    }

    /**
     * Validate WordPress block markup
     *
     * @param string $content Block content
     * @return array Validation results
     */
    public static function validateBlockMarkup($content)
    {
        $errors = [];

        // Check for properly formatted block comments
        if (preg_match_all('/<!--\s*wp:(\S+)/', $content, $opening_blocks)) {
            foreach ($opening_blocks[1] as $block_type) {
                // Check if there's a corresponding closing comment
                $closing_pattern = '/<!--\s*\/wp:' . preg_quote($block_type, '/') . '\s*-->/';
                if (!preg_match($closing_pattern, $content)) {
                    $errors[] = "Unclosed block: wp:{$block_type}";
                }
            }
        }

        return [
            'valid' => empty($errors),
            'errors' => $errors
        ];
    }
}
