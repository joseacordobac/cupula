<?php 

/** Main nav for header in site */
wp_enqueue_style('m-nav');
wp_enqueue_script('m-nav');

wp_nav_menu(array(
  'theme_location' => 'nav-main',
  'menu_class' => 'm-nav', 
  'container' => 'div',
  'container_class' => 'm-nav__container',
  'container_id' => 'm-nav__container'
));
