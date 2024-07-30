<?php 

/**
 * Template part: Gallery Slider
 * 
 */

  $repater = isset($args['repeater']) ? $args['repeater'] : '';
  $img_id = isset($args['img_id']) ? $args['img_id'] : '';
  $custom_css = isset($args['custom_css']) ? $args['custom_css'] : '';

?>

<div class="o-gallery-slider <?php echo $custom_css; ?>">
  <div class="o-gallery-slider__content swiper o-gallery-slider__swiper">
    <div class="swiper-wrapper">

      <?php while(have_rows($repater)) : the_row(); ?>
        <div class="o-gallery-slider__item swiper-slide">
          <?php 
            template_part_atomic('atoms/a-img/a-img',  
              array(
                "image_id" => get_sub_field($img_id),
                "image_size" => 'full',
                "class" => 'gallery-slider__img',
                "img_radius" => true,
                )
              ); 
          ?>
        </div>
      <?php endwhile; ?>
    
    </div>
  </div>
</div>
