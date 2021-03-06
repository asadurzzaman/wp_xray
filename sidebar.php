<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpxray
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}
?>
	<div class="col-lg-3 col-xxl-3">
		<aside id="secondary" class="widget-area">
			<?php dynamic_sidebar('sidebar-blog'); ?> 
		</aside><!-- #secondary -->
	</div>
