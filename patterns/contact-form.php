<?php
/**
 * Title: Academy Contact Portal
 * Slug: fl-coastal-prep/contact-form
 * Categories: featured, text
 * Viewport Width: 1200
 * Block Types: core/columns, core/column, core/group, core/heading, core/paragraph
 * Description: Two-column contact layout with form placeholder and contact information.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:6rem;padding-bottom:6rem">

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"5rem","left":"5rem"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2.25rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"base","fontFamily":"display"} -->
            <h3 class="wp-block-heading has-base-color has-text-color has-display-font-family"
                style="font-size:2.25rem;font-style:italic;text-transform:uppercase">Direct Inquiry</h3>
            <!-- /wp:heading -->

            <!-- wp:shortcode -->
            [fcp_form_message]
            <!-- /wp:shortcode -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent)"}},"backgroundColor":"base"} -->
            <div class="wp-block-group has-border-color has-base-background-color has-background"
                style="border-color:color-mix(in srgb, var(--wp--preset--color--secondary) 5%, transparent);border-style:solid;border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                <!-- wp:shortcode -->
                [fcp_contact_form]
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"},"margin":{"bottom":"2rem"}},"color":{"background":"var(--wp--preset--color--base)"},"border":{"left":{"color":"var(--wp--preset--color--primary)","width":"4px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group has-background"
                style="border-left-color:var(--wp--preset--color--primary);border-left-width:4px;background-color:var(--wp--preset--color--base);padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;margin-bottom:2rem">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"secondary","className":"opacity-40"} -->
                <p class="has-secondary-color has-text-color opacity-40"
                    style="font-size:0.625rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:0.5rem">
                    Scouting
                    Line</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"secondary","fontFamily":"display"} -->
                <p class="has-secondary-color has-text-color has-display-font-family" style="font-size:1.5rem">+1 (555)
                    009-8877</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"color":{"background":"var(--wp--preset--color--base)"},"border":{"left":{"color":"var(--wp--preset--color--primary)","width":"4px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group has-border-color has-background"
                style="border-left-color:var(--wp--preset--color--primary);border-left-width:4px;background-color:var(--wp--preset--color--base);padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"0.5rem"}}},"textColor":"secondary","className":"opacity-40"} -->
                <p class="has-secondary-color has-text-color opacity-40"
                    style="font-size:0.625rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;margin-bottom:0.5rem">
                    Office
                    Hours</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"secondary","fontFamily":"display"} -->
                <p class="has-secondary-color has-text-color has-display-font-family" style="font-size:1.5rem">08:00 -
                    18:00 EST</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->