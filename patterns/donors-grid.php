<?php
/**
 * Title: Donors Grid (Dynamic)
 * Slug: fl-coastal-prep/donors-grid
 * Categories: featured, query
 * Viewport Width: 1200
 * Block Types: core/query
 * Description: Dynamic donor grid that pulls from the Donor custom post type, organized by tier.
 */
?>
<!-- wp:group {"align":"full","className":"section-spacing-large","backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section-spacing-large has-base-color has-contrast-background-color has-text-color has-background">

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">

        <!-- wp:heading {"textAlign":"center","level":4,"className":"text-blueprint-h4","style":{"typography":{"fontSize":"2.25rem"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"base","fontFamily":"display"} -->
        <h4 class="wp-block-heading has-text-align-center has-base-color has-text-color has-display-font-family text-blueprint-h4" style="font-size:2.25rem;margin-bottom:2rem">WALL OF HONOR</h4>
        <!-- /wp:heading -->

        <!-- Decorative Line -->
        <div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--primary);min-height:4px;min-width:96px;margin:0 auto 4rem auto"></div>

        <!-- wp:query {"query":{"perPage":12,"pages":0,"offset":0,"postType":"donor","order":"desc","orderBy":"date","taxQuery":{"donor_tier":[]}},"align":"full"} -->
        <div class="wp-block-query alignfull">

            <!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
                <!-- wp:group {"className":"has-border-color has-border-secondary-5 card-padding-large","style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"width":"1px","style":"solid"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-border-color has-border-secondary-5 card-padding-large has-background" style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base)">

                    <!-- wp:post-terms {"term":"donor_tier","textAlign":"center","style":{"typography":{"fontSize":"0.5625rem","fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"1.5rem"}}},"backgroundColor":"contrast","textColor":"base","className":"donor-tier"} /-->

                    <!-- wp:post-title {"textAlign":"center","level":5,"isLink":true,"style":{"typography":{"fontSize":"1.875rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"display"} /-->

                </div>
                <!-- /wp:group -->
            <!-- /wp:post-template -->

            <!-- wp:query-no-results -->
                <!-- wp:paragraph {"align":"center","textColor":"base","className":"opacity-80"} -->
                <p class="has-text-align-center has-base-color has-text-color opacity-80">No donors found. Please add donors through the WordPress admin.</p>
                <!-- /wp:paragraph -->
            <!-- /wp:query-no-results -->

        </div>
        <!-- /wp:query -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
