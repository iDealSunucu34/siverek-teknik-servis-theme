<?php
/**
 * Mega Menu Template Part
 *
 * @package Siverek_Teknik_Servis
 */

$brands = array(
    'arcelik'     => __( 'Arçelik Yetkili Servis', 'siverek-teknik-servis' ),
    'beko'        => __( 'Beko Yetkili Servis', 'siverek-teknik-servis' ),
    'vestel'      => __( 'Vestel Yetkili Servis', 'siverek-teknik-servis' ),
    'bosch'       => __( 'Bosch Yetkili Servis', 'siverek-teknik-servis' ),
    'siemens'     => __( 'Siemens Yetkili Servis', 'siverek-teknik-servis' ),
    'samsung'     => __( 'Samsung Yetkili Servis', 'siverek-teknik-servis' ),
    'lg'          => __( 'LG Yetkili Servis', 'siverek-teknik-servis' ),
    'profilo'     => __( 'Profilo Yetkili Servis', 'siverek-teknik-servis' ),
    'altus'       => __( 'Altus Yetkili Servis', 'siverek-teknik-servis' ),
    'grundig'     => __( 'Grundig Yetkili Servis', 'siverek-teknik-servis' ),
    'indesit'     => __( 'Indesit Yetkili Servis', 'siverek-teknik-servis' ),
    'whirlpool'   => __( 'Whirlpool Yetkili Servis', 'siverek-teknik-servis' ),
    'electrolux'  => __( 'Electrolux Yetkili Servis', 'siverek-teknik-servis' ),
    'regal'       => __( 'Regal Yetkili Servis', 'siverek-teknik-servis' ),
    'seg'         => __( 'Seg Yetkili Servis', 'siverek-teknik-servis' ),
);
?>

<div class="mega-menu-wrapper">
    <button class="mega-menu-toggle" aria-expanded="false" aria-controls="mega-menu">
        <span><?php esc_html_e( 'Markalar', 'siverek-teknik-servis' ); ?></span>
        <svg class="toggle-icon" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
    
    <div id="mega-menu" class="mega-menu" aria-hidden="true">
        <div class="mega-menu-inner">
            <h3 class="mega-menu-title"><?php esc_html_e( 'Yetkili Servislerimiz', 'siverek-teknik-servis' ); ?></h3>
            <div class="mega-menu-grid">
                <?php foreach ( $brands as $slug => $name ) : ?>
                    <a href="<?php echo esc_url( home_url( '/marka/' . $slug . '/' ) ); ?>" class="mega-menu-item">
                        <span class="brand-icon">✓</span>
                        <span class="brand-name"><?php echo esc_html( $name ); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
