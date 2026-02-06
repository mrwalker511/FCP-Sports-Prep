<?php
/**
 * Title: Blueprint Gallery
 * Slug: fl-coastal-prep/blueprint-gallery
 * Categories: gallery, featured
 * Viewport Width: 1600
 * Block Types: core/group, core/columns, core/column, core/image
 * Description: Full-width gallery section with grid background and image showcase.
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"}},"color":{"background":"var(--wp--preset--color--tertiary)"}},"className":"is-style-grid-background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-grid-background has-background" style="background-color:var(--wp--preset--color--tertiary);padding-top:8rem;padding-bottom:8rem">
    
    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"},"style":{"spacing":{"margin":{"bottom":"4rem"}}}} -->
    <div class="wp-block-group" style="margin-bottom:4rem">
        <!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.5em","textTransform":"uppercase","fontSize":"0.875rem"}},"textColor":"primary","fontFamily":"heading"} -->
        <p class="has-primary-color has-text-color has-heading-font-family" style="font-size:0.875rem;letter-spacing:0.5em;text-transform:uppercase">The Blueprint</p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 6rem)","fontStyle":"italic","lineHeight":"1"}},"textColor":"base","fontFamily":"display","className":"is-style-blueprint"} -->
        <h2 class="wp-block-heading has-text-align-center is-style-blueprint has-base-color has-text-color has-display-font-family" style="font-size:clamp(3rem, 6vw, 6rem);font-style:italic;line-height:1">ACADEMY LIFE</h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"2rem"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-animate-slide-in"} -->
            <figure class="wp-block-image size-large is-style-animate-slide-in"><img src="https://images.unsplash.com/photo-1519766304817-4f37bda74a26?auto=format&fit=crop&q=80&w=800" alt="Training"/></figure>
            <!-- /wp:image -->
            <!-- wp:spacer {"height":"2rem"} -->
            <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            <!-- wp:group {"style":{"color":{"background":"var(--wp--preset--color--secondary)"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"is-style-glassmorphism"} -->
            <div class="wp-block-group is-style-glassmorphism has-background" style="background-color:var(--wp--preset--color--secondary);padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                <!-- wp:heading {"level":4,"textColor":"primary","fontFamily":"heading"} -->
                <h4 class="wp-block-heading has-primary-color has-text-color has-heading-font-family">ELITE TRAINING</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"base"} -->
                <p class="has-base-color has-text-color">Advanced metrics and personalized development plans for every athlete.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"66.66%"} -->
        <div class="wp-block-column" style="flex-basis:66.66%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-animate-slide-in"} -->
            <figure class="wp-block-image size-large is-style-animate-slide-in"><img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&q=80&w=1200" alt="Arena"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
