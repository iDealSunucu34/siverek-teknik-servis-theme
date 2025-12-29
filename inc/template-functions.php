<?php
/**
 * Template Functions
 *
 * @package Siverek_Teknik_Servis
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function siverek_body_classes( $classes ) {
    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter( 'body_class', 'siverek_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function siverek_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'siverek_pingback_header' );

/**
 * Sanitize SVG uploads
 */
function siverek_sanitize_svg( $data, $file, $filename, $mimes ) {
    $filetype = wp_check_filetype( $filename, $mimes );
    
    if ( 'svg' === $filetype['ext'] ) {
        $data['ext'] = 'svg';
        $data['type'] = 'image/svg+xml';
    }
    
    return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'siverek_sanitize_svg', 10, 4 );

/**
 * Add SVG to allowed upload types
 */
function siverek_mime_types( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'siverek_mime_types' );

/**
 * Custom excerpt length
 */
function siverek_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'siverek_excerpt_length' );

/**
 * Custom excerpt more
 */
function siverek_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'siverek_excerpt_more' );

/**
 * Add custom image sizes
 */
function siverek_custom_image_sizes() {
    add_image_size( 'siverek-featured', 1280, 720, true );
    add_image_size( 'siverek-thumbnail', 400, 300, true );
    add_image_size( 'siverek-medium', 800, 600, true );
}
add_action( 'after_setup_theme', 'siverek_custom_image_sizes' );

/**
 * Add lazy loading to images
 */
function siverek_add_lazy_loading( $attr, $attachment, $size ) {
    $attr['loading'] = 'lazy';
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'siverek_add_lazy_loading', 10, 3 );

/**
 * Remove emoji scripts
 */
function siverek_disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', 'siverek_disable_emojis' );

/**
 * Disable embeds
 */
function siverek_disable_embeds() {
    wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'siverek_disable_embeds' );
