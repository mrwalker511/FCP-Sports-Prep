<?php
/**
 * Title: Game Schedule and Results
 * Slug: fl-coastal-prep/schedule-results
 * Categories: featured, query
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:6rem;padding-bottom:6rem">

    <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"schedule","order":"ASC","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1rem"}}} -->

        <!-- wp:group {"style":{"border":{"width":"1px","style":"solid","color":"rgba(17,34,64,0.05)"},"color":{"background":"var(--wp--preset--color--base)"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"className":"schedule-card","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group schedule-card has-background"
            style="border-color:rgba(17,34,64,0.05);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--base);padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"3rem"}}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase"}},"textColor":"base","className":"opacity-40"} -->
                    <p class="has-text-align-center has-base-color has-text-color opacity-40"
                        style="font-size:0.625rem;font-weight:700;text-transform:uppercase">Date</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:post-date {"format":"M d","style":{"typography":{"fontSize":"2.25rem","fontStyle":"italic","lineHeight":"1"}},"textColor":"secondary","fontFamily":"display"} /-->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.5625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"primary"} -->
                    <p class="has-primary-color has-text-color"
                        style="font-size:0.5625rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">
                        Conference Game</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:post-title {"style":{"typography":{"fontSize":"1.875rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"secondary","fontFamily":"display"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"flex-end"}} -->
            <div class="wp-block-group">
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"style":{"typography":{"fontSize":"0.5625rem","fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"},"border":{"width":"1px","style":"solid","color":"rgba(17,34,64,0.1)"}},"className":"is-style-outline","textColor":"secondary"} -->
                    <div class="wp-block-button is-style-outline"><a
                            class="wp-block-button__link has-secondary-color has-text-color wp-element-button"
                            style="border-color:rgba(17,34,64,0.1);border-style:solid;border-width:1px;font-size:0.5625rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">View
                            Details</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <!-- /wp:post-template -->
    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->