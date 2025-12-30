<?php
/**
 * Front Page Template
 *
 * @package Siverek_Teknik_Servis
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Siverek Yetkili Teknik Servis</h1>
            <p class="hero-subtitle">Tüm Beyaz Eşya Markalarında Profesyonel Teknik Servis Hizmeti</p>
            <div class="hero-cta">
                <a href="tel:<?php echo esc_attr(sts_get_phone_link()); ?>" class="btn btn-primary btn-large">
                    📞 Hemen Ara
                </a>
                <a href="<?php echo esc_url(sts_get_whatsapp_link()); ?>" target="_blank" class="btn btn-secondary btn-large">
                    💬 WhatsApp ile Ulaş
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="hizmetler" class="services-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Hizmetlerimiz</h2>
            <p class="section-subtitle">Tüm beyaz eşya cihazlarınız için profesyonel teknik servis hizmeti</p>
        </div>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🧺</div>
                <h3 class="service-title">Çamaşır Makinesi Tamiri</h3>
                <p class="service-description">Tüm markalarda çamaşır makinesi arıza tamiri ve bakım hizmeti</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🍽️</div>
                <h3 class="service-title">Bulaşık Makinesi Tamiri</h3>
                <p class="service-description">Bulaşık makinesi arıza tespiti ve onarım hizmeti</p>
            </div>

            <div class="service-card">
                <div class="service-icon">❄️</div>
                <h3 class="service-title">Buzdolabı Tamiri</h3>
                <p class="service-description">Buzdolabı soğutma sistemleri tamiri ve bakımı</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🔥</div>
                <h3 class="service-title">Fırın/Ocak Tamiri</h3>
                <p class="service-description">Ankastre fırın ve ocak arıza tamiri hizmeti</p>
            </div>

            <div class="service-card">
                <div class="service-icon">❄️</div>
                <h3 class="service-title">Klima Servisi</h3>
                <p class="service-description">Klima montaj, bakım ve arıza giderme hizmeti</p>
            </div>

            <div class="service-card">
                <div class="service-icon">📺</div>
                <h3 class="service-title">Televizyon Tamiri</h3>
                <p class="service-description">LED, LCD ve plazma TV onarım hizmeti</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🌀</div>
                <h3 class="service-title">Kurutma Makinesi Tamiri</h3>
                <p class="service-description">Çamaşır kurutma makinesi arıza tamiri</p>
            </div>

            <div class="service-card">
                <div class="service-icon">🧊</div>
                <h3 class="service-title">Derin Dondurucu Tamiri</h3>
                <p class="service-description">Derin dondurucu soğutma sistemi tamiri</p>
            </div>
        </div>
    </div>
</section>

<!-- Brands Section -->
<section id="markalar" class="brands-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Yetkili Olduğumuz Markalar</h2>
            <p class="section-subtitle">Tüm beyaz eşya markalarında yetkili servis hizmeti sunuyoruz</p>
        </div>

        <div class="brands-grid">
            <?php
            $brands = array(
                'Arçelik', 'Beko', 'Vestel', 'Bosch', 'Siemens',
                'Samsung', 'LG', 'Profilo', 'Altus', 'Grundig',
                'Indesit', 'Whirlpool', 'Electrolux', 'Regal', 'Seg'
            );
            foreach ($brands as $brand) :
            ?>
                <div class="brand-card">
                    <h3 class="brand-name"><?php echo esc_html($brand); ?></h3>
                    <span class="brand-badge">Yetkili Servis</span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Us Section -->
<section class="why-us-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Neden Bizi Seçmelisiniz?</h2>
            <p class="section-subtitle">Profesyonel hizmet anlayışımızla yanınızdayız</p>
        </div>

        <div class="why-us-grid">
            <div class="why-us-card">
                <div class="why-us-icon">✅</div>
                <h3 class="why-us-title">Garantili Hizmet</h3>
                <p class="why-us-description">Tüm tamir ve bakım hizmetlerimizde garanti sağlıyoruz</p>
            </div>

            <div class="why-us-card">
                <div class="why-us-icon">⚡</div>
                <h3 class="why-us-title">Hızlı Müdahale</h3>
                <p class="why-us-description">Arıza ihbarlarınıza en kısa sürede müdahale ediyoruz</p>
            </div>

            <div class="why-us-card">
                <div class="why-us-icon">👨‍🔧</div>
                <h3 class="why-us-title">Uzman Teknisyenler</h3>
                <p class="why-us-description">Alanında uzman ve sertifikalı teknisyen kadromuz</p>
            </div>

            <div class="why-us-card">
                <div class="why-us-icon">💰</div>
                <h3 class="why-us-title">Uygun Fiyat</h3>
                <p class="why-us-description">Piyasa koşullarına uygun, şeffaf fiyatlandırma</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section id="iletisim" class="contact-cta-section">
    <div class="container">
        <div class="contact-cta-content">
            <h2 class="contact-cta-title">Hemen Arayın, Sorunlarınıza Anında Çözüm Bulalım!</h2>
            <p class="contact-cta-subtitle">7/24 Arıza İhbar Hattımızdan Bize Ulaşabilirsiniz</p>
            <div class="contact-cta-buttons">
                <a href="tel:<?php echo esc_attr(sts_get_phone_link()); ?>" class="btn btn-white btn-large">
                    📞 <?php echo esc_html(sts_get_phone()); ?>
                </a>
                <a href="<?php echo esc_url(sts_get_whatsapp_link()); ?>" target="_blank" class="btn btn-outline-white btn-large">
                    💬 WhatsApp ile Ulaş
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
