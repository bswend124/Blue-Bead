<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Page
 *
 * @file           home.php
 * @package        BlueBead 
 * @author         CNMT480 SBDC-2 Development Team
 */
?>
<?php get_header(); ?>
	<div id="featured" class="grid col-940">            
        <div id="featured-image" class="grid col-460 fit"> 
                           
            <?php $options = get_option('responsive_theme_options');
			// First let's check if image was set
			    if (!empty($options['featured_content'])) {
					echo do_shortcode($options['featured_content']);
		    // If not display dummy image for preview purposes
			      } else {             
                    echo '<img class="aligncenter" src="'.get_stylesheet_directory_uri().'/images/featured-image.png" width="440" height="300" alt="" />'; 
 				  }
			?> 
                                   
        </div><!-- end of #featured-image --> 
</div><!-- end of #featured -->
               
<?php get_sidebar('home'); ?>
<?php get_footer(); ?>