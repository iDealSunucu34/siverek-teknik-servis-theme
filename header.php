<?php
/**
 * The header for our theme
 *
 * @package Siverek_Teknik_Servis
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container">
        <div class="header-content">
            <div class="site-branding">
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </h1>
                <?php
                $description = get_bloginfo('description', 'display');
                if ($description || is_customize_preview()) :
                ?>
                    <p class="site-description"><?php echo $description; ?></p>
                <?php endif; ?>
            </div>

            <nav class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => 'div',
                    'container_class' => 'primary-menu-wrapper',
                    'fallback_cb'    => false,
                ));
                ?>

                <div class="mega-menu-wrapper">
                    <button class="mega-menu-toggle">
                        Markalar <span class="toggle-icon">▼</span>
                    </button>
                    <div class="mega-menu-content">
                        <div class="mega-menu-grid">
                            <?php
                            $brands = array(
                                'Arçelik', 'Beko', 'Vestel', 'Bosch', 'Siemens',
                                'Samsung', 'LG', 'Profilo', 'Altus', 'Grundig',
                                'Indesit', 'Whirlpool', 'Electrolux', 'Regal', 'Seg'
                            );
                            foreach ($brands as $brand) :
                            ?>
                                <a href="#" class="mega-menu-item"><?php echo esc_html($brand); ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="header-cta">
                <a href="tel:<?php echo esc_attr(siverek_get_phone_link()); ?>" class="btn btn-primary">
                    📞 <?php echo esc_html(siverek_get_phone()); ?>
                </a>
            </div>
        </div>
    </div>
</header>

<main id="main-content" class="site-main">
