<?php
/**
 * Main Index Template - Blog/Archive fallback
 * 
 * @package fl-coastal-prep
 */
if (!defined('ABSPATH'))
    exit;

get_header();
?>

<main id="primary" class="site-main" style="max-width:1200px;margin:0 auto;padding:4rem 2rem;">

    <?php if (is_home() && !is_front_page()): ?>
        <header class="page-header" style="text-align:center;margin-bottom:4rem;">
            <h1 class="page-title" style="font-family:'Bebas Neue',sans-serif;font-size:4rem;line-height:1;">
                <?php single_post_title(); ?>
            </h1>
        </header>
    <?php endif; ?>

    <?php if (have_posts()): ?>
        <div class="posts-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(350px,1fr));gap:2rem;">
            <?php
            while (have_posts()):
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>
                    style="background:var(--wp--preset--color--base);border-radius:8px;overflow:hidden;box-shadow:0 4px 20px
            rgba(0,0,0,0.1);">
                    <?php if (has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                            <?php the_post_thumbnail('medium_large', array('style' => 'width:100%;height:200px;object-fit:cover;')); ?>
                        </a>
                    <?php endif; ?>

                    <div class="post-content" style="padding:1.5rem;">
                        <h2 class="entry-title" style="font-family:'Oswald',sans-serif;font-size:1.5rem;margin:0 0 0.5rem;">
                            <a href="<?php the_permalink(); ?>"
                                style="color:var(--wp--preset--color--contrast);text-decoration:none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="entry-meta"
                            style="font-size:0.75rem;color:var(--wp--preset--color--contrast);opacity:0.6;margin-bottom:1rem;">
                            <?php echo get_the_date(); ?>
                        </div>
                        <div class="entry-excerpt"
                            style="font-size:0.875rem;line-height:1.6;color:var(--wp--preset--color--contrast);opacity:0.8;">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </article>
                <?php
            endwhile;
            ?>
        </div>

        <nav class="pagination" style="display:flex;justify-content:center;gap:1rem;margin-top:4rem;">
            <?php
            echo paginate_links(array(
                'prev_text' => '← Previous',
                'next_text' => 'Next →',
            ));
            ?>
        </nav>

    <?php else: ?>
        <div class="no-results" style="text-align:center;padding:4rem;">
            <h2>No posts found</h2>
            <p>Try searching for something else.</p>
        </div>
    <?php endif; ?>

</main>

<?php
get_footer();
