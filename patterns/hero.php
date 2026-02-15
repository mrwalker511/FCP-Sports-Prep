<?php
/**
 * Title: The Future of Elite Ball
 * Slug: fl-coastal-prep/hero
 * Categories: featured, banner
 * Viewport Width: 1600
 * Block Types: core/cover, core/group, core/paragraph, core/button
 * Description: Full-width hero section with title, subtitle, and CTA buttons
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-hero.webp","dimRatio":40,"overlayColor":"contrast","minHeight":100,"minHeightUnit":"vh","align":"full","style":{"color":{"duotone":"unset"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:100vh">
    <span aria-hidden="true"
        class="wp-block-cover__background has-contrast-background-color has-background-dim-40 has-background-dim"></span>
    <img class="wp-block-cover__image-background"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-hero.webp"
        alt="Basketball players in competitive game action on an indoor court" data-object-fit="cover" />

    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"}} -->
        <div class="wp-block-group">

            <!-- wp:group {"style":{"border":{"width":"1px","color":"var(--wp--preset--color--primary)","style":"solid"},"spacing":{"padding":{"top":"0.25rem","right":"1rem","bottom":"0.25rem","left":"1rem"}},"color":{"background":"var(--wp--preset--color--primary)"}}} -->
            <div class="wp-block-group has-border-color has-background"
                style="border-color:var(--wp--preset--color--primary);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--primary);padding-top:0.25rem;padding-right:1rem;padding-bottom:0.25rem;padding-left:1rem">
                <!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"secondary","fontFamily":"heading"} -->
                <p
                    class="has-secondary-color has-text-color has-heading-font-family text-label-medium letter-spacing-wider">
                    Official Prep Academy</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:heading {"level":1,"textAlign":"center","style":{"typography":{"lineHeight":"0.8","fontSize":"clamp(4.5rem, 8vw, 10rem)"}},"className":"text-blueprint-title","textColor":"base","fontFamily":"display"} -->
            <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-display-font-family text-blueprint-title"
                style="font-size:clamp(4.5rem, 8vw, 10rem);line-height:0.8">
                THE FUTURE <br><span class="has-primary-color has-text-color">OF ELITE</span> BALL
            </h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","fontStyle":"italic","fontWeight":"300","lineHeight":"1.75"}},"textColor":"base"} -->
            <p class="has-text-align-center has-base-color has-text-color"
                style="font-size:1.25rem;font-style:italic;font-weight:300;line-height:1.75">
                Experience world-class training and academic rigor designed for the modern student-athlete.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"secondary","className":"is-style-medium","style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"700"}},"fontSize":"small"} -->
                <div class="wp-block-button is-style-medium">
                    <a href="/apply"
                        class="wp-block-button__link has-secondary-color has-primary-background-color has-text-color has-background has-small-font-size wp-element-button"
                        style="font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Start
                        Journey</a>
                </div>
                <!-- /wp:button -->

                <!-- wp:button {"style":{"typography":{"letterSpacing":"0.2em","textTransform":"uppercase","fontWeight":"700"},"border":{"width":"1px","style":"solid","color":"var(--wp--preset--color--base)"}},"className":"is-style-outline is-style-medium","textColor":"base","fontSize":"small"} -->
                <div class="wp-block-button is-style-outline is-style-medium">
                    <a href="/campus"
                        class="wp-block-button__link has-base-color has-text-color has-border-color has-small-font-size wp-element-button"
                        style="border-color:var(--wp--preset--color--base);border-style:solid;border-width:1px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">Academy
                        Tour</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->