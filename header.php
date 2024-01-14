<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	 <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/assets/css/star-rating-svg.css">
   <script src="<?php bloginfo('template_directory');?>/assets/js/jquery.star-rating-svg.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<section id="hero">

		<header class="header">
  <?php $heroimg = get_the_post_thumbnail_url( get_the_ID(), 'full' );?>
  <div class="container-fluid mainhero desktop" style="background: linear-gradient(to right,rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1)),  url(<?php echo $heroimg;?>">
    <div class="top-header-left">
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id, 'full' );

      ?>
      <a href="<?php echo home_url();?>"><img src="<?php echo $image[0]; ?>"  alt="top 10 casino hotels wordlwide 1"></a>
  <?php if(is_front_page ()){?>    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>
		<?php }
		else
		{?>
		<h2><?php the_title(); ?></h2>
		<?php }?>
      <div class="button"> <a href="<?php echo home_url();?>/#tablesection">Explore Today <img src="<?php bloginfo('template_directory');?>/assets/images/vector.png"> </a></div>
    </div>
  </div>
  <div class="container-fluid mainhero mobile" style="background: linear-gradient(to bottom right,rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.9)),  url(<?php echo $heroimg;?>">
    <div class="top-header-left">
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id, 'full' );

      ?>
      <img src="<?php echo $image[0]; ?>" alt="top 10 casino hotels wordlwide 1">
     <?php if(is_front_page ()){?>  <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>
		<?php }
		else
		{?>
		<h2><?php the_title(); ?></h2>
		<?php }?>
      <div class="button"> <a href="#tablesection">Explore Today <img src="<?php bloginfo('template_directory');?>/assets/images/vector.png"> </a></div>
    </div>
  </div>
</header>
</section><!-- #masthead -->

	