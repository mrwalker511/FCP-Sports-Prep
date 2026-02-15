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
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-training.webp","dimRatio":90,"overlayColor":"contrast","minHeight":500,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:500px">
    <span aria-hidden="true"
        class="wp-block-cover__background has-contrast-background-color has-background-dim-90 has-background-dim"></span>
    <img class="wp-block-cover__image-background"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-training.webp"
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
                <!-- wp:button {"backgroundColor":"base","textColor":"secondary","className":"is-style-large","style":{"typography":{"fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"}},"fontSize":"small"} -->
                <div class="wp-block-button is-style-large">
                    <a href="/contact"
                        class="wp-block-button__link has-secondary-color has-base-background-color has-text-color has-background has-small-font-size wp-element-button"
                        style="font-weight:700;letter-spacing:0.3em;text-transform:uppercase">Book
                        Evaluation</a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"backgroundColor":"transparent","textColor":"base","className":"is-style-large has-border-base-10","style":{"typography":{"fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"},"border":{"width":"1px","style":"solid"}},"fontSize":"small"} -->
                <div class="wp-block-button is-style-large">
                    <a href="/programs"
                        class="wp-block-button__link has-base-color has-transparent-background-color has-text-color has-background has-border-color has-border-base-10 has-small-font-size wp-element-button"
                        style="border-style:solid;border-width:1px;font-weight:700;letter-spacing:0.3em;text-transform:uppercase">Download
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