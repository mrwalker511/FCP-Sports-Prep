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
<!-- wp:query {"query":{"perPage":99,"pages":0,"offset":0,"postType":"faculty","order":"ASC","orderBy":"menu_order","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide">
    <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"grid","columnCount":3}} -->

    <!-- wp:group {"className":"faculty-card has-shadow-xl","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"},"blockGap":"1.5rem"},"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--primary) 20%, transparent)"},"color":{"background":"var(--wp--preset--color--secondary)"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group faculty-card has-shadow-xl has-border-color has-background"
        style="border-color:color-mix(in srgb, var(--wp--preset--color--primary) 20%, transparent);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary);padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","align":"center","className":"faculty-image"} /-->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":10,"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"primary"} /-->

            <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"italic","textTransform":"uppercase","fontSize":"1.875rem"}},"fontFamily":"display","textColor":"base"} /-->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"border":{"top":{"color":"var(--wp--preset--color--primary)","width":"1px"}},"dimensions":{"minWidth":"1.5rem"}},"layout":{"type":"flex"}} -->
                <div class="wp-block-group"
                    style="border-top-color:var(--wp--preset--color--primary);border-top-width:1px;min-width:1.5rem">
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"base","className":"opacity-80"} -->
                <p class="has-base-color has-text-color opacity-80"
                    style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Learn
                    More</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- /wp:post-template -->
</div>
<!-- /wp:query -->