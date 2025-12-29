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
                            <p><strong>Telefon:</strong><br><?php echo esc_html(siverek_get_phone()); ?></p>
                            <p><strong>WhatsApp:</strong><br><?php echo esc_html(siverek_get_phone()); ?></p>
                            <div class="social-links">
                                <a href="<?php echo esc_url(siverek_get_whatsapp_link()); ?>" target="_blank" rel="noopener" class="social-link whatsapp">
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

<?php wp_footer(); ?>
</body>
</html>
