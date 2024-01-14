<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
<footer id="colophon" class="site-footer">
  <?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id, 'full' );

  ?>
  <div class="flogo">  <a href="<?php echo home_url();?>"><img src="<?php echo $image[0]; ?>" alt="top 10 casino hotels wordlwide 1"></a> </div>
  <div class="navbar">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'footer',
    ) );
    ?>
  </div>
  <div class="fclogo">
    <?php dynamic_sidebar( 'footer-1' ); ?>
  </div>
  <div class="fcopy">
    <?php dynamic_sidebar( 'footer-2' ); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body></html>