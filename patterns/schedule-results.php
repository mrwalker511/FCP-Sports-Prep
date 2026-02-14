<?php
/**
 * Title: Game Schedule and Results
 * Slug: fl-coastal-prep/schedule-results
 * Categories: featured, query
 * Viewport Width: 1200
 * Block Types: core/query, core/post-template, core/group, core/post-title
 * Description: Schedule query loop displaying games with date, opponent, and results.
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:6rem;padding-bottom:6rem">

    <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"schedule","order":"ASC","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}}} -->

        <!-- wp:group {"style":{"border":{"width":"1px","style":"solid","color":"color-mix(in srgb, var(--wp--preset--color--primary) 15%, transparent)"},"color":{"background":"var(--wp--preset--color--secondary)"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}},"shadow":"var(--wp--preset--shadow--soft)"},"className":"schedule-card","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group schedule-card has-border-color has-background"
            style="border-color:color-mix(in srgb, var(--wp--preset--color--primary) 15%, transparent);border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary);padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"3rem"}}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}},"textColor":"base","className":"opacity-40"} -->
                    <p class="has-text-align-center has-base-color has-text-color opacity-40"
                        style="font-size:0.625rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase">Date</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.25rem","fontStyle":"italic","lineHeight":"1"}},"textColor":"base","fontFamily":"display"} -->
                    <p class="has-base-color has-text-color has-display-font-family"
                        style="font-size:2.25rem;font-style:italic;line-height:1">[fcp_schedule_meta field="game_date" format="M d" fallback="TBD"]</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.625rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"primary"} -->
                    <p class="has-primary-color has-text-color"
                        style="font-size:0.625rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase">[fcp_schedule_meta field="location" fallback="Home Game"]</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.875rem","fontStyle":"italic","textTransform":"uppercase"}},"textColor":"primary","fontFamily":"display"} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"flex-end"}} -->
            <div class="wp-block-group">
                <!-- wp:shortcode -->
                [fcp_schedule_link label="View Matchup"]
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontStyle":"italic"}},"className":"opacity-60"} -->
        <p class="opacity-60" style="font-size:1.25rem;font-style:italic">No games currently scheduled. Check back
            soon.</p>
        <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->