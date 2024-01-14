<?php
/**
 * The template for displaying all single posts

 */

get_header(); ?>


<section id="tablesection">
  <div class="aboutcontainer">
 <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>
	</div></div>
<?php
get_footer();

