<?php
/**
 * Theme Customizer
 *
 * @package Siverek_Teknik_Servis
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function siverek_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector'        => '.site-title a',
                'render_callback' => 'siverek_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector'        => '.site-description',
                'render_callback' => 'siverek_customize_partial_blogdescription',
            )
        );
    }

    // Contact Information Section
    $wp_customize->add_section(
        'siverek_contact_info',
        array(
            'title'    => __( 'Contact Information', 'siverek-teknik-servis' ),
            'priority' => 30,
        )
    );

    // Phone Number
    $wp_customize->add_setting(
        'siverek_phone',
        array(
            'default'           => '+90 544 513 08 94',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'siverek_phone',
        array(
            'label'    => __( 'Phone Number', 'siverek-teknik-servis' ),
            'section'  => 'siverek_contact_info',
            'type'     => 'text',
        )
    );

    // WhatsApp Number
    $wp_customize->add_setting(
        'siverek_whatsapp',
        array(
            'default'           => '905445130894',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'siverek_whatsapp',
        array(
            'label'       => __( 'WhatsApp Number', 'siverek-teknik-servis' ),
            'description' => __( 'Enter without + or spaces (e.g., 905445130894)', 'siverek-teknik-servis' ),
            'section'     => 'siverek_contact_info',
            'type'        => 'text',
        )
    );

    // Email
    $wp_customize->add_setting(
        'siverek_email',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_email',
        )
    );

    $wp_customize->add_control(
        'siverek_email',
        array(
            'label'    => __( 'Email Address', 'siverek-teknik-servis' ),
            'section'  => 'siverek_contact_info',
            'type'     => 'email',
        )
    );

    // Address
    $wp_customize->add_setting(
        'siverek_address',
        array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        )
    );

    $wp_customize->add_control(
        'siverek_address',
        array(
            'label'    => __( 'Address', 'siverek-teknik-servis' ),
            'section'  => 'siverek_contact_info',
            'type'     => 'textarea',
        )
    );

    // Social Media Section
    $wp_customize->add_section(
        'siverek_social_media',
        array(
            'title'    => __( 'Social Media', 'siverek-teknik-servis' ),
            'priority' => 31,
        )
    );

    // Facebook
    $wp_customize->add_setting(
        'siverek_facebook',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'siverek_facebook',
        array(
            'label'    => __( 'Facebook URL', 'siverek-teknik-servis' ),
            'section'  => 'siverek_social_media',
            'type'     => 'url',
        )
    );

    // Instagram
    $wp_customize->add_setting(
        'siverek_instagram',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'siverek_instagram',
        array(
            'label'    => __( 'Instagram URL', 'siverek-teknik-servis' ),
            'section'  => 'siverek_social_media',
            'type'     => 'url',
        )
    );

    // Twitter
    $wp_customize->add_setting(
        'siverek_twitter',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(
        'siverek_twitter',
        array(
            'label'    => __( 'Twitter URL', 'siverek-teknik-servis' ),
            'section'  => 'siverek_social_media',
            'type'     => 'url',
        )
    );
}
add_action( 'customize_register', 'siverek_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function siverek_customize_partial_blogname() {
    bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function siverek_customize_partial_blogdescription() {
    bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function siverek_customize_preview_js() {
    wp_enqueue_script( 'siverek-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), SIVEREK_VERSION, true );
}
add_action( 'customize_preview_init', 'siverek_customize_preview_js' );
