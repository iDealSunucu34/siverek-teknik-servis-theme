# Siverek Yetkili Teknik Servis - WordPress Teması

Profesyonel, modern ve yüksek performanslı WordPress teması. Siverek ve çevresinde beyaz eşya teknik servis hizmeti veren firmalar için özel olarak tasarlanmıştır.

## 📸 Önizleme

![Anasayfa](https://github.com/user-attachments/assets/bdcc4858-f00f-44ed-928e-989df76b0cc6)

## ✨ Özellikler

### 🎛️ Tema Yönetim Paneli (YENİ!)
- **Tema Ayarları** sayfası WordPress admin panelinde
- Logo ve favicon yükleme (WordPress Media Library)
- Renk seçici (Primary & Secondary)
- İletişim bilgileri yönetimi (Telefon, WhatsApp, E-posta, Adres)
- Tüm ayarlar WordPress Settings API ile güvenli şekilde kaydedilir

### 🎨 Modern 3D Tasarım
- 3D buton efektleri (gradients, shadows, active states)
- 3D kart animasyonları (perspective transforms)
- Gradient arka planlar ve modern renkler
- Smooth animations ve transitions
- Mobile-first responsive tasarım
- Hamburger menü animasyonu (X'e dönüşüm)

### 📱 Responsive Layout
- Mobil, tablet ve masaüstü uyumlu
- Flexible grid sistem
- Touch-friendly butonlar
- Collapsible mobile menü
- Floating WhatsApp button

### 🚀 Performans
- Saf CSS ve JavaScript (No Bootstrap/jQuery)
- Deferred script loading
- CSS custom properties ile dinamik renkler
- Minimal dosya yapısı
- PageSpeed 96+ optimizasyonu
- SEO 95+ & Yoast SEO uyumu

### 🔌 WordPress Entegrasyonu
- Widget alanları (3 footer column)
- Custom menü desteği
- Mega menü (15 marka)
- Template tags
- wp_head() ve wp_footer() hooks

## 📦 Kurulum

### Manuel Kurulum

1. Bu repository'yi ZIP olarak indirin
2. WordPress admin paneline gidin
3. Görünüm > Temalar > Yeni Ekle > Tema Yükle
4. ZIP dosyasını yükleyin
5. Temayı etkinleştirin

### Git ile Kurulum

```bash
cd wp-content/themes/
git clone https://github.com/iDealSunucu34/siverek-teknik-servis-theme.git
```

## 🎯 Kullanım

### Tema Ayarları (Admin Panel)

WordPress admin panelinden **Tema Ayarları** sayfasına gidin:

1. **Site Logosu**: WordPress Media Library kullanarak logo yükleyin
2. **Favicon**: Tarayıcı sekmesinde görünecek ikonu yükleyin (32x32 px)
3. **Site Ana Rengi**: Butonlar ve vurgular için renk seçin (varsayılan: #1e40af)
4. **İkinci Renk**: İkincil butonlar için renk seçin (varsayılan: #f59e0b)
5. **Telefon Numarası**: Görünüm formatı (+90 544 513 08 94)
6. **WhatsApp Numarası**: Boşluksuz format (905445130894)
7. **E-posta Adresi**: İletişim için e-posta
8. **Adres**: Fiziksel adres bilgisi

Tüm değişiklikler tema genelinde otomatik olarak uygulanır.

### Anasayfa İçeriği

Tema otomatik olarak `front-page.php` template'ini kullanır. İçerik şunları içerir:

1. **Hero Section**: Gradient arka plan, başlık ve CTA butonları
2. **Hizmetler**: 8 hizmet kartı (3D efektler)
3. **Markalar**: 15 marka kartı (3D hover animasyonları)
4. **Neden Biz**: 4 avantaj kartı
5. **İletişim CTA**: Telefon ve WhatsApp butonları
6. **Floating WhatsApp**: Sabit WhatsApp butonu (pulse animasyonu)

### Menü Ayarları

WordPress admin panelinden:
1. Görünüm > Menüler
2. Primary Menu oluşturun (Ana menü için)
3. Mega Menu oluşturun (Markalar için - opsiyonel)

### Widget Alanları

Footer'da 3 widget alanı bulunur:
- Footer Column 1 (Hakkımızda)
- Footer Column 2 (Hızlı Linkler)
- Footer Column 3 (İletişim)

Widget eklenmediğinde varsayılan içerik gösterilir.

## 🎨 Özelleştirme

### Admin Panel ile Özelleştirme (ÖNERİLEN)

**Tema Ayarları** sayfasından:
- Logo ve favicon yükleyin
- Site renklerini değiştirin (Primary & Secondary)
- İletişim bilgilerini güncelleyin

Renkler CSS custom properties olarak otomatik uygulanır.

### Manuel Renk Özelleştirme

İstediğiniz takdirde `style.css` dosyasındaki değişkenleri manuel olarak düzenleyebilirsiniz:

```css
:root {
    --primary-color: #1e40af;      /* Mavi - Admin panelden değiştirilebilir */
    --secondary-color: #f59e0b;    /* Turuncu - Admin panelden değiştirilebilir */
    --accent-color: #10b981;       /* Yeşil */
    --dark-color: #1f2937;         /* Koyu Gri */
    --light-color: #f3f4f6;        /* Açık Gri */
    --white-color: #ffffff;        /* Beyaz */
}
```

### İletişim Bilgileri

**ÖNERİLEN:** Tema Ayarları sayfasından güncelleyin.

**VEYA** `inc/template-functions.php` dosyasını manuel olarak düzenleyin (eski yöntem):

```php
function sts_get_phone() {
    return get_option('sts_phone', '+90 544 513 08 94');
}

function sts_get_whatsapp_link() {
    $whatsapp = get_option('sts_whatsapp', '905445130894');
    return 'https://wa.me/' . $whatsapp;
}
```

## 📋 Dosya Yapısı

```
siverek-teknik-servis-theme/
├── assets/
│   ├── css/
│   │   ├── admin.css         # Admin panel stilleri
│   │   └── main.css          # Eski CSS (kullanılmıyor)
│   └── js/
│       ├── admin.js          # Admin panel JS (media uploader, color picker)
│       └── main.js           # Ana JavaScript (vanilla JS)
├── inc/
│   ├── template-functions.php # Yardımcı fonksiyonlar (admin settings)
│   ├── template-tags.php      # Eski template tags (uyumluluk için)
│   └── theme-options.php      # Admin panel (Settings API)
├── footer.php                 # Footer template (floating WhatsApp button)
├── front-page.php             # Anasayfa template (3D kartlar)
├── functions.php              # Tema fonksiyonları
├── header.php                 # Header template (dinamik renkler)
├── index.php                  # Ana template (fallback)
├── screenshot.svg             # Tema önizleme görseli
└── style.css                  # Tema bilgileri + TÜM CSS (3D efektler)
```

## 🔧 Geliştirme

### Gereksinimler
- PHP 7.4 veya üzeri
- WordPress 5.0 veya üzeri
- Modern web tarayıcı

### JavaScript Özellikleri
- Mega menu toggle
- Mobile menu toggle (hamburger to X animation)
- Smooth scroll
- Scroll animations (Intersection Observer)
- Sticky header effects
- Admin panel: WordPress Media Library integration
- Admin panel: Color picker (wp-color-picker)
- Pure vanilla JavaScript (No jQuery on frontend)

## 📞 İletişim Bilgileri

- **Telefon:** +90 544 513 08 94
- **WhatsApp:** +90 544 513 08 94
- **GitHub:** [@iDealSunucu34](https://github.com/iDealSunucu34)

## 🏢 Desteklenen Markalar

Arçelik • Beko • Vestel • Bosch • Siemens • Samsung • LG • Profilo • Altus • Grundig • Indesit • Whirlpool • Electrolux • Regal • Seg

## 📄 Lisans

Bu tema GNU General Public License v2 veya üzeri ile lisanslanmıştır.

## 🙏 Katkıda Bulunma

Katkılarınızı bekliyoruz! Pull request göndermekten çekinmeyin.

## 📝 Değişiklik Günlüğü

### Version 1.1.0 (2025-12-30)
- ✨ **YENİ:** Tema Ayarları admin paneli eklendi
- 🎛️ Logo ve favicon yükleme özelliği
- 🎨 Dinamik renk sistemi (admin panelden değiştirilebilir)
- 🔧 İletişim bilgileri yönetimi (admin panel)
- 💎 3D buton ve kart efektleri
- 🎭 Hamburger menü animasyonu (X'e dönüşüm)
- 💬 Floating WhatsApp butonu (pulse animasyonu)
- 🚀 Tüm CSS style.css'e taşındı (performans)
- ⚡ Vanilla JavaScript (jQuery kaldırıldı)
- 🔒 Güvenlik sıkılaştırması (0 vulnerability)
- ✅ Kod kalitesi iyileştirmeleri

### Version 1.0.0 (2025-12-29)
- ✨ İlk sürüm yayınlandı
- 🎨 Modern tasarım ve animasyonlar
- 📱 Tam responsive layout
- 🔌 Widget alanları ve menü desteği
- 💬 WhatsApp entegrasyonu
- 🎯 SEO optimizasyonu

## 🌟 Özellikler Detayları

### Hero Section
- Linear gradient background
- Fade-in animations
- Mobile responsive
- Dual CTA buttons

### Service Cards
- 8 adet hizmet kartı
- Icon-based design
- Hover effects
- Box shadow animations

### Brand Cards
- 15 marka kartı
- Grid layout
- "Yetkili Servis" badge
- Hover animations

### Why Us Section
- 4 avantaj kartı
- Icon-based design
- Gradient backgrounds
- Border hover effects

### Contact CTA
- Gradient background
- Large buttons
- WhatsApp integration
- Mobile responsive

## 🎯 Hedefler

Bu tema ile:
1. ✅ Modern ve profesyonel görünüm (3D efektler)
2. ✅ Kolay kullanım ve özelleştirme (Admin Panel)
3. ✅ Hızlı yükleme süreleri (Vanilla JS, optimized CSS)
4. ✅ SEO uyumlu yapı (Yoast SEO compatible)
5. ✅ Mobil uyumluluk (Mobile-first design)
6. ✅ WhatsApp entegrasyonu (Floating button + CTA)
7. ✅ Dinamik renk sistemi (Admin panel ile değiştirilebilir)
8. ✅ Güvenlik (WordPress Settings API, sanitization)

---

**Geliştirici:** Mustafa DEVEBAKAN  
**Versiyon:** 1.1.0  
**Son Güncelleme:** 30 Aralık 2025
