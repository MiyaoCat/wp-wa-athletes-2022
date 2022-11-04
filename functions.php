<?php 

function getFile($path) {
  return dirname(__FILE__) . '/' . $path;
}
/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

// load css into the website's front-end
function mytheme_enqueue_style() {
    wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );

// Get menu 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

