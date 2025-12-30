<?php
/**
 * Template Functions
 * Helper functions for templates
 *
 * @package Siverek_Teknik_Servis
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get the site logo
 *
 * @return string Logo HTML or site name
 */
function sts_get_logo() {
    $logo_id = get_option('sts_logo');
    
    if ($logo_id) {
        $logo_url = wp_get_attachment_url($logo_id);
        $logo_alt = get_bloginfo('name');
        
        if ($logo_url) {
            return '<img src="' . esc_url($logo_url) . '" alt="' . esc_attr($logo_alt) . '" class="site-logo" />';
        }
    }
    
    return '<span class="site-name">' . esc_html(get_bloginfo('name')) . '</span>';
}

/**
 * Get phone number for display
 *
 * @return string Formatted phone number
 */
function sts_get_phone() {
    return get_option('sts_phone', '+90 544 513 08 94');
}

/**
 * Get phone number for links (no spaces)
 *
 * @return string Phone number without spaces
 */
function sts_get_phone_link() {
    $phone = get_option('sts_phone', '+90 544 513 08 94');
    return str_replace(' ', '', $phone);
}

/**
 * Get WhatsApp link
 *
 * @return string WhatsApp URL
 */
function sts_get_whatsapp_link() {
    $whatsapp = get_option('sts_whatsapp', '905445130894');
    return 'https://wa.me/' . $whatsapp;
}

/**
 * Get email address
 *
 * @return string Email address
 */
function sts_get_email() {
    return get_option('sts_email', '');
}

/**
 * Get address
 *
 * @return string Address
 */
function sts_get_address() {
    return get_option('sts_address', '');
}
