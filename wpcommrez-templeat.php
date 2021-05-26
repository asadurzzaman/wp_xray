/**
 * Template Name: Wp Commerze
 * The template for displaying Home Page Content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BizMe
 */
get_header();
?>

    
<?php echo apply_filters( 'the_content', $post->post_content ); ?> 
  

<?php
get_footer();