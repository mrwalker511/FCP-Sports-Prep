<?php
/**
 * Title: Admissions Application Portal
 * Slug: fl-coastal-prep/apply-form
 * Categories: featured, text
 * Viewport Width: 800
 * Block Types: core/group, core/heading, core/paragraph
 * Description: Application form placeholder with progress indicator. Requires form plugin integration.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}},"color":{"background":"var(--wp--preset--color--base)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background"
    style="background-color:var(--wp--preset--color--base);padding-top:6rem;padding-bottom:6rem">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4rem"}}}} -->
    <div class="wp-block-group" style="margin-bottom:4rem">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","letterSpacing":"0.3em","textTransform":"uppercase"}},"textColor":"primary"} -->
        <p class="has-primary-color has-text-color"
            style="font-size:0.625rem;font-weight:700;letter-spacing:0.3em;text-transform:uppercase">Step 1 of 3</p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"3rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"display"} -->
        <h2 class="wp-block-heading has-secondary-color has-text-color has-display-font-family"
            style="font-size:3rem;font-style:italic;text-transform:uppercase">Personal Profile</h2>
        <!-- /wp:heading -->
        <!-- wp:group {"style":{"color":{"background":"var(--wp--preset--color--primary)"},"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"4px","minWidth":"33%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
        <div class="wp-block-group has-background"
            style="background-color:var(--wp--preset--color--primary);min-height:4px;min-width:33%"></div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontStyle":"italic"}},"textColor":"secondary","className":"opacity-60"} -->
    <p class="has-secondary-color has-text-color opacity-60" style="font-size:1.25rem;font-style:italic">Please complete
        the
        form below to start your application. Our admissions team will respond within two business days.</p>
    <!-- /wp:paragraph -->

    <!-- wp:shortcode -->
    [fcp_form_message]
    <!-- /wp:shortcode -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent)"}},"backgroundColor":"base"} -->
    <div class="wp-block-group has-border-color has-base-background-color has-background"
        style="border-color:color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent);border-style:solid;border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
        <!-- wp:shortcode -->
        [fcp_apply_form]
        <!-- /wp:shortcode -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->