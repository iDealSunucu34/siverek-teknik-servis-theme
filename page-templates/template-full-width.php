<?php
/**
 * Template Name: Full Width
 * Template Post Type: page
 *
 * @package Siverek_Teknik_Servis
 */

get_header();
?>

<main id="primary" class="site-main full-width-page">
    <div class="container-full">
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content/content', 'page' );

        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
