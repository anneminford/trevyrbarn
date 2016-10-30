<?php
/**
 *
 * Template Name: Test template
 *
 * The template for displaying the homepage.
 *
 *
 * @package bootstrapwp
 */

get_header(); 

get_template_part('page', 'contact');?>

<div class="container">

   <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'content', 'page' ); ?>
   
   <?php endwhile; ?>

</div>



<?php get_footer(); ?>