<?php 

 /** 
  * Template Name: Main Nav
  */

  ?>

<div class="m-main-nav">
  <div class="m-main-nav__content">
    <?php template_part_atomic('molecules/m-hamburger/m-hamburger'); ?>
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
    <?php if(wp_is_mobile()){
        template_part_atomic('molecules/m-nav-btn/m-nav-btn');
    } ?>

    <div class="m-main-nav__social">
      <?php  template_part_atomic( 'molecules/m-socials/m-socials', array(
              'custom_class' => 'm-main-nav__socials',
      ) ); ?>
    </div>
  </div>
</div>
