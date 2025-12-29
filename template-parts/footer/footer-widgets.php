<?php
/**
 * Footer Widgets Template Part
 *
 * @package Siverek_Teknik_Servis
 */

if ( ! is_active_sidebar( 'footer-1' ) && ! is_active_sidebar( 'footer-2' ) && ! is_active_sidebar( 'footer-3' ) ) {
    return;
}
?>

<div class="footer-widgets-container">
    <div class="container">
        <div class="footer-widget-area">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <div class="footer-widget footer-widget-1">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <div class="footer-widget footer-widget-2">
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                </div>
            <?php endif; ?>

            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <div class="footer-widget footer-widget-3">
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
