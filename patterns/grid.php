<?php
/**
 * Title: The Coastal Blueprint Grid
 * Slug: fl-coastal-prep/grid
 * Categories: featured, columns
 * Viewport Width: 1400
 * Block Types: core/group, core/columns, core/column, core/heading, core/paragraph
 * Description: Three-column feature grid showcasing blueprint cards with icons, titles, and descriptions.
 */
?>
<!-- wp:group {"align":"full","className":"section-spacing-large","style":{"color":{"background":"var(--wp--preset--color--contrast)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull section-spacing-large has-background"
    style="background-color:var(--wp--preset--color--contrast)">

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"4rem"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","alignItems":"flex-end"}} -->
    <div class="wp-block-group alignwide" style="margin-bottom:4rem">
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"className":"text-blueprint-label","textColor":"primary"} -->
            <p class="has-primary-color has-text-color text-blueprint-label">
                ELITE STANDARDS</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"className":"text-blueprint-title","textColor":"base","fontFamily":"display"} -->
            <h2 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-title">
                The Coastal <br>Blueprint</h2>
            <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"align":"right","className":"has-text-color opacity-80","style":{"typography":{"fontStyle":"italic","fontWeight":"300"}},"textColor":"base"} -->
        <p class="has-text-align-right has-base-color has-text-color opacity-80"
            style="font-style:italic;font-weight:300">
            We don't just build athletes; we build complete leaders ready for the next level.
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"className":"grid-card has-shadow-xl","style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"radius":"2px"}}} -->
        <div class="wp-block-column grid-card has-shadow-xl has-background"
            style="background-color:var(--wp--preset--color--base);border-radius:2px">
            <!-- wp:cover {"url":"assets/images/placeholder-strength-training.webp","dimRatio":20,"overlayColor":"secondary","minHeight":250,"contentPosition":"center center"} -->
            <div class="wp-block-cover" style="min-height:250px">
                <span aria-hidden="true"
                    class="wp-block-cover__background has-secondary-background-color has-background-dim-20 has-background-dim"></span>
                <img class="wp-block-cover__image-background" src="assets/images/placeholder-strength-training.webp"
                    alt="Athlete performing advanced strength training exercises in the gym" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"></div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"className":"card-padding-large"} -->
            <div class="wp-block-group card-padding-large">
                <!-- wp:heading {"level":3,"className":"text-blueprint-card-title","textColor":"secondary","fontFamily":"display"} -->
                <h3
                    class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-card-title">
                    Performance</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"opacity-90 text-blueprint-body","textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color opacity-90 text-blueprint-body">Advanced biometrics and
                    professional
                    strength programs.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"text-blueprint-link","textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color text-blueprint-link"><a href="/programs">Explore Block</a>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"grid-card has-shadow-xl","style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"radius":"2px"}}} -->
        <div class="wp-block-column grid-card has-shadow-xl has-background"
            style="background-color:var(--wp--preset--color--base);border-radius:2px">
            <!-- wp:cover {"url":"assets/images/placeholder-academic-lab.webp","dimRatio":20,"overlayColor":"secondary","minHeight":250,"contentPosition":"center center"} -->
            <div class="wp-block-cover" style="min-height:250px">
                <span aria-hidden="true"
                    class="wp-block-cover__background has-secondary-background-color has-background-dim-20 has-background-dim"></span>
                <img class="wp-block-cover__image-background" src="assets/images/placeholder-academic-lab.webp"
                    alt="Students collaborating in a modern science laboratory classroom" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"></div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"className":"card-padding-large"} -->
            <div class="wp-block-group card-padding-large">
                <!-- wp:heading {"level":3,"className":"text-blueprint-card-title","textColor":"secondary","fontFamily":"display"} -->
                <h3
                    class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-card-title">
                    Academic Lab</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"opacity-90 text-blueprint-body","textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color opacity-90 text-blueprint-body">Tailored educational
                    pathways
                    for
                    college placement.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"text-blueprint-link","textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color text-blueprint-link"><a href="/programs">Explore Block</a>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"className":"grid-card has-shadow-xl","style":{"color":{"background":"var(--wp--preset--color--base)"},"border":{"radius":"2px"}}} -->
        <div class="wp-block-column grid-card has-shadow-xl has-background"
            style="background-color:var(--wp--preset--color--base);border-radius:2px">
            <!-- wp:cover {"url":"assets/images/placeholder-campus-lifestyle.webp","dimRatio":20,"overlayColor":"secondary","minHeight":250,"contentPosition":"center center"} -->
            <div class="wp-block-cover" style="min-height:250px">
                <span aria-hidden="true"
                    class="wp-block-cover__background has-secondary-background-color has-background-dim-20 has-background-dim"></span>
                <img class="wp-block-cover__image-background" src="assets/images/placeholder-campus-lifestyle.webp"
                    alt="Oceanfront campus residence with palm trees and modern architecture" data-object-fit="cover" />
                <div class="wp-block-cover__inner-container"></div>
            </div>
            <!-- /wp:cover -->

            <!-- wp:group {"className":"card-padding-large"} -->
            <div class="wp-block-group card-padding-large">
                <!-- wp:heading {"level":3,"className":"text-blueprint-card-title","textColor":"secondary","fontFamily":"display"} -->
                <h3
                    class="wp-block-heading has-secondary-color has-text-color has-display-font-family text-blueprint-card-title">
                    Lifestyle</h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"className":"opacity-90 text-blueprint-body","textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color opacity-90 text-blueprint-body">Ocean-front residency with
                    professional
                    nutrition.</p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"className":"text-blueprint-link","textColor":"secondary"} -->
                <p class="has-secondary-color has-text-color text-blueprint-link"><a href="/programs">Explore Block</a>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- /wp:group -->