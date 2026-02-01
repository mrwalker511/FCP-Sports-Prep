<?php
/**
 * Footer Template
 * 
 * @package fl-coastal-prep
 */
if (!defined('ABSPATH'))
    exit;
?>

<footer class="site-footer" style="background-color:var(--wp--preset--color--contrast);padding:6rem 2rem 3rem;">
    <div class="footer-inner" style="max-width:1200px;margin:0 auto;">

        <!-- Footer Columns -->
        <div class="footer-columns" style="display:flex;flex-wrap:wrap;gap:2rem;margin-bottom:6rem;">

            <!-- Brand Column -->
            <div class="footer-col" style="flex:2;min-width:300px;">
                <p
                    style="font-family:'Bebas Neue',sans-serif;font-size:2.25rem;font-weight:400;line-height:1;color:var(--wp--preset--color--base);margin:0 0 1rem;">
                    FLORIDA <span
                        style="color:var(--wp--preset--color--primary);font-style:italic;text-decoration:underline;">COASTAL</span>
                    PREP
                </p>
                <p
                    style="font-size:1.125rem;font-style:italic;font-weight:300;line-height:1.75;color:var(--wp--preset--color--base);opacity:0.8;">
                    The southeast region's most exclusive training environment for elite collegiate prospects.
                </p>
            </div>

            <!-- Sitemap Column -->
            <div class="footer-col" style="flex:1;min-width:150px;">
                <h4
                    style="font-size:0.625rem;font-weight:700;letter-spacing:0.3em;text-transform:uppercase;color:var(--wp--preset--color--base);opacity:0.5;margin:0 0 1rem;">
                    Sitemaps
                </h4>
                <nav class="footer-navigation"
                    style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'footer-menu',
                        'fallback_cb' => false,
                    ));
                    ?>
                </nav>
            </div>

            <!-- Headquarters Column -->
            <div class="footer-col" style="flex:1;min-width:150px;">
                <h4
                    style="font-size:0.625rem;font-weight:700;letter-spacing:0.3em;text-transform:uppercase;color:var(--wp--preset--color--base);opacity:0.5;margin:0 0 1rem;">
                    Headquarters
                </h4>
                <p style="font-size:0.875rem;line-height:1.75;color:var(--wp--preset--color--base);opacity:0.8;">
                    100 Coastal Elite Dr.<br>
                    Miami, FL 33101<br>
                    <a href="mailto:info@flcprep.com"
                        style="color:var(--wp--preset--color--primary);">info@flcprep.com</a>
                </p>
            </div>

        </div>

        <!-- Footer Bottom -->
        <hr style="border:none;border-top:1px solid var(--wp--preset--color--base);opacity:0.1;margin:0 0 2rem;">

        <div class="footer-bottom"
            style="display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;gap:1rem;">
            <p
                style="font-size:0.625rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:var(--wp--preset--color--base);opacity:0.5;margin:0;">
                ©
                <?php echo date('Y'); ?> Florida Coastal Preparatory. Built for Elite Athletes.
            </p>
            <nav class="footer-legal-nav"
                style="font-size:0.625rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container' => false,
                    'menu_class' => 'legal-menu',
                    'fallback_cb' => false,
                ));
                ?>
            </nav>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>