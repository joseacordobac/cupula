<?php 

/** Main nav for header in site */
wp_enqueue_style('m-nav-btn');
wp_enqueue_script('m-nav-btn');

?>

<div class="m-nav-btn"> 
  <?php
    wp_nav_menu(array(
      'theme_location' => 'nav-btn',
      'menu_class' => 'm-nav-btn nav-btn', 
      'container' => 'div',
      'container_class' => 'm-nav-btn__container',
      'container_id' => 'm-nav-btn__container'
    ));
  ?>
</div>