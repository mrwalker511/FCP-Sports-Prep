<?php
/**
 * Title: Donors Wall of Honor
 * Slug: fl-coastal-prep/donors-showcase
 * Categories: featured, text
 * Viewport Width: 1200
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph
 * Description: Donor recognition section with tiered giving levels display.
 */
?>
<!-- wp:group {"align":"full","className":"section-spacing-large","backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div
    class="wp-block-group alignfull section-spacing-large has-base-color has-contrast-background-color has-text-color has-background">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"5rem","left":"5rem"},"margin":{"bottom":"8rem"}}}} -->
        <div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-bottom:8rem">
            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%">
                <!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
                <p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">Our Mission
                </p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"className":"text-blueprint-h3","style":{"typography":{"fontSize":"clamp(2.5rem, 5vw, 4rem)"}},"textColor":"base","fontFamily":"display"} -->
                <h3 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h3"
                    style="font-size:clamp(2.5rem, 5vw, 4rem)">
                    EQUITY IN <br>ELITE ATHLETICS</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.75","fontStyle":"italic"}},"textColor":"base","className":"opacity-80"} -->
                <p class="has-base-color has-text-color opacity-80"
                    style="font-size:1.125rem;font-style:italic;line-height:1.75">Talent is distributed equally, but
                    opportunity is not. 40% of our roster is supported by full-tuition scholarships funded exclusively
                    by
                    our donor network.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%">
                <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"donor-image"} -->
                <figure class="wp-block-image size-large donor-image"><img src="assets/images/placeholder-donors.webp"
                        alt="Student-athletes celebrating together after a successful scholarship fundraiser" />
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->

        <!-- wp:heading {"textAlign":"center","level":4,"className":"text-blueprint-h4","style":{"typography":{"fontSize":"2.25rem"}},"textColor":"base","fontFamily":"display"} -->
        <h4 class="wp-block-heading has-text-align-center has-base-color has-text-color has-display-font-family text-blueprint-h4"
            style="font-size:2.25rem">WALL OF HONOR
        </h4>
        <!-- /wp:heading -->
        <div class="wp-block-group has-background"
            style="background-color:var(--wp--preset--color--primary);min-height:4px;min-width:96px;margin:1rem auto 4rem auto">
        </div>

        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"className":"has-border-color has-border-secondary-5 card-padding-large","style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"width":"1px","style":"solid"}}} -->
            <div class="wp-block-column has-border-color has-border-secondary-5 card-padding-large has-background"
                style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base)">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.5625rem","fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"1.5rem"}}},"backgroundColor":"contrast","textColor":"base","className":"donor-tier"} -->
                <p class="has-text-align-center has-base-color has-text-color has-contrast-background-color has-background donor-tier"
                    style="font-size:0.5625rem;font-weight:700;letter-spacing:0.3em;text-transform:uppercase;margin-bottom:1.5rem">
                    Platinum Tier
                </p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontSize":"1.875rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"display"} -->
                <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-display-font-family"
                    style="font-size:1.875rem;font-style:italic;text-transform:uppercase">The Gold Coast Foundation</h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"className":"has-border-color has-border-secondary-5 card-padding-large","style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"width":"1px","style":"solid"}}} -->
            <div class="wp-block-column has-border-color has-border-secondary-5 card-padding-large has-background"
                style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base)">
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.5625rem","fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"1.5rem"}}},"backgroundColor":"contrast","textColor":"base","className":"donor-tier"} -->
                <p class="has-text-align-center has-base-color has-text-color has-contrast-background-color has-background donor-tier"
                    style="font-size:0.5625rem;font-weight:700;letter-spacing:0.3em;text-transform:uppercase;margin-bottom:1.5rem">
                    Platinum Tier
                </p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"fontSize":"1.875rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"display"} -->
                <h5 class="wp-block-heading has-text-align-center has-secondary-color has-text-color has-display-font-family"
                    style="font-size:1.875rem;font-style:italic;text-transform:uppercase">Global Sports Alliance</h5>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->