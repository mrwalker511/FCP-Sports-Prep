<?php
/**
 * Title: Elite Leadership Faculty Grid
 * Slug: fl-coastal-prep/faculty-grid
 * Categories: featured, query
 * Viewport Width: 1400
 * Block Types: core/query, core/post-template, core/post-featured-image, core/post-title
 * Description: Grid display of faculty members with hover effects and 3-column layout.
 */
?>
<!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"faculty","order":"ASC","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
    <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"grid","columnCount":3}} -->

    <!-- wp:group {"className":"faculty-card has-shadow-xl has-border-primary-20 card-padding-standard","style":{"spacing":{"blockGap":"1.5rem"},"border":{"width":"1px","style":"solid"},"color":{"background":"var(--wp--preset--color--secondary)"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group faculty-card has-shadow-xl has-border-color has-border-primary-20 card-padding-standard has-background"
        style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary)">

        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","align":"center","className":"faculty-image"} /-->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":10,"className":"text-label-medium letter-spacing-normal","textColor":"primary"} /-->

            <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"italic","textTransform":"uppercase","fontSize":"1.875rem"}},"fontFamily":"display","textColor":"base"} /-->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"border":{"top":{"color":"var(--wp--preset--color--primary)","width":"1px"}},"dimensions":{"minWidth":"1.5rem"}},"layout":{"type":"flex"}} -->
                <div class="wp-block-group"
                    style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;min-width:1.5rem">
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"className":"text-label-medium letter-spacing-normal opacity-80","textColor":"base"} -->
                <p class="has-base-color has-text-color text-label-medium letter-spacing-normal opacity-80">Learn
                    More</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"4rem"}}}} -->
    <!-- wp:query-pagination-previous {"label":"Previous"} /-->
    <!-- wp:query-pagination-numbers /-->
    <!-- wp:query-pagination-next {"label":"Next"} /-->
    <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->