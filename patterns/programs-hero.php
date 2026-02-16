<?php
/**
 * Title: Programs Overview Hero
 * Slug: fl-coastal-prep/programs-hero
 * Categories: featured, banner
 * Viewport Width: 1600
 * Block Types: core/cover, core/group, core/heading, core/paragraph
 * Description: Hero section for programs page with cover image and headline.
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-programs-hero.webp","dimRatio":60,"overlayColor":"contrast","minHeight":100,"minHeightUnit":"vh","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:100vh">
    <span aria-hidden="true"
        class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span>
    <img class="wp-block-cover__image-background"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/placeholder-programs-hero.webp"
        alt="Curriculum Hero" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.4em","textTransform":"uppercase","fontSize":"0.75rem","fontWeight":"700"}},"textColor":"primary"} -->
            <p class="has-primary-color has-text-color"
                style="font-size:0.75rem;font-weight:700;letter-spacing:0.4em;text-transform:uppercase">Our Curriculum
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"0.85","fontSize":"clamp(3.5rem, 8vw, 7.5rem)","fontStyle":"italic","letterSpacing":"-0.05em"}},"textColor":"base","fontFamily":"display"} -->
            <h1 class="wp-block-heading has-base-color has-text-color has-display-font-family"
                style="font-size:clamp(3.5rem, 8vw, 7.5rem);font-style:italic;line-height:0.85;letter-spacing:-0.05em">
                ELITE ATHLETICS <br><span class="has-primary-color has-text-color">ACADEMIC RIGOR</span>
            </h1>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"color":{"background":"var(--wp--preset--color--primary)"},"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"4px","minWidth":"128px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group has-background"
                style="background-color:var(--wp--preset--color--primary);min-height:4px;min-width:128px"></div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->