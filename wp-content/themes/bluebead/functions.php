<?php
 
//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' ); 

// Adding theme support for custom backgrounds
add_custom_background();

// Adding feed links to header
add_theme_support( 'automatic-feed-links' );

// Adding theme support for post thumbnails
add_theme_support( 'post-thumbnails' );

//Register area for custom menu
function register_my_menu() {
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}
?>
