<?php
/**
 *
 * Template Name: common
 *
 * The template for displaying the homepage.
 *
 *
 * @package bootstrapwp
 */

get_header(); ?>

<div class="container">

   <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' ); ?>
   
   <?php endwhile; ?>

</div>

<script>
    jQuery('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

<?php get_footer(); ?>