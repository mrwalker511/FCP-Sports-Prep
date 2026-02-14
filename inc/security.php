<?php
/**
 * Security headers and hardening.
 *
 * @package Fl_Coastal_Prep
 * @since   1.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add security headers including Content Security Policy.
 *
 * The CSP allows only the theme's own assets, WordPress core resources,
 * and inline styles required by the block editor. Extend the directives
 * below if you add external services (analytics, CDN, etc.).
 *
 * @param array $headers Existing HTTP headers.
 * @return array Modified headers.
 */
function fl_coastal_prep_security_headers( $headers ) {
    $theme_uri = get_template_directory_uri();
    $site_url  = site_url();

    $csp_directives = array(
        "default-src 'self'",
        "script-src 'self' 'unsafe-inline' 'unsafe-eval'",
        "style-src 'self' 'unsafe-inline'",
        "img-src 'self' data: https:",
        "font-src 'self' data:",
        "connect-src 'self'",
        "frame-src 'self'",
        "form-action 'self'",
        "object-src 'none'",
        "base-uri 'self'",
    );

    $headers['Content-Security-Policy']   = implode( '; ', $csp_directives );
    $headers['X-Content-Type-Options']    = 'nosniff';
    $headers['X-Frame-Options']           = 'SAMEORIGIN';
    $headers['Referrer-Policy']           = 'strict-origin-when-cross-origin';
    $headers['Permissions-Policy']        = 'camera=(), microphone=(), geolocation=()';

    return $headers;
}
add_filter( 'wp_headers', 'fl_coastal_prep_security_headers' );
