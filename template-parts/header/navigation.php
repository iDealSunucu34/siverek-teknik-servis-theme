<?php
/**
 * Navigation Template Part
 *
 * @package Siverek_Teknik_Servis
 */

?>

<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'siverek-teknik-servis' ); ?>">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'primary',
            'menu_id'        => 'primary-menu',
            'container'      => false,
            'fallback_cb'    => '__return_false',
        )
    );
    ?>
</nav>
