<?php
/**
 * Template Name: Brands Page
 * Template Post Type: page
 *
 * @package Siverek_Teknik_Servis
 */

get_header();

$brands = array(
    array( 'name' => 'Arçelik', 'slug' => 'arcelik' ),
    array( 'name' => 'Beko', 'slug' => 'beko' ),
    array( 'name' => 'Vestel', 'slug' => 'vestel' ),
    array( 'name' => 'Bosch', 'slug' => 'bosch' ),
    array( 'name' => 'Siemens', 'slug' => 'siemens' ),
    array( 'name' => 'Samsung', 'slug' => 'samsung' ),
    array( 'name' => 'LG', 'slug' => 'lg' ),
    array( 'name' => 'Profilo', 'slug' => 'profilo' ),
    array( 'name' => 'Altus', 'slug' => 'altus' ),
    array( 'name' => 'Grundig', 'slug' => 'grundig' ),
    array( 'name' => 'Indesit', 'slug' => 'indesit' ),
    array( 'name' => 'Whirlpool', 'slug' => 'whirlpool' ),
    array( 'name' => 'Electrolux', 'slug' => 'electrolux' ),
    array( 'name' => 'Regal', 'slug' => 'regal' ),
    array( 'name' => 'Seg', 'slug' => 'seg' ),
);
?>

<main id="primary" class="site-main brands-page">
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

        <div class="brands-grid">
            <?php foreach ( $brands as $brand ) : ?>
                <?php
                get_template_part(
                    'template-parts/components/brand-card',
                    null,
                    $brand
                );
                ?>
            <?php endforeach; ?>
        </div>
    </div>
</main>

<?php
get_footer();
