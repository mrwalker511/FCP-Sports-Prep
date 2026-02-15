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
        <!-- wp:paragraph {"className":"text-label-medium letter-spacing-wider","textColor":"primary"} -->
        <p class="has-primary-color has-text-color text-label-medium letter-spacing-wider">
            THE
            COASTAL BLUEPRINT</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"className":"text-blueprint-h2","style":{"typography":{"fontSize":"clamp(3rem, 5vw, 4.5rem)"}},"textColor":"base","fontFamily":"display"} -->
        <h2 class="wp-block-heading has-base-color has-text-color has-display-font-family text-blueprint-h2"
            style="font-size:clamp(3rem, 5vw, 4.5rem)">
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