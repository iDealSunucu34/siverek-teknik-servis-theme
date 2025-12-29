# Siverek Yetkili Teknik Servis - WordPress Teması

Profesyonel, modern ve yüksek performanslı WordPress teması. Siverek ve çevresinde beyaz eşya teknik servis hizmeti veren firmalar için özel olarak tasarlanmıştır.

## 📸 Önizleme

![Anasayfa](https://github.com/user-attachments/assets/bdcc4858-f00f-44ed-928e-989df76b0cc6)

## ✨ Özellikler

### 🎨 Modern Tasarım
- Gradient arka planlar ve modern renkler
- Box shadow ve hover efektleri
- Smooth animations ve transitions
- Mobile-first responsive tasarım

### 📱 Responsive Layout
- Mobil, tablet ve masaüstü uyumlu
- Flexible grid sistem
- Touch-friendly butonlar
- Collapsible mobile menü

### 🚀 Performans
- Optimize edilmiş CSS ve JavaScript
- Minimal dosya yapısı
- Hızlı yükleme süreleri
- SEO uyumlu yapı

### 🔌 WordPress Entegrasyonu
- Widget alanları (3 footer column)
- Custom menü desteği
- Mega menü (15 marka)
- Template tags

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

### Anasayfa İçeriği

Tema otomatik olarak `front-page.php` template'ini kullanır. İçerik şunları içerir:

1. **Hero Section**: Gradient arka plan, başlık ve CTA butonları
2. **Hizmetler**: 8 hizmet kartı
3. **Markalar**: 15 marka kartı
4. **Neden Biz**: 4 avantaj kartı
5. **İletişim CTA**: Telefon ve WhatsApp butonları

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

### Renk Paleti

Tema CSS custom properties kullanır. `assets/css/main.css` dosyasındaki değişkenleri düzenleyerek renkleri özelleştirebilirsiniz:

```css
:root {
    --primary-color: #1e40af;      /* Mavi */
    --secondary-color: #f59e0b;    /* Turuncu */
    --accent-color: #10b981;       /* Yeşil */
    --dark-color: #1f2937;         /* Koyu Gri */
    --light-color: #f3f4f6;        /* Açık Gri */
    --white-color: #ffffff;        /* Beyaz */
}
```

### İletişim Bilgileri

İletişim bilgilerini değiştirmek için `inc/template-tags.php` dosyasını düzenleyin:

```php
function siverek_get_phone() {
    return '+90 544 513 08 94';
}

function siverek_get_whatsapp_link() {
    return 'https://wa.me/905445130894';
}
```

## 📋 Dosya Yapısı

```
siverek-teknik-servis-theme/
├── assets/
│   ├── css/
│   │   └── main.css          # Ana CSS dosyası
│   └── js/
│       └── main.js           # Ana JavaScript dosyası
├── inc/
│   └── template-tags.php     # Yardımcı fonksiyonlar
├── footer.php                # Footer template
├── front-page.php            # Anasayfa template
├── functions.php             # Tema fonksiyonları
├── header.php                # Header template
├── index.php                 # Ana template
├── screenshot.svg            # Tema önizleme görseli
└── style.css                 # Tema bilgileri
```

## 🔧 Geliştirme

### Gereksinimler
- PHP 7.4 veya üzeri
- WordPress 5.0 veya üzeri
- Modern web tarayıcı

### JavaScript Özellikleri
- Mega menu toggle
- Mobile menu toggle
- Smooth scroll
- Scroll animations (Intersection Observer)
- Sticky header effects

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
1. ✅ Modern ve profesyonel görünüm
2. ✅ Kolay kullanım ve özelleştirme
3. ✅ Hızlı yükleme süreleri
4. ✅ SEO uyumlu yapı
5. ✅ Mobil uyumluluk
6. ✅ WhatsApp entegrasyonu

---

**Geliştirici:** Mustafa DEVEBAKAN  
**Versiyon:** 1.0.0  
**Son Güncelleme:** 29 Aralık 2025
