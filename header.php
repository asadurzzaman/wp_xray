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
					<div class="col col-lg-3 col-xxl-3">
						<div class="site-branding logo menu-border">
							<?php the_custom_logo('new'); ?> 
						</div>
						<!-- For mobile Menu -->
						<nav id="navbar_main" class="mobile-offcanvas d-xxl-none d-xl-none"> 
							<div class="offcanvas-header">  
								<button class="btn-close float-end"></button>
							</div> 
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'menu_id'        => 'primary-menu',
									'menu_class'	=>	'nav', 
								)
							);
							?>  
						</nav>
						<a class="btn-mobile d-lg-none d-xl-none d-xxl-none" data-bs-toggle="offcanvas" href="#navbar_main" role="button" aria-controls="offcanvasExample">
						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
						</svg>
						</a>
					</div>
					<div class="d-none d-lg-block col-lg-7 col-xxl-7"> 
						<nav class="navbar navbar-expand-lg mobile-offcanvas">  
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
					<div class="d-none d-lg-block col-lg-2 col-xxl-2">
						<?php if ( class_exists( 'WooCommerce' ) ) { ?>
							<div class="wpxray-button">
								<a class="float-end button" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>"><?php _e('My Account',''); ?></a>
							</div>
						<?php } ?>
					</div> 
				</div>
			</div>
		</header><!-- #masthead -->

		<?php
		if ( is_front_page() && is_home() ) {
		// Default homepage

		} elseif ( is_front_page() ) {
		// static homepage

		} elseif ( is_home() ) {
		// blog page
			echo "<div class=".'container'.">
			<div class=".'row'.">";
		} elseif ( is_post_type_archive() ) {
		//everything else
			echo "<div class=".'container'.">
			<div class=".'row'.">";
		}elseif (is_page() ) {
		//everything else
			get_template_part( 'page-header', 'page' );
			echo "<div class=".'container'.">
			<div class=".'row'.">";
		}else{

		}
			
