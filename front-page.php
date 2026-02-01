<?php
/**
 * Front Page Template - Works with Elementor
 * 
 * @package fl-coastal-prep
 */
if (!defined('ABSPATH'))
    exit;

get_header();
?>

<main id="primary" class="site-main">
    <?php
    while (have_posts()):
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php
            // This is the key function that Elementor hooks into
            the_content();
            ?>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
