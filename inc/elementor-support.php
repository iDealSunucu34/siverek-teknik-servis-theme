<?php
/**
 * Elementor Support
 *
 * @package Siverek_Teknik_Servis
 */

/**
 * Register Elementor support
 */
function siverek_register_elementor_support() {
    // Add Elementor support
    add_theme_support( 'elementor' );
    
    // Add Elementor Pro support
    add_theme_support( 'elementor-pro' );
}
add_action( 'after_setup_theme', 'siverek_register_elementor_support' );

/**
 * Enqueue Elementor custom CSS
 */
function siverek_elementor_custom_css() {
    wp_enqueue_style( 'siverek-elementor-custom', SIVEREK_THEME_URI . '/assets/css/elementor-custom.css', array(), SIVEREK_VERSION );
}
add_action( 'elementor/frontend/after_enqueue_styles', 'siverek_elementor_custom_css' );

/**
 * Register custom Elementor widgets location
 */
function siverek_elementor_widgets_location( $widgets_manager ) {
    // Can be used to register custom Elementor widgets
}
add_action( 'elementor/widgets/register', 'siverek_elementor_widgets_location' );

/**
 * Disable Elementor default colors and fonts
 */
function siverek_elementor_disable_defaults() {
    update_option( 'elementor_disable_color_schemes', 'yes' );
    update_option( 'elementor_disable_typography_schemes', 'yes' );
}
add_action( 'after_switch_theme', 'siverek_elementor_disable_defaults' );

/**
 * Add custom colors to Elementor
 */
function siverek_add_elementor_colors() {
    $colors = array(
        array(
            '_id'   => 'siverek_primary',
            'title' => __( 'Primary', 'siverek-teknik-servis' ),
            'color' => '#1e40af',
        ),
        array(
            '_id'   => 'siverek_secondary',
            'title' => __( 'Secondary', 'siverek-teknik-servis' ),
            'color' => '#f59e0b',
        ),
        array(
            '_id'   => 'siverek_accent',
            'title' => __( 'Accent', 'siverek-teknik-servis' ),
            'color' => '#10b981',
        ),
        array(
            '_id'   => 'siverek_dark',
            'title' => __( 'Dark', 'siverek-teknik-servis' ),
            'color' => '#1f2937',
        ),
        array(
            '_id'   => 'siverek_light',
            'title' => __( 'Light', 'siverek-teknik-servis' ),
            'color' => '#f3f4f6',
        ),
    );

    update_option( 'elementor_custom_colors', $colors );
}
add_action( 'after_switch_theme', 'siverek_add_elementor_colors' );

/**
 * Elementor page settings
 */
function siverek_elementor_page_settings() {
    // Set default page layout
    update_option( 'elementor_page_title_selector', 'h1.entry-title' );
    update_option( 'elementor_stretched_section_container', '.container' );
    update_option( 'elementor_container_width', '1280' );
}
add_action( 'after_switch_theme', 'siverek_elementor_page_settings' );

/**
 * Disable Elementor Google Fonts
 */
function siverek_disable_elementor_google_fonts() {
    add_filter( 'elementor/frontend/print_google_fonts', '__return_false' );
}
add_action( 'init', 'siverek_disable_elementor_google_fonts' );

/**
 * Optimize Elementor frontend
 */
function siverek_optimize_elementor_frontend() {
    // Disable Elementor animations if not needed
    // add_filter( 'elementor/frontend/builder_content_data', function( $data ) {
    //     return $data;
    // }, 10, 2 );
}
add_action( 'init', 'siverek_optimize_elementor_frontend' );
