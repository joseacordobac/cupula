<?php

/**
 * Organism: banner full
 */

 wp_enqueue_style('m-banner-full');
 $info_btn = isset($args['info_btn']) ? $args['info_btn'] : false;

?>

<div class="m-banner-full__content swiper-slide" style="background-color: <?php the_sub_field('background'); ?>;">
  <div class="m-banner-full__text js-title-tranning">
    <h3 class="m-banner-full__title js-title"><?php the_sub_field('title'); ?></h3>
    <p class="m-banner-full__description"><?php the_sub_field('decription'); ?></p>

    <?php
    if(get_sub_field('btn_text') || get_sub_field('url_btn')):
      get_template_part('/atoms/a-btn/a-btn',null,
        array(
          'button_text' => get_sub_field('btn_text'),
          'button_link' => get_sub_field('url_btn'),
          'btn_type' => 'a-btn--primary',
          'icons_path' => get_template_directory_uri() . '/assets/icons/arrow-to-right.svg',
        )
      );
    endif;

    if ($info_btn) {
      echo '<div class="m-banner-full__content-info m-banner-full--absolute">';

        get_template_part('/atoms/a-btn-info/a-btn-info', null,
          array(
            'custom_class' => '',
            'target' => true
          )
        );

      echo '</div>';
    }

    ?>
    
  </div>
  <div class="m-banner-full__img">
    <?php 
      $id_img = get_sub_field('main_img');
      $image = wp_get_attachment_image($id_img, 'large', false, array('class' => 'm-banner-full__image'));
      
      if(get_sub_field('link_video')){
        $video_attr = [
          'src' => get_sub_field('link_video')['url'],
          'frameborder' => '0',
          'allowfullscreen' => 'allowfullscreen',
          'muted' => 'muted',
          'autoplay' => 'autoplay',
          'loop' => 'loop',
          'class' => 'm-banner-full__video-src',
        ];

        echo "<div class='m-banner-full__video'>" . wp_video_shortcode( $video_attr )."</div>";

      }else{
        echo $image;
      }
    ?>
  </div>
</div>