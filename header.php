<?php
/**
 * Header Template
 * 
 * @package fl-coastal-prep
 */
if (!defined('ABSPATH'))
    exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header"
        style="position:sticky;top:0;z-index:1000;background-color:var(--wp--preset--color--contrast);padding:1.5rem 2rem;">
        <div class="header-inner"
            style="display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center;max-width:1200px;margin:0 auto;">

            <!-- Site Title -->
            <div class="site-branding">
                <p class="site-title"
                    style="font-family:'Bebas Neue',sans-serif;font-size:2rem;font-weight:400;line-height:1;color:var(--wp--preset--color--base);margin:0;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" style="text-decoration:none;color:inherit;">
                        FLORIDA COASTAL <span
                            style="color:var(--wp--preset--color--primary);font-style:italic;">PREP</span>
                    </a>
                </p>
            </div>

            <!-- Primary Navigation -->
            <nav class="primary-navigation"
                style="font-size:0.675rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => false,
                ));
                ?>
            </nav>

            <!-- CTA Button -->
            <div class="header-cta">
                <a href="<?php echo esc_url(home_url('/apply')); ?>" class="btn-primary"
                    style="display:inline-block;background-color:var(--wp--preset--color--primary);color:var(--wp--preset--color--secondary);font-size:0.675rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;padding:0.75rem 2rem;text-decoration:none;">
                    Apply Now
                </a>
            </div>

        </div>
    </header>