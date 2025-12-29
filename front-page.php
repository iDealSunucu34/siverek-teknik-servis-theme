<?php
/**
 * The template for displaying the front page
 *
 * @package Siverek_Teknik_Servis
 */

get_header();
?>

<main id="primary" class="site-main front-page">
    <?php
    while ( have_posts() ) :
        the_post();

        // Display page content
        the_content();

    endwhile;
    ?>
</main>

<?php
get_footer();
