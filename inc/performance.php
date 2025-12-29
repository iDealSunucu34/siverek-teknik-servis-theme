<?php
/**
 * Performance Optimization Functions
 *
 * @package Siverek_Teknik_Servis
 */

/**
 * Remove query strings from static resources
 */
function siverek_remove_query_strings( $src ) {
    if ( strpos( $src, '?ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
}
add_filter( 'script_loader_src', 'siverek_remove_query_strings', 15 );
add_filter( 'style_loader_src', 'siverek_remove_query_strings', 15 );

/**
 * Defer JavaScript loading
 */
function siverek_defer_scripts( $tag, $handle, $src ) {
    // Skip if user is logged in (for admin bar compatibility)
    if ( is_user_logged_in() ) {
        return $tag;
    }

    // List of scripts to defer
    $defer_scripts = array(
        'siverek-navigation',
        'siverek-main',
    );

    if ( in_array( $handle, $defer_scripts, true ) ) {
        return str_replace( ' src', ' defer src', $tag );
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'siverek_defer_scripts', 10, 3 );

/**
 * Preconnect to external resources
 */
function siverek_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}
add_filter( 'wp_resource_hints', 'siverek_resource_hints', 10, 2 );

/**
 * Remove WordPress version from head
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 * Remove RSD link
 */
remove_action( 'wp_head', 'rsd_link' );

/**
 * Remove WLW manifest link
 */
remove_action( 'wp_head', 'wlwmanifest_link' );

/**
 * Remove shortlink
 */
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

/**
 * Remove adjacent posts links
 */
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );

/**
 * Disable REST API link in header
 */
remove_action( 'wp_head', 'rest_output_link_wp_head' );

/**
 * Disable oEmbed Discovery Links
 */
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );

/**
 * Remove the REST API endpoint
 */
remove_action( 'rest_api_init', 'wp_oembed_register_route' );

/**
 * Disable Gutenberg block library CSS
 */
function siverek_remove_block_css() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // WooCommerce blocks
}
add_action( 'wp_enqueue_scripts', 'siverek_remove_block_css', 100 );

/**
 * Optimize WordPress heartbeat
 */
function siverek_optimize_heartbeat( $settings ) {
    $settings['interval'] = 60; // 60 seconds
    return $settings;
}
add_filter( 'heartbeat_settings', 'siverek_optimize_heartbeat' );

/**
 * Limit post revisions
 */
if ( ! defined( 'WP_POST_REVISIONS' ) ) {
    define( 'WP_POST_REVISIONS', 3 );
}

/**
 * Clean up image sizes
 */
function siverek_clean_image_sizes( $sizes ) {
    // Remove medium_large size
    unset( $sizes['medium_large'] );
    unset( $sizes['1536x1536'] );
    unset( $sizes['2048x2048'] );
    
    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'siverek_clean_image_sizes' );

/**
 * Disable automatic image scaling
 */
add_filter( 'big_image_size_threshold', '__return_false' );

/**
 * Enable GZIP compression
 */
function siverek_enable_gzip() {
    if ( ! ob_start( 'ob_gzhandler' ) ) {
        ob_start();
    }
}
add_action( 'init', 'siverek_enable_gzip' );

/**
 * Add cache headers
 */
function siverek_add_cache_headers() {
    if ( ! is_user_logged_in() ) {
        header( 'Cache-Control: public, max-age=31536000' );
    }
}
add_action( 'send_headers', 'siverek_add_cache_headers' );

/**
 * Preload key requests
 */
function siverek_preload_resources() {
    // Preload main CSS with proper onload handler
    echo '<link rel="preload" href="' . esc_url( SIVEREK_THEME_URI . '/assets/css/main.css' ) . '" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n";
    echo '<noscript><link rel="stylesheet" href="' . esc_url( SIVEREK_THEME_URI . '/assets/css/main.css' ) . '"></noscript>' . "\n";
    
    // Preload main JS
    echo '<link rel="preload" href="' . esc_url( SIVEREK_THEME_URI . '/assets/js/navigation.js' ) . '" as="script">' . "\n";
}
add_action( 'wp_head', 'siverek_preload_resources', 1 );

/**
 * DNS prefetch
 */
function siverek_dns_prefetch() {
    echo '<link rel="dns-prefetch" href="//fonts.googleapis.com">' . "\n";
    echo '<link rel="dns-prefetch" href="//fonts.gstatic.com">' . "\n";
}
add_action( 'wp_head', 'siverek_dns_prefetch', 0 );

/**
 * Optimize database on theme deactivation
 */
function siverek_optimize_database() {
    global $wpdb;
    $wpdb->query( 'OPTIMIZE TABLE ' . $wpdb->posts );
    $wpdb->query( 'OPTIMIZE TABLE ' . $wpdb->postmeta );
    $wpdb->query( 'OPTIMIZE TABLE ' . $wpdb->comments );
    $wpdb->query( 'OPTIMIZE TABLE ' . $wpdb->commentmeta );
}
add_action( 'switch_theme', 'siverek_optimize_database' );
