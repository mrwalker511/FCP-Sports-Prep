<?php
/**
 * Title: Coastal Facilities Showcase
 * Slug: fl-coastal-prep/campus-showcase
 * Categories: featured, gallery
 * Viewport Width: 1400
 * Block Types: core/group, core/cover, core/columns, core/column
 * Description: Campus facilities showcase with hero image and feature grid.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:6rem;padding-bottom:6rem">

    <!-- wp:cover {"url":"assets/images/placeholder-campus-aerial.webp","dimRatio":60,"overlayColor":"contrast","minHeight":60,"minHeightUnit":"vh","align":"wide","style":{"spacing":{"margin":{"bottom":"6rem"}}}} -->
    <div class="wp-block-cover alignwide" style="margin-bottom:6rem;min-height:60vh">
        <span aria-hidden="true"
            class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span>
        <img class="wp-block-cover__image-background" src="assets/images/placeholder-campus-aerial.webp"
            alt="Aerial view of Florida Coastal Prep main campus and athletic complex" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.4em","textTransform":"uppercase","fontSize":"0.75rem","fontWeight":"700"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color"
                    style="font-size:0.75rem;font-weight:700;letter-spacing:0.4em;text-transform:uppercase">Main Complex
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"clamp(3rem, 6vw, 5rem)","fontStyle":"italic","lineHeight":"1","letterSpacing":"-0.025em","textTransform":"uppercase"}},"textColor":"base","fontFamily":"display"} -->
                <h3 class="wp-block-heading has-base-color has-text-color has-display-font-family"
                    style="font-size:clamp(3rem, 6vw, 5rem);font-style:italic;line-height:1;letter-spacing:-0.025em;text-transform:uppercase">
                    CENTRAL COASTAL ARENA</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontStyle":"italic"}},"textColor":"base","className":"opacity-60"} -->
                <p class="has-base-color has-text-color opacity-60" style="font-size:1.125rem;font-style:italic">The
                    heartbeat of our academy. 12,000 sq ft of dedicated basketball development.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent)"}}} -->
        <div class="wp-block-column has-border-color has-background"
            style="border-color:color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base)">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"facility-image"} -->
            <figure class="wp-block-image size-large facility-image"><img
                    src="assets/images/placeholder-basketball-facility.webp"
                    alt="Interior of the high-tech basketball training facility with multiple courts" /></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
            <div class="wp-block-group"
                style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color"
                    style="font-size:0.625rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Training
                    Hub</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"display"} -->
                <h4 class="wp-block-heading has-secondary-color has-text-color has-display-font-family"
                    style="font-size:1.5rem;font-style:italic;text-transform:uppercase">The Performance Lab</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"base","className":"opacity-60"} -->
                <p class="has-base-color has-text-color opacity-60" style="font-size:0.875rem">4 Full NBA courts
                    equipped with 360-degree high-speed motion capture cameras.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent)"}}} -->
        <div class="wp-block-column has-border-color has-background"
            style="border-color:color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base)">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"facility-image"} -->
            <figure class="wp-block-image size-large facility-image"><img src="assets/images/placeholder-classroom.webp"
                    alt="Modern classroom building with collaborative learning spaces" /></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
            <div class="wp-block-group"
                style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color"
                    style="font-size:0.625rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Core
                    Education</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"display"} -->
                <h4 class="wp-block-heading has-secondary-color has-text-color has-display-font-family"
                    style="font-size:1.5rem;font-style:italic;text-transform:uppercase">The Academic Wing</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"base","className":"opacity-60"} -->
                <p class="has-base-color has-text-color opacity-60" style="font-size:0.875rem">Modern collaborative
                    spaces designed for university-level coursework and STEM research.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent)"}}} -->
        <div class="wp-block-column has-border-color has-background"
            style="border-color:color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base)">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"facility-image"} -->
            <figure class="wp-block-image size-large facility-image"><img src="assets/images/placeholder-residency.webp"
                    alt="Premium student residency suites with ocean-view balconies" /></figure>
            <!-- /wp:image -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
            <div class="wp-block-group"
                style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color"
                    style="font-size:0.625rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Housing</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"display"} -->
                <h4 class="wp-block-heading has-secondary-color has-text-color has-display-font-family"
                    style="font-size:1.5rem;font-style:italic;text-transform:uppercase">Residency Suites</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"base","className":"opacity-60"} -->
                <p class="has-base-color has-text-color opacity-60" style="font-size:0.875rem">Premium ocean-view living
                    quarters with high-speed fiber and professional recovery zones.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->