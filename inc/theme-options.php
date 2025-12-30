<?php
/**
 * Theme Options Page
 * Admin panel for theme customization
 *
 * @package Siverek_Teknik_Servis
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add theme options page to admin menu
 */
function sts_add_theme_options_page() {
    add_menu_page(
        'Tema Ayarları',                    // Page title
        'Tema Ayarları',                    // Menu title
        'manage_options',                   // Capability
        'sts-theme-options',                // Menu slug
        'sts_render_theme_options_page',    // Callback function
        'dashicons-admin-generic',          // Icon
        61                                  // Position
    );
}
add_action('admin_menu', 'sts_add_theme_options_page');

/**
 * Register theme settings
 */
function sts_register_theme_settings() {
    // Logo
    register_setting('sts_theme_options', 'sts_logo', array(
        'sanitize_callback' => 'absint',
        'default' => ''
    ));
    
    // Favicon
    register_setting('sts_theme_options', 'sts_favicon', array(
        'sanitize_callback' => 'absint',
        'default' => ''
    ));
    
    // Primary Color
    register_setting('sts_theme_options', 'sts_primary_color', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#1e40af'
    ));
    
    // Secondary Color
    register_setting('sts_theme_options', 'sts_secondary_color', array(
        'sanitize_callback' => 'sanitize_hex_color',
        'default' => '#f59e0b'
    ));
    
    // Phone
    register_setting('sts_theme_options', 'sts_phone', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '+90 544 513 08 94'
    ));
    
    // WhatsApp
    register_setting('sts_theme_options', 'sts_whatsapp', array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => '905445130894'
    ));
    
    // Email
    register_setting('sts_theme_options', 'sts_email', array(
        'sanitize_callback' => 'sanitize_email',
        'default' => ''
    ));
    
    // Address
    register_setting('sts_theme_options', 'sts_address', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'default' => ''
    ));
}
add_action('admin_init', 'sts_register_theme_settings');

/**
 * Render theme options page
 */
function sts_render_theme_options_page() {
    if (!current_user_can('manage_options')) {
        return;
    }
    
    // Check if settings were saved
    if (isset($_GET['settings-updated'])) {
        add_settings_error('sts_messages', 'sts_message', 'Ayarlar kaydedildi.', 'updated');
    }
    
    settings_errors('sts_messages');
    ?>
    <div class="wrap sts-theme-options">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        
        <form method="post" action="options.php">
            <?php
            settings_fields('sts_theme_options');
            ?>
            
            <table class="form-table" role="presentation">
                <!-- Logo -->
                <tr>
                    <th scope="row">
                        <label for="sts_logo">Site Logosu</label>
                    </th>
                    <td>
                        <div class="sts-media-uploader">
                            <input type="hidden" id="sts_logo" name="sts_logo" value="<?php echo esc_attr(get_option('sts_logo')); ?>" />
                            <button type="button" class="button sts-upload-button" data-target="sts_logo">
                                Logo Yükle
                            </button>
                            <button type="button" class="button sts-remove-button" data-target="sts_logo" style="<?php echo get_option('sts_logo') ? '' : 'display:none;'; ?>">
                                Logoyu Kaldır
                            </button>
                            <div class="sts-media-preview" id="sts_logo_preview">
                                <?php
                                $logo_id = get_option('sts_logo');
                                if ($logo_id) {
                                    echo wp_get_attachment_image($logo_id, 'medium');
                                }
                                ?>
                            </div>
                        </div>
                        <p class="description">Site başlığında görünecek logo.</p>
                    </td>
                </tr>
                
                <!-- Favicon -->
                <tr>
                    <th scope="row">
                        <label for="sts_favicon">Favicon</label>
                    </th>
                    <td>
                        <div class="sts-media-uploader">
                            <input type="hidden" id="sts_favicon" name="sts_favicon" value="<?php echo esc_attr(get_option('sts_favicon')); ?>" />
                            <button type="button" class="button sts-upload-button" data-target="sts_favicon">
                                Favicon Yükle
                            </button>
                            <button type="button" class="button sts-remove-button" data-target="sts_favicon" style="<?php echo get_option('sts_favicon') ? '' : 'display:none;'; ?>">
                                Favicon'u Kaldır
                            </button>
                            <div class="sts-media-preview" id="sts_favicon_preview">
                                <?php
                                $favicon_id = get_option('sts_favicon');
                                if ($favicon_id) {
                                    echo wp_get_attachment_image($favicon_id, 'thumbnail');
                                }
                                ?>
                            </div>
                        </div>
                        <p class="description">Tarayıcı sekmesinde görünecek küçük ikon. (32x32 px önerilir)</p>
                    </td>
                </tr>
                
                <!-- Primary Color -->
                <tr>
                    <th scope="row">
                        <label for="sts_primary_color">Site Ana Rengi</label>
                    </th>
                    <td>
                        <input type="text" id="sts_primary_color" name="sts_primary_color" value="<?php echo esc_attr(get_option('sts_primary_color', '#1e40af')); ?>" class="sts-color-picker" />
                        <p class="description">Ana butonlar ve vurgular için kullanılacak renk.</p>
                    </td>
                </tr>
                
                <!-- Secondary Color -->
                <tr>
                    <th scope="row">
                        <label for="sts_secondary_color">İkinci Renk</label>
                    </th>
                    <td>
                        <input type="text" id="sts_secondary_color" name="sts_secondary_color" value="<?php echo esc_attr(get_option('sts_secondary_color', '#f59e0b')); ?>" class="sts-color-picker" />
                        <p class="description">İkincil butonlar ve aksan rengi.</p>
                    </td>
                </tr>
                
                <!-- Phone -->
                <tr>
                    <th scope="row">
                        <label for="sts_phone">Telefon Numarası</label>
                    </th>
                    <td>
                        <input type="text" id="sts_phone" name="sts_phone" value="<?php echo esc_attr(get_option('sts_phone', '+90 544 513 08 94')); ?>" class="regular-text" />
                        <p class="description">Görünüm formatı: +90 544 513 08 94</p>
                    </td>
                </tr>
                
                <!-- WhatsApp -->
                <tr>
                    <th scope="row">
                        <label for="sts_whatsapp">WhatsApp Numarası</label>
                    </th>
                    <td>
                        <input type="text" id="sts_whatsapp" name="sts_whatsapp" value="<?php echo esc_attr(get_option('sts_whatsapp', '905445130894')); ?>" class="regular-text" />
                        <p class="description">Boşluksuz format: 905445130894</p>
                    </td>
                </tr>
                
                <!-- Email -->
                <tr>
                    <th scope="row">
                        <label for="sts_email">E-posta Adresi</label>
                    </th>
                    <td>
                        <input type="email" id="sts_email" name="sts_email" value="<?php echo esc_attr(get_option('sts_email')); ?>" class="regular-text" />
                        <p class="description">İletişim için e-posta adresi.</p>
                    </td>
                </tr>
                
                <!-- Address -->
                <tr>
                    <th scope="row">
                        <label for="sts_address">Adres</label>
                    </th>
                    <td>
                        <textarea id="sts_address" name="sts_address" rows="3" class="large-text"><?php echo esc_textarea(get_option('sts_address')); ?></textarea>
                        <p class="description">Fiziksel adres bilgisi.</p>
                    </td>
                </tr>
            </table>
            
            <?php submit_button('Ayarları Kaydet'); ?>
        </form>
    </div>
    <?php
}

/**
 * Enqueue admin scripts and styles
 */
function sts_enqueue_admin_assets($hook) {
    // Only load on our theme options page
    if ($hook !== 'toplevel_page_sts-theme-options') {
        return;
    }
    
    // WordPress color picker
    wp_enqueue_style('wp-color-picker');
    
    // WordPress media uploader
    wp_enqueue_media();
    
    // Admin CSS
    wp_enqueue_style(
        'sts-admin-css',
        get_template_directory_uri() . '/assets/css/admin.css',
        array(),
        '1.0.0'
    );
    
    // Admin JS
    wp_enqueue_script(
        'sts-admin-js',
        get_template_directory_uri() . '/assets/js/admin.js',
        array('jquery', 'wp-color-picker'),
        '1.0.0',
        true
    );
}
add_action('admin_enqueue_scripts', 'sts_enqueue_admin_assets');

/**
 * Add favicon to site head
 */
function sts_add_favicon() {
    $favicon_id = get_option('sts_favicon');
    if ($favicon_id) {
        $favicon_url = wp_get_attachment_url($favicon_id);
        if ($favicon_url) {
            echo '<link rel="icon" href="' . esc_url($favicon_url) . '" />' . "\n";
        }
    }
}
add_action('wp_head', 'sts_add_favicon');
