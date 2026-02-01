<?php
/**
 * Schedule Archive Template
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
            Game Schedule
        </h1>
        <p style="font-size:1.125rem;color:var(--wp--preset--color--contrast);opacity:0.7;">
            Upcoming games and results
        </p>
    </header>

    <?php if (have_posts()): ?>
        <div class="schedule-list" style="display:flex;flex-direction:column;gap:1rem;">
            <?php
            while (have_posts()):
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('schedule-item'); ?>
                    style="display:flex;align-items:center;gap:2rem;background:var(--wp--preset--color--base);border-radius:8px;padding:1.5rem
            2rem;box-shadow:0 2px 10px rgba(0,0,0,0.05);">

                    <div class="game-date" style="text-align:center;min-width:80px;">
                        <div
                            style="font-family:'Bebas Neue',sans-serif;font-size:2rem;line-height:1;color:var(--wp--preset--color--primary);">
                            <?php echo get_the_date('d'); ?>
                        </div>
                        <div
                            style="font-size:0.75rem;font-weight:700;text-transform:uppercase;letter-spacing:0.1em;color:var(--wp--preset--color--contrast);opacity:0.6;">
                            <?php echo get_the_date('M Y'); ?>
                        </div>
                    </div>

                    <div class="game-info" style="flex:1;">
                        <h2 style="font-family:'Oswald',sans-serif;font-size:1.25rem;margin:0 0 0.25rem;">
                            <a href="<?php the_permalink(); ?>"
                                style="color:var(--wp--preset--color--contrast);text-decoration:none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <div style="font-size:0.875rem;color:var(--wp--preset--color--contrast);opacity:0.7;">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                    <a href="<?php the_permalink(); ?>"
                        style="background:var(--wp--preset--color--secondary);color:var(--wp--preset--color--base);font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;padding:0.75rem 1.5rem;text-decoration:none;border-radius:4px;">
                        Details
                    </a>
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
            <h2>No games scheduled</h2>
        </div>
    <?php endif; ?>

</main>

<?php
get_footer();
