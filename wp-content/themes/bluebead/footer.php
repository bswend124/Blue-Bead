<div id="footer">
    
    <?php
        // Check if there's anything in the bottom menu nav
        if ( has_nav_menu( 'bottom-menu' ) ) {
            // if there is, add it
            wp_nav_menu( array(
                'menu' => 'Bottom Menu',
                'container' => 'div',
                'container_class' => 'bottom-menu',
                'falback_cb' => false,
                'theme_location' => 'bottom-menu',
                )
            );
        }
    ?>


    <p>
    <strong>Copyright 2013 <?php bloginfo('name'); ?> | All Rights Reserved.</strong> </a> 
    Designed by UWSP CNMT Development Team
    </p>
    <p><a href="<?php bloginfo('rss2_url'); ?>">Latest Stories RSS</a> | <a href="<?php comments_rss_link('comment feed'); ?>">Comments RSS</a></p>
    </div>
</div>
 
</body>
</html>
