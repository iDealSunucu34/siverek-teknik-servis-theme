<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Siverek_Teknik_Servis
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'siverek-teknik-servis' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'siverek-teknik-servis' ); ?></p>

                <?php get_search_form(); ?>

                <div class="error-404-links">
                    <h2><?php esc_html_e( 'Try these links:', 'siverek-teknik-servis' ); ?></h2>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home Page', 'siverek-teknik-servis' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/hizmetler/' ) ); ?>"><?php esc_html_e( 'Services', 'siverek-teknik-servis' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/iletisim/' ) ); ?>"><?php esc_html_e( 'Contact', 'siverek-teknik-servis' ); ?></a></li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
