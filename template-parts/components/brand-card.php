<?php
/**
 * Brand Card Component
 *
 * @package Siverek_Teknik_Servis
 */

if ( ! isset( $args['name'] ) ) {
    return;
}

$name = $args['name'];
$slug = isset( $args['slug'] ) ? $args['slug'] : sanitize_title( $name );
$link = isset( $args['link'] ) ? $args['link'] : home_url( '/marka/' . $slug . '/' );
$logo = isset( $args['logo'] ) ? $args['logo'] : '';
?>

<div class="brand-card">
    <a href="<?php echo esc_url( $link ); ?>" class="brand-card-link">
        <?php if ( ! empty( $logo ) ) : ?>
            <div class="brand-card-logo">
                <img src="<?php echo esc_url( $logo ); ?>" alt="<?php echo esc_attr( $name ); ?>" loading="lazy">
            </div>
        <?php endif; ?>
        <div class="brand-card-content">
            <h3 class="brand-card-name"><?php echo esc_html( $name ); ?></h3>
            <span class="brand-card-label"><?php esc_html_e( 'Yetkili Servis', 'siverek-teknik-servis' ); ?></span>
        </div>
    </a>
</div>
