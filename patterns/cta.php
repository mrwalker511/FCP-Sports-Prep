<?php
/**
 * Title: Ready to Level Up Call to Action
 * Slug: fl-coastal-prep/cta
 * Categories: featured, call-to-action
 * Viewport Width: 1600
 * Block Types: core/cover, core/group, core/heading, core/paragraph, core/button
 * Description: Full-width CTA section with headline, description, and dual action buttons
 */
?>
<!-- wp:cover {"url":"assets/images/placeholder-training.webp","dimRatio":90,"overlayColor":"contrast","minHeight":500,"isUserOverlayColor":true,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:500px">
    <span aria-hidden="true"
        class="wp-block-cover__background has-contrast-background-color has-background-dim-90 has-background-dim"></span>
    <img class="wp-block-cover__image-background" src="assets/images/placeholder-training.webp"
        alt="Basketball court with players during an intense training session" data-object-fit="cover" />

    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">

            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"clamp(3.5rem, 8vw, 7.5rem)","fontStyle":"italic","lineHeight":"0.9","letterSpacing":"-0.025em"}},"textColor":"base","fontFamily":"display"} -->
            <h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-display-font-family"
                style="font-size:clamp(3.5rem, 8vw, 7.5rem);font-style:italic;line-height:0.9;letter-spacing:-0.025em">
                OWN YOUR <br><span class="has-primary-color has-text-color"
                    style="text-decoration:underline">MOMENT</span>
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem","fontStyle":"italic","fontWeight":"300"}},"textColor":"base","className":"opacity-80"} -->
            <p class="has-text-align-center has-base-color has-text-color opacity-80"
                style="font-size:1.5rem;font-style:italic;font-weight:300">
                Limited roster spots available for the upcoming season. Don't let your potential go unnoticed.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"base","textColor":"secondary","style":{"typography":{"fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"},"spacing":{"padding":{"top":"1.5rem","right":"4rem","bottom":"1.5rem","left":"4rem"}}},"fontSize":"small"} -->
                <div class="wp-block-button">
                    <a href="/contact"
                        class="wp-block-button__link has-secondary-color has-base-background-color has-text-color has-background has-small-font-size wp-element-button"
                        style="padding-top:1.5rem;padding-right:4rem;padding-bottom:1.5rem;padding-left:4rem;font-weight:700;letter-spacing:0.3em;text-transform:uppercase">Book
                        Evaluation</a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"transparent","textColor":"base","style":{"typography":{"fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"},"spacing":{"padding":{"top":"1.5rem","right":"4rem","bottom":"1.5rem","left":"4rem"}},"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--base) 10%, transparent)"}},"fontSize":"small"} -->
                <div class="wp-block-button">
                    <a href="/programs"
                        class="wp-block-button__link has-base-color has-transparent-background-color has-text-color has-background has-border-color has-small-font-size wp-element-button"
                        style="border-color:color-mix(in srgb, var(--wp--preset--color--base) 10%, transparent);border-style:solid;border-width:1px;padding-top:1.5rem;padding-right:4rem;padding-bottom:1.5rem;padding-left:4rem;font-weight:700;letter-spacing:0.3em;text-transform:uppercase">Download
                        PDF</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->