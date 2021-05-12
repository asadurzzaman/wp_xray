<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpxray
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site"> 
		<header id="masthead" class="site-header">
			<div class="container overflow-hidden">
				<div class="row align-items-center">
					<div class="col-xxl-3">
						<div class="site-branding logo">
							<?php the_custom_logo(); ?> 
						</div><!-- .site-branding -->
					</div>
					<div class="col-xxl-7">
						<nav class="navbar navbar-expand-lg"> 
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarScroll">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'menu_id'        => 'primary-menu',
										'menu_class'	=>	'nav', 
									)
								);
								?> 
							</div> 
						</nav>
					</div> 
					<div class="col-xxl-2">
						<?php if ( class_exists( 'WooCommerce' ) ) { ?>
							<div class="wpxray-button">
							<a class="float-end" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>"><?php _e('My Account',''); ?></a>
						</div>
							<?php } ?>
					</div>
				</div>
			</div>
		</header><!-- #masthead -->

		<div class="container">
			<div class="row">
			
			
