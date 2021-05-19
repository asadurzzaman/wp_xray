<?php

/**
 * @package wpxray
 * 
 *  ============================
    FRONT-END ENQUEUE FUNCTIONS
    ============================
 */



function wpxray_scripts() {
	
	wp_style_add_data( 'wpxray-style', 'rtl', 'replace' );
	wp_enqueue_style('wpxray-google-fonts', wpxray_fonts_url());
    wp_enqueue_style( 'wpxray-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.0.0', 'all' );
    wp_enqueue_style( 'wpxray-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'wpxray-responsive', get_template_directory_uri() .'/assets/css/responsive.css' ); 





	
    //wp_enqueue_script( 'wpxray-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'wpxray-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'wpxray-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array(), _S_VERSION, true ); 
    
    
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.0.0', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpxray_scripts' );