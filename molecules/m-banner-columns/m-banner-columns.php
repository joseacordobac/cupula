<?php

/**
 * Organism: banner two columnss
 */

 wp_enqueue_style('m-banner-columns');
 $info_btn = isset($args['info_btn']) ? $args['info_btn'] : false;

?>

<div class="m-banner-columns__content swiper-slide" style="background-color: <?php the_sub_field('background'); ?>;">
  <div class="m-banner-columns__text js-title-tranning">
    <h3 class="m-banner-columns__title js-title"><?php the_sub_field('title'); ?></h3>
    <p class="m-banner-columns__description"><?php the_sub_field('decription'); ?></p>
    
    <?php
    if(get_sub_field('btn_text')):
      template_part_atomic('atoms/a-btn/a-btn',
        array(
          'button_text' => get_sub_field('btn_text'),
          'button_link' => get_sub_field('url_btn'),
          'btn_type' => 'a-btn--primary',
          'icons_path' => get_template_directory_uri() . '/assets/icons/arrow-to-right.svg',
        )
      );
    endif;
    ?>
  </div>
  <div class="m-banner-columns__img">
    
    <?php 
    template_part_atomic('/atoms/a-img/a-img',
      array(
            'image_id' => get_sub_field('main_img'),
            'image_size' => 'large',
            'alt' => get_the_title(),
            'class' => 'm-banner-columns__image',
            'has_video' => get_sub_field('link_video'),
            'autoplay' => false,
            'has_modal' => true
    )); 

    if ($info_btn) {
      echo '<div class="m-banner-columns__content-info m-banner-columns--absolute">';

      template_part_atomic('/atoms/a-btn-info/a-btn-info',
          array(
            'custom_class' => '',
            'target' => true
          )
        );

      echo '</div>';
    }

    ?>
  </div>
</div>