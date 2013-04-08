<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title ( '|', true,'right' ); ?></title>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
		wp_head();
		wp_get_archives('type=monthly&format=link');
?>
</head>
<body <?php body_class();?> >
 
<div id="wrapper">
    <div id="header">
        <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
    
    <?php 
    	// Check if there's a top menu
    	if ( has_nav_menu ( 'top-menu' ) ) {    		
    		// If it exist, add it
    		wp_nav_menu ( array(
    			'menu' => 'Top Menu',
    			'container' => 'div'
    			'container_class' => 'top-menu',
    			'fallback_cb' => false,
    			'theme_location' => 'top-menu',
    			)
    		);
    	}
    ?>
