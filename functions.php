<?php
/**
 * Siverek Yetkili Teknik Servis Theme Functions
 *
 * @package Siverek_Teknik_Servis
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function siverek_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'siverek-teknik-servis'),
        'mega-menu' => __('Mega Menu (Markalar)', 'siverek-teknik-servis'),
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'siverek_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function siverek_enqueue_assets() {
    // Main theme stylesheet (style.css)
    wp_enqueue_style('siverek-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Main JS (deferred for performance)
    wp_enqueue_script('siverek-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', array('strategy' => 'defer', 'in_footer' => true));
}
add_action('wp_enqueue_scripts', 'siverek_enqueue_assets');

/**
 * Register Widget Areas
 */
function siverek_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'siverek-teknik-servis'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in footer column 1.', 'siverek-teknik-servis'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'siverek-teknik-servis'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here to appear in footer column 2.', 'siverek-teknik-servis'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 3', 'siverek-teknik-servis'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here to appear in footer column 3.', 'siverek-teknik-servis'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'siverek_widgets_init');

/**
 * Theme options page
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for this theme
 */
require get_template_directory() . '/inc/template-tags.php';
