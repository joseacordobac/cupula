<?php 

 /** 
  * Template Name: Main Nav
  */

  ?>

<div class="m-main-nav">
  <div class="m-main-nav__content">
    <div class="m-main-nav__logo">
      <?php template_part_atomic('atoms/a-logo/a-logo'); ?>
    </div>
    <div class="m-main-nav__menu">
      <?php wp_nav_menu(array(
        'theme_location' => 'nav-main',
        'menu_class' => 'm-main-nav nav', 
        'container' => 'div',
        'container_class' => 'm-main-nav__container',
        'container_id' => 'm-main-nav__container'
      )); ?>
    </div>
  </div>
</div>
