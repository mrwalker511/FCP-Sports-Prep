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

    <!-- wp:group {"className":"faculty-card has-shadow-xl","style":{"spacing":{"padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"},"blockGap":"1rem"},"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent)"},"color":{"background":"var(--wp--preset--color--base)"}},"layout":{"type":"flex","orientation":"vertical"}} -->
    <div class="wp-block-group faculty-card has-shadow-xl has-border-color has-background"
        style="border-color:color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base);padding-top:1.5rem;padding-right:1.5rem;padding-bottom:1.5rem;padding-left:1.5rem">

        <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","align":"center","className":"faculty-image"} /-->

        <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group">
            <!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":10,"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"primary"} /-->

            <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"italic","textTransform":"uppercase","fontSize":"1.875rem"}},"fontFamily":"display","textColor":"secondary"} /-->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"border":{"top":{"color":"color-mix(in srgb, var(--wp--preset--color--secondary) 20%, transparent)","width":"1px"}},"dimensions":{"minWidth":"1rem"}},"layout":{"type":"flex"}} -->
                <div class="wp-block-group"
                    style="border-top-color:color-mix(in srgb, var(--wp--preset--color--secondary) 20%, transparent);border-top-width:1px;min-width:1rem">
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.6875rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"}},"textColor":"secondary","className":"opacity-60"} -->
                <p class="has-secondary-color has-text-color opacity-60"
                    style="font-size:0.6875rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase">Learn
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