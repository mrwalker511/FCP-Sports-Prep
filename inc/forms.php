<?php
/**
 * Form rendering and handlers.
 *
 * @package Fl_Coastal_Prep
 * @since   1.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

function fl_coastal_prep_register_form_shortcodes()
{
    if (!function_exists('add_shortcode')) {
        return;
    }

    add_shortcode('fcp_form_message', 'fl_coastal_prep_form_message_shortcode');
    add_shortcode('fcp_contact_form', 'fl_coastal_prep_contact_form_shortcode');
    add_shortcode('fcp_apply_form', 'fl_coastal_prep_apply_form_shortcode');
    add_shortcode('fcp_schedule_meta', 'fl_coastal_prep_schedule_meta_shortcode');
    add_shortcode('fcp_schedule_link', 'fl_coastal_prep_schedule_link_shortcode');
}
add_action('init', 'fl_coastal_prep_register_form_shortcodes');

function fl_coastal_prep_form_message_shortcode()
{
    // Use transient-based one-time message instead of URL parameters (security + performance).
    if (!isset($_GET['fcp_msg_id'])) {
        return '';
    }

    $msg_id = sanitize_text_field(wp_unslash($_GET['fcp_msg_id']));
    $transient_key = 'fcp_form_msg_' . $msg_id;
    $status = get_transient($transient_key);

    // One-time use: delete transient after reading.
    if (false !== $status) {
        delete_transient($transient_key);
    }

    $allowed_statuses = array('success', 'invalid', 'error');
    if (!in_array($status, $allowed_statuses, true)) {
        return '';
    }

    if ('success' === $status) {
        return '<p class="fcp-form__message fcp-form__message--success">Thanks for reaching out! We will be in touch shortly.</p>';
    }

    if ('invalid' === $status) {
        return '<p class="fcp-form__message fcp-form__message--error">There was a problem validating your submission. Please try again.</p>';
    }

    return '<p class="fcp-form__message fcp-form__message--error">Something went wrong while sending your message. Please try again.</p>';
}

function fl_coastal_prep_contact_form_shortcode()
{
    $action_url = admin_url('admin-post.php');
    $nonce = wp_create_nonce('fcp_contact_form');

    ob_start();
    ?>
    <form class="fcp-form fcp-contact-form" method="post" action="<?php echo esc_url($action_url); ?>">
        <input type="hidden" name="action" value="fcp_contact_form">
        <input type="hidden" name="fcp_contact_nonce" value="<?php echo esc_attr($nonce); ?>">

        <div class="fcp-form__grid">
            <label>
                Full Name
                <input type="text" name="contact_name" required>
            </label>
            <label>
                Email Address
                <input type="email" name="contact_email" required>
            </label>
            <label>
                Phone Number
                <input type="tel" name="contact_phone">
            </label>
            <label>
                Reason for Inquiry
                <select name="contact_reason" required>
                    <option value="Admissions">Admissions</option>
                    <option value="Programs">Programs</option>
                    <option value="Schedule">Schedule</option>
                    <option value="General">General</option>
                </select>
            </label>
        </div>

        <label class="fcp-form__full">
            Message
            <textarea name="contact_message" rows="5" required></textarea>
        </label>

        <button class="fcp-form__submit" type="submit">Send Message</button>
    </form>
    <?php
    return ob_get_clean();
}

function fl_coastal_prep_apply_form_shortcode()
{
    $action_url = admin_url('admin-post.php');
    $nonce = wp_create_nonce('fcp_apply_form');

    ob_start();
    ?>
    <form class="fcp-form fcp-apply-form" method="post" action="<?php echo esc_url($action_url); ?>">
        <input type="hidden" name="action" value="fcp_apply_form">
        <input type="hidden" name="fcp_apply_nonce" value="<?php echo esc_attr($nonce); ?>">

        <div class="fcp-form__grid">
            <label>
                Student First Name
                <input type="text" name="student_first_name" required>
            </label>
            <label>
                Student Last Name
                <input type="text" name="student_last_name" required>
            </label>
            <label>
                Guardian Email
                <input type="email" name="guardian_email" required>
            </label>
            <label>
                Guardian Phone
                <input type="tel" name="guardian_phone" required>
            </label>
            <label>
                Primary Sport
                <input type="text" name="primary_sport" required>
            </label>
            <label>
                Expected Graduation Year
                <input type="text" name="graduation_year" required>
            </label>
        </div>

        <label class="fcp-form__full">
            Additional Details
            <textarea name="application_notes" rows="5" required></textarea>
        </label>

        <button class="fcp-form__submit" type="submit">Submit Application</button>
    </form>
    <?php
    return ob_get_clean();
}

function fl_coastal_prep_schedule_meta_shortcode($atts)
{
    // Lowercase all attribute keys for consistency.
    if (is_array($atts)) {
        $atts = array_change_key_case($atts, CASE_LOWER);
    }

    $atts = shortcode_atts(
        array(
            'field' => '',
            'format' => 'M d',
            'fallback' => '',
        ),
        $atts,
        'fcp_schedule_meta'
    );

    if (empty($atts['field'])) {
        return '';
    }

    $post_id = get_the_ID();
    if (!$post_id) {
        return '';
    }

    $field = strtolower($atts['field']);
    $value = get_post_meta($post_id, $field, true);

    if ('game_date' === $field && $value) {
        // Cache formatted dates to avoid redundant strtotime() calls.
        static $date_cache = array();
        $cache_key = $post_id . '_' . $value . '_' . $atts['format'];

        if (!isset($date_cache[$cache_key])) {
            $timestamp = strtotime($value);
            if ($timestamp) {
                $date_cache[$cache_key] = date_i18n($atts['format'], $timestamp);
            } else {
                $date_cache[$cache_key] = '';
            }
        }

        $value = $date_cache[$cache_key];
    }

    if (!$value && $atts['fallback']) {
        $value = $atts['fallback'];
    }

    return esc_html($value);
}

function fl_coastal_prep_schedule_link_shortcode($atts)
{
    // Lowercase all attribute keys for consistency.
    if (is_array($atts)) {
        $atts = array_change_key_case($atts, CASE_LOWER);
    }

    $atts = shortcode_atts(
        array(
            'label' => 'View Details',
        ),
        $atts,
        'fcp_schedule_link'
    );

    $url = get_permalink();
    if (!$url) {
        return '';
    }

    return sprintf(
        '<a class="fcp-schedule-link" href="%s">%s</a>',
        esc_url($url),
        esc_html($atts['label'])
    );
}

function fl_coastal_prep_handle_contact_form()
{
    if (empty($_POST['fcp_contact_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['fcp_contact_nonce'])), 'fcp_contact_form')) {
        fl_coastal_prep_redirect_form('invalid');
    }

    $name = sanitize_text_field(wp_unslash($_POST['contact_name'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['contact_email'] ?? ''));
    $phone = sanitize_text_field(wp_unslash($_POST['contact_phone'] ?? ''));
    $reason = sanitize_text_field(wp_unslash($_POST['contact_reason'] ?? ''));
    $message = sanitize_textarea_field(wp_unslash($_POST['contact_message'] ?? ''));

    if (!$name || !$email || !$message) {
        fl_coastal_prep_redirect_form('error');
    }

    $recipient = get_option('admin_email');
    $subject = sprintf('New Contact Inquiry from %s', $name);
    $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nReason: {$reason}\n\nMessage:\n{$message}";
    $headers = array('Reply-To: ' . $email);

    $sent = wp_mail($recipient, $subject, $body, $headers);

    if (!$sent) {
        error_log(sprintf('FL Coastal Prep: Contact form submission failed for %s (%s)', $name, $email));
        fl_coastal_prep_redirect_form('error');
    }

    fl_coastal_prep_redirect_form('success');
}
add_action('admin_post_fcp_contact_form', 'fl_coastal_prep_handle_contact_form');
add_action('admin_post_nopriv_fcp_contact_form', 'fl_coastal_prep_handle_contact_form');

function fl_coastal_prep_handle_apply_form()
{
    if (empty($_POST['fcp_apply_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['fcp_apply_nonce'])), 'fcp_apply_form')) {
        fl_coastal_prep_redirect_form('invalid');
    }

    $first_name = sanitize_text_field(wp_unslash($_POST['student_first_name'] ?? ''));
    $last_name = sanitize_text_field(wp_unslash($_POST['student_last_name'] ?? ''));
    $email = sanitize_email(wp_unslash($_POST['guardian_email'] ?? ''));
    $phone = sanitize_text_field(wp_unslash($_POST['guardian_phone'] ?? ''));
    $sport = sanitize_text_field(wp_unslash($_POST['primary_sport'] ?? ''));
    $year = sanitize_text_field(wp_unslash($_POST['graduation_year'] ?? ''));
    $notes = sanitize_textarea_field(wp_unslash($_POST['application_notes'] ?? ''));

    if (!$first_name || !$last_name || !$email || !$phone || !$sport || !$year) {
        fl_coastal_prep_redirect_form('error');
    }

    $recipient = get_option('admin_email');
    $subject = sprintf('New Application: %s %s', $first_name, $last_name);
    $body = "Student: {$first_name} {$last_name}\nGuardian Email: {$email}\nGuardian Phone: {$phone}\nSport: {$sport}\nGraduation Year: {$year}\n\nAdditional Details:\n{$notes}";
    $headers = array('Reply-To: ' . $email);

    $sent = wp_mail($recipient, $subject, $body, $headers);

    if (!$sent) {
        error_log(sprintf('FL Coastal Prep: Application form submission failed for %s %s (%s)', $first_name, $last_name, $email));
        fl_coastal_prep_redirect_form('error');
    }

    fl_coastal_prep_redirect_form('success');
}
add_action('admin_post_fcp_apply_form', 'fl_coastal_prep_handle_apply_form');
add_action('admin_post_nopriv_fcp_apply_form', 'fl_coastal_prep_handle_apply_form');

function fl_coastal_prep_redirect_form($status)
{
    // Generate unique message ID and store status in transient (60 second TTL).
    $message_id = wp_generate_uuid4();
    $transient_key = 'fcp_form_msg_' . $message_id;
    set_transient($transient_key, $status, 60);

    $redirect = wp_get_referer();
    if (!$redirect) {
        $redirect = home_url('/');
    }

    // Use message ID in URL instead of status (prevents XSS/CSRF).
    $redirect = add_query_arg('fcp_msg_id', $message_id, $redirect);
    wp_safe_redirect($redirect);
    exit;
}
