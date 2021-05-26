<?php
/**
 * wpxray functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpxray
 */
/**
 * Implement the Theme Support files.
 */

require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_filter( 'get_custom_logo', 'wpcommerz_custom_logo' );


function wpcommerz_custom_logo( $html ) {

    //$html = str_replace( 'custom-logo', 'img-fluid', $html );
    $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );

    return $html;
}