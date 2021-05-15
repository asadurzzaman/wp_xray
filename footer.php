<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpxray
 */
?>
			</div>
		</div>
	<footer id="colophon" class="site-footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="sidebar sidebar-one"> 
							<?php dynamic_sidebar( 'sidebar-1' ); ?> 
						</div>
					</div>
					<div class="col-lg-3">
						<div class="sidebar sidebar-two">
							<?php dynamic_sidebar('sidebar-2'); ?>  
						</div>
					</div>
					<div class="col-lg-3">
						<div class="sidebar sidebar-three">
							<?php dynamic_sidebar('sidebar-3'); ?>  
						</div>
					</div>
					<div class="col-lg-3">
						<div class="sidebar sidebar-four">
							<?php dynamic_sidebar('sidebar-4'); ?>  
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="site-info"> 
						<p>&copy; <?php echo esc_html( the_date('Y') ) ?> <a href="/"><?php esc_url( site_url() ); ?>WPXRAY</a> . <?php esc_html_e( 'All rights reserved' ) ?></p>  
						</div><!-- .site-info -->	
					</div> 
				</div>
			</div>		
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
