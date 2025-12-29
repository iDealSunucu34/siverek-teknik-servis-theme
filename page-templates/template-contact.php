<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 *
 * @package Siverek_Teknik_Servis
 */

get_header();
?>

<main id="primary" class="site-main contact-page">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="contact-info-section">
                    <div class="contact-info-grid">
                        <div class="contact-info-item">
                            <div class="contact-icon">📞</div>
                            <h3><?php esc_html_e( 'Telefon', 'siverek-teknik-servis' ); ?></h3>
                            <p><a href="tel:+905445130894">+90 544 513 08 94</a></p>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">💬</div>
                            <h3><?php esc_html_e( 'WhatsApp', 'siverek-teknik-servis' ); ?></h3>
                            <p><a href="https://wa.me/905445130894" target="_blank" rel="noopener noreferrer">+90 544 513 08 94</a></p>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">📍</div>
                            <h3><?php esc_html_e( 'Adres', 'siverek-teknik-servis' ); ?></h3>
                            <p><?php esc_html_e( 'Siverek, Şanlıurfa', 'siverek-teknik-servis' ); ?></p>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">⏰</div>
                            <h3><?php esc_html_e( 'Çalışma Saatleri', 'siverek-teknik-servis' ); ?></h3>
                            <p><?php esc_html_e( 'Pazartesi - Cumartesi: 09:00 - 18:00', 'siverek-teknik-servis' ); ?></p>
                        </div>
                    </div>
                </div>
            </article>

        <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
