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
    get_template_part(
      '/atoms/a-btn/a-btn',
      null,
      array(
        'button_text' => get_sub_field('btn_text'),
        'button_link' => get_sub_field('url_btn'),
        'btn_type' => 'a-btn--primary',
        'icons_path' => get_template_directory_uri() . '/assets/icons/arrow-to-right.svg',
      )
    );
    ?>
  </div>
  <div class="m-banner-columns__img">
    <?php $id_img = get_sub_field('main_img');
    $image = wp_get_attachment_image($id_img, 'large', false, array('class' => 'm-banner-columns__image'));
    echo $image;

    if ($info_btn) {
      echo '<div class="m-banner-columns__content-info m-banner-columns--absolute">';
      while (have_rows('button')) : the_row();

        get_template_part(
          '/atoms/a-btn-info/a-btn-info',
          null,
          array(
            'button_text' => get_sub_field('button_text'),
            'button_link' => get_sub_field('button_link'),
            'button_img' => get_sub_field('button_img'),
            'custom_color' => get_sub_field('color_icono'),
            'custom_class' => '',
            'target' => true
          )
        );
      endwhile;
      echo '</div>';
    }

    ?>
  </div>
</div>