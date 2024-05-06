<?php 

/** Main nav for header in site */
wp_enqueue_style('m-nav-footer');
wp_enqueue_script('m-nav-footer');

$custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

wp_nav_menu(array(
  'theme_location' => 'nav-footer',
  'menu_class' => 'm-nav-footer ' . $custom_class, 
  'container' => 'div',
  'container_class' => 'm-nav__foote-container',
  'container_id' => 'm-nav__footer-container'
));
