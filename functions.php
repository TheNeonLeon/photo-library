<?php 
function my_theme(){
wp_register_style( 'custom-gallery', plugins_url( '/style.css' , __FILE__ ) );
wp_register_style( 'custom-gallery', plugins_url( '/heading.css' , __FILE__ ) );
wp_enqueue_style('style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'my_theme');
?>