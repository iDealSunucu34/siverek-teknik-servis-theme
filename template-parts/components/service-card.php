<?php
/**
 * Service Card Component
 *
 * @package Siverek_Teknik_Servis
 */

if ( ! isset( $args['title'] ) ) {
    return;
}

$title = $args['title'];
$icon = isset( $args['icon'] ) ? $args['icon'] : '🔧';
$link = isset( $args['link'] ) ? $args['link'] : '#';
$description = isset( $args['description'] ) ? $args['description'] : '';
?>

<div class="service-card">
    <a href="<?php echo esc_url( $link ); ?>" class="service-card-link">
        <div class="service-card-icon">
            <span class="icon"><?php echo esc_html( $icon ); ?></span>
        </div>
        <div class="service-card-content">
            <h3 class="service-card-title"><?php echo esc_html( $title ); ?></h3>
            <?php if ( ! empty( $description ) ) : ?>
                <p class="service-card-description"><?php echo esc_html( $description ); ?></p>
            <?php endif; ?>
        </div>
    </a>
</div>
