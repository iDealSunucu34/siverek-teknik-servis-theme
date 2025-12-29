<?php
/**
 * SEO Functions
 *
 * @package Siverek_Teknik_Servis
 */

/**
 * Add Schema.org LocalBusiness markup
 */
function siverek_schema_markup() {
    if ( ! is_front_page() ) {
        return;
    }

    $schema = array(
        '@context'    => 'https://schema.org',
        '@type'       => 'LocalBusiness',
        'name'        => get_bloginfo( 'name' ),
        'description' => get_bloginfo( 'description' ),
        'url'         => home_url( '/' ),
        'telephone'   => get_theme_mod( 'siverek_phone', '+90 544 513 08 94' ),
        'address'     => array(
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Siverek',
            'addressRegion'   => 'Şanlıurfa',
            'addressCountry'  => 'TR',
        ),
        'priceRange'  => '$$',
        'openingHoursSpecification' => array(
            array(
                '@type'     => 'OpeningHoursSpecification',
                'dayOfWeek' => array(
                    'Monday',
                    'Tuesday',
                    'Wednesday',
                    'Thursday',
                    'Friday',
                    'Saturday',
                ),
                'opens'     => '09:00',
                'closes'    => '18:00',
            ),
        ),
    );

    if ( get_theme_mod( 'siverek_email' ) ) {
        $schema['email'] = get_theme_mod( 'siverek_email' );
    }

    echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n";
}
add_action( 'wp_head', 'siverek_schema_markup' );

/**
 * Add breadcrumb schema
 */
function siverek_breadcrumb_schema() {
    if ( is_front_page() ) {
        return;
    }

    $items = array();
    $position = 1;

    // Home
    $items[] = array(
        '@type'    => 'ListItem',
        'position' => $position++,
        'name'     => __( 'Home', 'siverek-teknik-servis' ),
        'item'     => home_url( '/' ),
    );

    // Add current page
    if ( is_singular() ) {
        $items[] = array(
            '@type'    => 'ListItem',
            'position' => $position,
            'name'     => get_the_title(),
            'item'     => get_permalink(),
        );
    } elseif ( is_archive() ) {
        $items[] = array(
            '@type'    => 'ListItem',
            'position' => $position,
            'name'     => get_the_archive_title(),
            'item'     => get_pagenum_link(),
        );
    }

    $schema = array(
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    );

    echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n";
}
add_action( 'wp_head', 'siverek_breadcrumb_schema' );

/**
 * Add Open Graph meta tags
 */
function siverek_open_graph_meta() {
    // Skip if Yoast SEO is active
    if ( defined( 'WPSEO_VERSION' ) ) {
        return;
    }

    $og_title = get_the_title();
    $og_description = get_bloginfo( 'description' );
    $og_url = get_permalink();
    $og_type = 'website';
    $og_image = '';

    if ( is_singular() ) {
        $og_type = 'article';
        $og_description = get_the_excerpt();
        
        if ( has_post_thumbnail() ) {
            $og_image = get_the_post_thumbnail_url( get_the_ID(), 'large' );
        }
    }

    echo '<meta property="og:title" content="' . esc_attr( $og_title ) . '" />' . "\n";
    echo '<meta property="og:description" content="' . esc_attr( $og_description ) . '" />' . "\n";
    echo '<meta property="og:url" content="' . esc_url( $og_url ) . '" />' . "\n";
    echo '<meta property="og:type" content="' . esc_attr( $og_type ) . '" />' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />' . "\n";
    
    if ( $og_image ) {
        echo '<meta property="og:image" content="' . esc_url( $og_image ) . '" />' . "\n";
    }

    // Twitter Cards
    echo '<meta name="twitter:card" content="summary_large_image" />' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr( $og_title ) . '" />' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr( $og_description ) . '" />' . "\n";
    
    if ( $og_image ) {
        echo '<meta name="twitter:image" content="' . esc_url( $og_image ) . '" />' . "\n";
    }
}
add_action( 'wp_head', 'siverek_open_graph_meta' );

/**
 * Add canonical URL
 */
function siverek_canonical_url() {
    // Skip if Yoast SEO is active
    if ( defined( 'WPSEO_VERSION' ) ) {
        return;
    }

    if ( is_singular() ) {
        echo '<link rel="canonical" href="' . esc_url( get_permalink() ) . '" />' . "\n";
    }
}
add_action( 'wp_head', 'siverek_canonical_url' );

/**
 * Improve title tag
 */
function siverek_document_title_separator( $sep ) {
    return '|';
}
add_filter( 'document_title_separator', 'siverek_document_title_separator' );

/**
 * Add meta description
 */
function siverek_meta_description() {
    // Skip if Yoast SEO is active
    if ( defined( 'WPSEO_VERSION' ) ) {
        return;
    }

    $description = '';

    if ( is_singular() ) {
        $description = get_the_excerpt();
    } elseif ( is_home() || is_front_page() ) {
        $description = get_bloginfo( 'description' );
    } elseif ( is_category() ) {
        $description = category_description();
    } elseif ( is_tag() ) {
        $description = tag_description();
    }

    if ( $description ) {
        echo '<meta name="description" content="' . esc_attr( wp_strip_all_tags( $description ) ) . '" />' . "\n";
    }
}
add_action( 'wp_head', 'siverek_meta_description' );
