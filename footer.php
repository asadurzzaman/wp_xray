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
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpxray' ) ); ?>">
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Proudly powered by %s', 'wpxray' ), 'WordPress' );
						?>
					</a>
					<span class="sep"> | </span>
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpxray' ), 'wpxray', '<a href="http://asaduzzaman.me">Asad</a>' );
						?>
				</div><!-- .site-info -->	
			</div>
			<div class="col-6">
			<div class="footer-menu">
				<ul class="nav">
					<li><a href="#">Home</a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
