<?php
/**
 * The footer for our theme
 *
 * @package Siverek_Teknik_Servis
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

</main><!-- #main-content -->

<footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="footer-columns">
                <div class="footer-column">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <?php dynamic_sidebar('footer-1'); ?>
                    <?php else : ?>
                        <div class="footer-widget">
                            <h3 class="widget-title">Hakkımızda</h3>
                            <p>Siverek ve çevresinde tüm beyaz eşya markalarında profesyonel teknik servis hizmeti sunuyoruz. Garantili ve hızlı çözümler için bizi arayın.</p>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="footer-column">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <?php dynamic_sidebar('footer-2'); ?>
                    <?php else : ?>
                        <div class="footer-widget">
                            <h3 class="widget-title">Hızlı Linkler</h3>
                            <ul>
                                <li><a href="<?php echo esc_url(home_url('/')); ?>">Anasayfa</a></li>
                                <li><a href="#hizmetler">Hizmetlerimiz</a></li>
                                <li><a href="#markalar">Markalar</a></li>
                                <li><a href="#iletisim">İletişim</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="footer-column">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <?php dynamic_sidebar('footer-3'); ?>
                    <?php else : ?>
                        <div class="footer-widget">
                            <h3 class="widget-title">İletişim</h3>
                            <p><strong>Telefon:</strong><br><?php echo esc_html(sts_get_phone()); ?></p>
                            <p><strong>WhatsApp:</strong><br><?php echo esc_html(sts_get_phone()); ?></p>
                            <div class="social-links">
                                <a href="<?php echo esc_url(sts_get_whatsapp_link()); ?>" target="_blank" rel="noopener" class="social-link whatsapp">
                                    💬 WhatsApp
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Tüm hakları saklıdır.</p>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="<?php echo esc_url(sts_get_whatsapp_link()); ?>" target="_blank" rel="noopener" class="whatsapp-float" aria-label="WhatsApp ile İletişime Geç">
    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="30" cy="30" r="30" fill="#25D366"/>
        <path d="M30.5 15C22.492 15 16 21.492 16 29.5C16 32.125 16.7188 34.5859 17.9531 36.7188L16.0938 43.9062L23.5312 42.0781C25.5859 43.1719 27.9609 43.7812 30.5 43.7812C38.508 43.7812 45 37.289 45 29.2812C45 25.3906 43.5156 21.7188 40.8438 19.0469C38.1719 16.375 34.3906 15 30.5 15ZM30.5 17.5C33.7188 17.5 36.7188 18.6406 39.0469 20.9688C41.375 23.2969 42.4062 26.1875 42.4062 29.4062C42.4062 35.8594 37.0625 41.2031 30.6094 41.2031C28.3906 41.2031 26.2812 40.6406 24.4219 39.625L24.0469 39.4062L19.7188 40.5469L20.875 36.3281L20.6562 35.9531C19.5 34.0469 18.8594 31.8281 18.8594 29.5C18.8594 23.0469 24.0938 17.5 30.5 17.5ZM25.0938 23.4062C24.9062 23.4062 24.5781 23.4844 24.3125 23.8125C24.0469 24.1406 23.2031 24.9375 23.2031 26.5312C23.2031 28.125 24.3594 29.6562 24.5156 29.8906C24.6719 30.125 26.7188 33.4688 29.9844 34.8438C32.6094 35.9375 33.25 35.7031 33.9375 35.6406C34.625 35.5781 35.9531 34.8438 36.2188 34.0781C36.4844 33.3125 36.4844 32.6562 36.4062 32.5312C36.3281 32.4062 36.0938 32.3281 35.7656 32.1719C35.4375 32.0156 33.8438 31.2188 33.5469 31.1094C33.25 31 33.0469 30.9531 32.8125 31.2812C32.5781 31.6094 31.9844 32.3281 31.7812 32.5312C31.5781 32.7344 31.4062 32.7656 31.0781 32.6094C30.75 32.4531 29.6719 32.0938 28.375 30.9375C27.3594 30.0312 26.6875 28.9219 26.5156 28.5938C26.3438 28.2656 26.5 28.0938 26.6562 27.9375C26.7969 27.7969 26.9844 27.5781 27.1406 27.4062C27.2969 27.2344 27.3438 27.1094 27.4531 26.9062C27.5625 26.7031 27.5 26.5312 27.4219 26.375C27.3438 26.2188 26.7031 24.6562 26.4375 23.9844C26.1875 23.3594 25.9375 23.4062 25.7344 23.4062C25.5469 23.4062 25.2812 23.4062 25.0938 23.4062Z" fill="white"/>
    </svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
