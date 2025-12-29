<?php
/**
 * The template for displaying the footer
 *
 * @package Siverek_Teknik_Servis
 */

?>

    <footer id="colophon" class="site-footer">
        <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
            <div class="footer-widgets">
                <div class="container">
                    <div class="footer-widget-area">
                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                            <div class="footer-widget">
                                <?php dynamic_sidebar( 'footer-1' ); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                            <div class="footer-widget">
                                <?php dynamic_sidebar( 'footer-2' ); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                            <div class="footer-widget">
                                <?php dynamic_sidebar( 'footer-3' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="site-info">
            <div class="container">
                <div class="footer-bottom">
                    <div class="copyright">
                        <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'siverek-teknik-servis' ); ?></p>
                    </div>
                    
                    <?php
                    if ( has_nav_menu( 'footer' ) ) :
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer',
                                'menu_id'        => 'footer-menu',
                                'container'      => 'nav',
                                'container_class' => 'footer-navigation',
                                'depth'          => 1,
                                'fallback_cb'    => false,
                            )
                        );
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </footer>

    <?php get_template_part( 'template-parts/components/whatsapp-button' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
