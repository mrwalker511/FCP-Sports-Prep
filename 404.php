<?php
/**
 * 404 Error Page Template
 * 
 * @package fl-coastal-prep
 */
if (!defined('ABSPATH'))
    exit;

get_header();
?>

<main id="primary" class="site-main" style="max-width:800px;margin:0 auto;padding:8rem 2rem;text-align:center;">

    <h1
        style="font-family:'Bebas Neue',sans-serif;font-size:8rem;line-height:1;color:var(--wp--preset--color--primary);margin:0;">
        404
    </h1>

    <h2 style="font-family:'Oswald',sans-serif;font-size:2rem;margin:1rem 0 2rem;">
        Page Not Found
    </h2>

    <p style="font-size:1.125rem;color:var(--wp--preset--color--contrast);opacity:0.7;margin-bottom:3rem;">
        The page you're looking for doesn't exist or has been moved.
    </p>

    <a href="<?php echo esc_url(home_url('/')); ?>"
        style="display:inline-block;background:var(--wp--preset--color--primary);color:var(--wp--preset--color--secondary);font-size:0.875rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;padding:1rem 2.5rem;text-decoration:none;">
        Return Home
    </a>

</main>

<?php
get_footer();
