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
<!-- wp:group {"className":"section-spacing-medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-spacing-medium">

    <!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"DESC","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"grid","columnCount":2}} -->

        <!-- wp:group {"className":"news-card has-border-color has-border-primary-20","style":{"border":{"width":"1px","style":"solid"},"color":{"background":"var(--wp--preset--color--secondary)"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group news-card has-border-color has-border-primary-20 has-background"
            style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary)">

            <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","className":"news-image"} /-->

            <!-- wp:group {"className":"card-padding-large","layout":{"type":"constrained"}} -->
            <div class="wp-block-group card-padding-large">
                <!-- wp:post-date {"className":"text-label-small letter-spacing-normal opacity-60","textColor":"base"} /-->

                <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"2.25rem","fontStyle":"italic","lineHeight":"1.1"}},"textColor":"base","fontFamily":"display","className":"news-title"} /-->

                <!-- wp:post-excerpt {"style":{"typography":{"fontSize":"0.875rem","fontStyle":"italic"}},"textColor":"base","className":"opacity-60"} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"className":"text-label-small letter-spacing-normal","textColor":"primary"} -->
                    <p class="has-primary-color has-text-color text-label-small letter-spacing-normal">Read
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