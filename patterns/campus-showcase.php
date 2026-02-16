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
<!-- wp:group {"className":"section-spacing-medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-spacing-medium">

    <!-- wp:cover {"url":"assets/images/placeholder-campus-aerial.webp","dimRatio":60,"overlayColor":"contrast","minHeight":60,"minHeightUnit":"vh","align":"full","style":{"spacing":{"margin":{"bottom":"6rem"}}}} -->
    <div class="wp-block-cover alignfull" style="margin-bottom:6rem;min-height:60vh">
        <span aria-hidden="true"
            class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span>
        <img class="wp-block-cover__image-background"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-campus-aerial.webp"
            alt="Aerial view of Florida Coastal Prep main campus and athletic complex" data-object-fit="cover" />
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
                <p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">Main Complex
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"className":"text-blueprint-h3","style":{"typography":{"fontSize":"clamp(3rem, 6vw, 5rem)"}},"textColor":"base","fontFamily":"display"} -->
                <h3 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h3"
                    style="font-size:clamp(3rem, 6vw, 5rem)">
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

    <!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
    <div class="wp-block-columns alignfull">
        <!-- wp:column {"className":"has-border-color has-border-primary-20","style":{"color":{"background":"var(--wp--preset--color--secondary)"},"border":{"width":"1px","style":"solid"}}} -->
        <div class="wp-block-column has-border-color has-border-primary-20 has-background"
            style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary)">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"facility-image"} -->
            <figure class="wp-block-image size-large facility-image"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-basketball-facility.webp"
                    alt="Interior of the high-tech basketball training facility with multiple courts" /></figure>
            <!-- /wp:image -->
            <!-- wp:group {"className":"card-padding-standard"} -->
            <div class="wp-block-group card-padding-standard">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color"
                    style="font-size:0.75rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Training
                    Hub</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"className":"text-blueprint-h4","textColor":"base","fontFamily":"display"} -->
                <h4 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h4">The
                    Performance Lab</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"base","className":"opacity-80"} -->
                <p class="has-base-color has-text-color opacity-80" style="font-size:0.875rem">4 Full NBA courts
                    equipped with 360-degree high-speed motion capture cameras.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"has-border-color has-border-primary-20","style":{"color":{"background":"var(--wp--preset--color--secondary)"},"border":{"width":"1px","style":"solid"}}} -->
        <div class="wp-block-column has-border-color has-border-primary-20 has-background"
            style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary)">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"facility-image"} -->
            <figure class="wp-block-image size-large facility-image"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-classroom.webp"
                    alt="Modern classroom building with collaborative learning spaces" /></figure>
            <!-- /wp:image -->
            <!-- wp:group {"className":"card-padding-standard"} -->
            <div class="wp-block-group card-padding-standard">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color"
                    style="font-size:0.75rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Core
                    Education</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"className":"text-blueprint-h4","textColor":"base","fontFamily":"display"} -->
                <h4 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h4">The
                    Academic Wing</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"base","className":"opacity-80"} -->
                <p class="has-base-color has-text-color opacity-80" style="font-size:0.875rem">Modern collaborative
                    spaces designed for university-level coursework and STEM research.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"has-border-color has-border-primary-20","style":{"color":{"background":"var(--wp--preset--color--secondary)"},"border":{"width":"1px","style":"solid"}}} -->
        <div class="wp-block-column has-border-color has-border-primary-20 has-background"
            style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary)">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"facility-image"} -->
            <figure class="wp-block-image size-large facility-image"><img
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-residency.webp"
                    alt="Premium student residency suites with ocean-view balconies" /></figure>
            <!-- /wp:image -->
            <!-- wp:group {"className":"card-padding-standard"} -->
            <div class="wp-block-group card-padding-standard">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"700","letterSpacing":"0.2em","textTransform":"uppercase"}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color"
                    style="font-size:0.75rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Housing</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"className":"text-blueprint-h4","textColor":"base","fontFamily":"display"} -->
                <h4 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h4">
                    Residency Suites</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"base","className":"opacity-80"} -->
                <p class="has-base-color has-text-color opacity-80" style="font-size:0.875rem">Premium ocean-view
                    living
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