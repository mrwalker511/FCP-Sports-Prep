<?php
/**
 * Single Post Template - Works with Elementor
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
            <header class="entry-header" style="max-width:800px;margin:4rem auto 2rem;padding:0 2rem;">
                <?php if (has_post_thumbnail()): ?>
                    <div class="post-thumbnail" style="margin-bottom:2rem;">
                        <?php the_post_thumbnail('large', array('style' => 'width:100%;height:auto;')); ?>
                    </div>
                <?php endif; ?>

                <h1 class="entry-title"
                    style="font-family:'Oswald',sans-serif;font-size:3rem;line-height:1.2;margin:0 0 1rem;">
                    <?php the_title(); ?>
                </h1>

                <div class="entry-meta" style="font-size:0.875rem;color:var(--wp--preset--color--contrast);opacity:0.7;">
                    <?php echo get_the_date(); ?> •
                    <?php the_author(); ?>
                </div>
            </header>

            <div class="entry-content" style="max-width:800px;margin:0 auto;padding:0 2rem 4rem;">
                <?php
                // This is the key function that Elementor hooks into
                the_content();
                ?>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
