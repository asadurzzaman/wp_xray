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
 * @package wpxray
 */

get_header();
?>

<div class="col-lg-9 col-xxl-9">
	<main id="primary" class="site-main"> 
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main --> 

</div>
<?php 
 		if ( is_front_page() && is_home() ) {
		// Default homepage

		} elseif ( is_front_page() ) {
		// static homepage

		} elseif ( is_home() ) {
		// blog page
			//echo "</div></div>";
		} elseif( is_post_type_archive() ) {
		//everything else
			//echo "</div></div>";
		} elseif(is_page() ) {
		//everything else
			//echo "</div></div>";
			get_sidebar(); 
		}else {

		}

get_footer();
