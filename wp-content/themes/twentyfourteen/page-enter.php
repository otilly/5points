<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		//get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">

			<?php
			// Include the page content template.
			get_template_part( 'content', 'page' );
			?>

	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();
