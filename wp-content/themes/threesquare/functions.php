<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThreeSquare
 * @subpackage ThreeSquare
 * @since ThreeSquare
 * @version 1.0
 */
?>

<?php  

/**add custom menu  show in admin panel and front page */
register_nav_menus(
   array('primary-menu'=> 'Top Menu')
);
add_theme_support('custom-header');

?>

<?php  

//  YEAR-FUNCTION
function year_shortcode() {
	$year = date('Y');
	return $year;
}
add_shortcode('year', 'year_shortcode');


	
add_theme_support( 'post-thumbnails' );
the_post_thumbnail();
set_post_thumbnail_size( 50, 50);

// Image size for single posts
add_image_size( 'single-post-thumbnail', 590, 180 );



?>
