<?php
/**
 * The header for our theme
 *
 * @package Siverek_Teknik_Servis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'siverek-teknik-servis' ); ?></a>

<div id="page" class="site">
    <header id="masthead" class="site-header sticky-header">
        <div class="container">
            <div class="header-inner">
                <div class="site-branding">
                    <?php
                    if ( has_custom_logo() ) :
                        the_custom_logo();
                    else :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                        $siverek_description = get_bloginfo( 'description', 'display' );
                        if ( $siverek_description || is_customize_preview() ) :
                            ?>
                            <p class="site-description"><?php echo $siverek_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="header-contact">
                    <a href="tel:+905445130894" class="phone-link">
                        <span class="icon">📞</span>
                        <span class="text">+90 544 513 08 94</span>
                    </a>
                    <a href="https://wa.me/905445130894" class="whatsapp-link" target="_blank" rel="noopener noreferrer">
                        <span class="icon">💬</span>
                        <span class="text">WhatsApp</span>
                    </a>
                </div>

                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="screen-reader-text"><?php esc_html_e( 'Menu', 'siverek-teknik-servis' ); ?></span>
                </button>

                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'fallback_cb'    => false,
                        )
                    );
                    ?>
                    <?php get_template_part( 'template-parts/header/mega-menu' ); ?>
                </nav>
            </div>
        </div>
    </header>
