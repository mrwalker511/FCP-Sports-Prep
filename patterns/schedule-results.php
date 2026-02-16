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
<!-- wp:group {"className":"section-spacing-medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group section-spacing-medium">

    <!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"schedule","order":"ASC","orderBy":"meta_value","meta_key":"game_date","meta_type":"DATE","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}}} -->

        <!-- wp:group {"className":"schedule-card has-border-color has-border-primary-15 card-padding-large has-shadow-soft","style":{"border":{"width":"1px","style":"solid"},"color":{"background":"var(--wp--preset--color--secondary)"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group schedule-card has-border-color has-border-primary-15 card-padding-large has-shadow-soft has-background"
            style="border-style:solid;border-width:1px;background-color:var(--wp--preset--color--secondary)">

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"3rem"}}} -->
            <div class="wp-block-group">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"center","className":"text-label-small letter-spacing-normal opacity-40","textColor":"base"} -->
                    <p
                        class="has-text-align-center has-base-color has-text-color text-label-small letter-spacing-normal opacity-40">
                        Date</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:shortcode -->
                    [fcp_schedule_meta field="game_date" format="M d" fallback="TBD" wrapper_class="has-base-color has-text-color has-display-font-family" wrapper_style="font-size:2.25rem;font-style:italic;line-height:1"]
                    <!-- /wp:shortcode -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:shortcode -->
                    [fcp_schedule_meta field="location" fallback="Home Game" wrapper_class="has-primary-color has-text-color" wrapper_style="font-size:0.625rem;font-weight:700;letter-spacing:0.2em;text-transform:uppercase"]
                    <!-- /wp:shortcode -->
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