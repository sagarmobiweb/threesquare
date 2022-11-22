<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ThreeSquare
 * @subpackage ThreeSquare
 * @since ThreeSquare
 * @version 1.0
 */
 ?>

<?php
get_header();

while ( have_posts() ) : the_post();
    the_content();
endwhile; // End of the loop.

get_footer(); 

?>