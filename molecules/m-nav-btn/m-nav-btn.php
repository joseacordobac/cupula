<?php 

/** Main nav for header in site */
wp_enqueue_style('m-nav-btn');
wp_enqueue_script('m-nav-btn');

?>

<div class="m-nav-btn"> <?php

if(wp_is_mobile()){
  wp_nav_menu(array(
    'theme_location' => 'nav-main',
    'menu_class' => '', 
    'container' => 'div',
    'container_class' => '',
    'container_id' => ''
  ));
}

wp_nav_menu(array(
  'theme_location' => 'nav-btn',
  'menu_class' => 'm-nav-btn nav-btn', 
  'container' => 'div',
  'container_class' => 'm-nav-btn__container',
  'container_id' => 'm-nav-btn__container'
));
?>
</div>