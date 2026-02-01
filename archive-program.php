<?php
/**
 * Program Archive Template
 * 
 * @package fl-coastal-prep
 */
if (!defined('ABSPATH'))
    exit;

get_header();
?>

<main id="primary" class="site-main" style="max-width:1200px;margin:0 auto;padding:4rem 2rem;">

    <header class="archive-header" style="text-align:center;margin-bottom:4rem;">
        <h1 class="archive-title"
            style="font-family:'Bebas Neue',sans-serif;font-size:4rem;line-height:1;margin:0 0 1rem;">
            Our Programs
        </h1>
        <p style="font-size:1.125rem;color:var(--wp--preset--color--contrast);opacity:0.7;">
            Elite training programs for the next generation of athletes
        </p>
    </header>

    <?php if (have_posts()): ?>
        <div class="programs-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(350px,1fr));gap:2rem;">
            <?php
            while (have_posts()):
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('program-card'); ?>
                    style="background:var(--wp--preset--color--secondary);border-radius:8px;overflow:hidden;box-shadow:0 4px
            20px rgba(0,0,0,0.2);">
                    <?php if (has_post_thumbnail()): ?>
                        <div class="program-image">
                            <?php the_post_thumbnail('large', array('style' => 'width:100%;height:250px;object-fit:cover;')); ?>
                        </div>
                    <?php endif; ?>

                    <div class="program-info" style="padding:2rem;">
                        <h2 class="program-name"
                            style="font-family:'Oswald',sans-serif;font-size:1.75rem;margin:0 0 1rem;color:var(--wp--preset--color--base);">
                            <a href="<?php the_permalink(); ?>"
                                style="color:var(--wp--preset--color--base);text-decoration:none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div class="program-excerpt"
                            style="font-size:0.875rem;line-height:1.6;color:var(--wp--preset--color--base);opacity:0.8;margin-bottom:1.5rem;">
                            <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>"
                            style="display:inline-block;background:var(--wp--preset--color--primary);color:var(--wp--preset--color--secondary);font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;padding:0.75rem 1.5rem;text-decoration:none;">
                            Learn More
                        </a>
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
            <h2>No programs found</h2>
        </div>
    <?php endif; ?>

</main>

<?php
get_footer();
