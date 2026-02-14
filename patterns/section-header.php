<?php
/**
 * Title: Generic Section Header
 * Slug: fl-coastal-prep/section-header
 * Categories: text
 * Keywords: title, heading
 * Viewport Width: 800
 * Block Types: core/group, core/paragraph, core/heading, core/separator
 * Description: Reusable section header with label, title, description, and accent separator.
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"var(--wp--preset--color--contrast)"},"spacing":{"padding":{"top":"6rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background"
    style="background-color:var(--wp--preset--color--contrast);padding-top:6rem;padding-bottom:4rem">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.4em","fontSize":"0.75rem"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color"
            style="font-size:0.75rem;font-style:normal;font-weight:700;letter-spacing:0.4em;text-transform:uppercase">
            THE
            COASTAL BLUEPRINT</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textColor":"base","style":{"typography":{"fontStyle":"italic","textTransform":"uppercase","letterSpacing":"-0.025em","fontSize":"clamp(3rem, 5vw, 4.5rem)","lineHeight":"1"}},"fontFamily":"display"} -->
        <h2 class="wp-block-heading has-base-color has-text-color has-display-font-family"
            style="font-size:clamp(3rem, 5vw, 4.5rem);font-style:italic;line-height:1;letter-spacing:-0.025em;text-transform:uppercase">
            WHAT SETS US APART</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"300","fontSize":"1.125rem"}},"textColor":"base","className":"opacity-80"} -->
        <p class="has-base-color has-text-color opacity-80"
            style="font-size:1.125rem;font-style:italic;font-weight:300">
            World-class facilities and expert coaching staff dedicated to your success.
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:separator {"backgroundColor":"primary","className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"6rem"},"border":{"width":"4px"}}} -->
        <hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default"
            style="border-width:4px" />
        <!-- /wp:separator -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->