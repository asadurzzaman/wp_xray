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
					<div class="col-2">
						<div class="site-branding">
							<?php
							the_custom_logo();
							if (is_front_page() && is_home()) :
							?>
								<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
							else :
							?>
								<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
							<?php
							endif;
							$wpxray_description = get_bloginfo('description', 'display');

							if ($wpxray_description || is_customize_preview()) :
							?>
								<p class="site-description"><?php echo $wpxray_description;?></p>
							<?php endif; ?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-10">
						<nav id="site-navigation" class="navbar">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'wpxray'); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'menu_id'        => 'primary-menu',
									'menu_class'	=>	'justify-content-center', 
								)
							);
							?>
						<?php if ( class_exists( 'WooCommerce' ) ) { ?>
							<a class="d-inline" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account',''); ?>"><?php _e('My Account',''); ?></a>
						<?php } ?>
						</nav><!-- #site-navigation -->

					</div> 
				</div>
			</div>
		</header><!-- #masthead -->
		<div class="container">
			<div class="row">
			
			
