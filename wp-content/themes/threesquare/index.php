<?php
/**
 * The index page of a  theme
 *
 * This is the template that displays the blogs
 *
 * @package ThreeSquare
 * @subpackage ThreeSquare
 * @since ThreeSquare
 * @version 1.0
 */

get_header();
?>

<?php 
/* Start the Loop */
while ( have_posts() ) : the_post();
	  the_content();
	get_template_part('template-parts/post/content');

	// If comments are open or there is at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) {
	// 	comments_template();
	// }
endwhile; 
// End of the loop.

get_footer();

?>


