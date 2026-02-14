<?php
/**
 * Title: Academy Intel News Feed
 * Slug: fl-coastal-prep/news-archive
 * Categories: featured, query
 * Viewport Width: 1400
 * Block Types: core/query, core/post-template, core/post-featured-image, core/post-title, core/post-date
 * Description: Two-column news grid with featured images, dates, and excerpts.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:6rem;padding-bottom:6rem">

    <!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"DESC","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"grid","columnCount":2}} -->

        <!-- wp:group {"style":{"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--secondary) 10%, transparent)"},"color":{"background":"var(--wp--preset--color--base)"}},"className":"news-card","layout":{"type":"constrained"}} -->
        <div class="wp-block-group news-card has-border-color has-background"
            style="border-color:color-mix(in srgb, var(--wp--preset--color--secondary) 10%, transparent);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base)">

            <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"news-image"} /-->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"
                style="padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
                <!-- wp:post-date {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"base","className":"opacity-60"} /-->

                <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"2.25rem","fontStyle":"italic","lineHeight":"1.1"}},"textColor":"secondary","fontFamily":"display","className":"news-title"} /-->

                <!-- wp:post-excerpt {"style":{"typography":{"fontSize":"0.875rem","fontStyle":"italic"}},"textColor":"base","className":"opacity-60"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"secondary"} -->
                    <p class="has-secondary-color has-text-color"
                        style="font-size:0.625rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Read
                        Story</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:group {"style":{"color":{"background":"var(--wp--preset--color--primary)"},"dimensions":{"minWidth":"32px","minHeight":"1px"}},"layout":{"type":"flex"}} -->
                    <div class="wp-block-group has-background"
                        style="background-color:var(--wp--preset--color--primary);min-height:1px;min-width:32px"></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
        <!-- wp:query-pagination-previous /-->
        <!-- wp:query-pagination-numbers /-->
        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->

    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->