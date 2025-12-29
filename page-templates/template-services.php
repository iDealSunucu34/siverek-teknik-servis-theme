<?php
/**
 * Template Name: Services Page
 * Template Post Type: page
 *
 * @package Siverek_Teknik_Servis
 */

get_header();

$services = array(
    array(
        'title' => __( 'Çamaşır Makinesi Tamiri', 'siverek-teknik-servis' ),
        'icon'  => '🧺',
        'description' => __( 'Profesyonel çamaşır makinesi tamir hizmeti', 'siverek-teknik-servis' ),
    ),
    array(
        'title' => __( 'Bulaşık Makinesi Tamiri', 'siverek-teknik-servis' ),
        'icon'  => '🍽️',
        'description' => __( 'Hızlı ve güvenilir bulaşık makinesi tamiri', 'siverek-teknik-servis' ),
    ),
    array(
        'title' => __( 'Buzdolabı Tamiri', 'siverek-teknik-servis' ),
        'icon'  => '❄️',
        'description' => __( 'Uzman buzdolabı tamir servisi', 'siverek-teknik-servis' ),
    ),
    array(
        'title' => __( 'Fırın/Ocak Tamiri', 'siverek-teknik-servis' ),
        'icon'  => '🔥',
        'description' => __( 'Fırın ve ocak tamir hizmeti', 'siverek-teknik-servis' ),
    ),
    array(
        'title' => __( 'Klima Servisi', 'siverek-teknik-servis' ),
        'icon'  => '❄️',
        'description' => __( 'Klima montaj, bakım ve tamir', 'siverek-teknik-servis' ),
    ),
    array(
        'title' => __( 'Televizyon Tamiri', 'siverek-teknik-servis' ),
        'icon'  => '📺',
        'description' => __( 'Televizyon tamir ve bakım hizmeti', 'siverek-teknik-servis' ),
    ),
    array(
        'title' => __( 'Kurutma Makinesi Tamiri', 'siverek-teknik-servis' ),
        'icon'  => '🌪️',
        'description' => __( 'Kurutma makinesi tamir servisi', 'siverek-teknik-servis' ),
    ),
    array(
        'title' => __( 'Derin Dondurucu Tamiri', 'siverek-teknik-servis' ),
        'icon'  => '🧊',
        'description' => __( 'Derin dondurucu tamir hizmeti', 'siverek-teknik-servis' ),
    ),
);
?>

<main id="primary" class="site-main services-page">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

        <?php
        endwhile;
        ?>

        <div class="services-grid">
            <?php foreach ( $services as $service ) : ?>
                <?php
                get_template_part(
                    'template-parts/components/service-card',
                    null,
                    $service
                );
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php
get_footer();
