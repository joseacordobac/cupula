<?php
  
  /**
   * Organism o-banner-qr
   * 
   * @package WordPress
   */

   wp_enqueue_style('o-banner-qr');
  ?>

<div class="o-banner-qr">
  <div class="o-banner-qr__content">
    <div class="o-banner-qr__info">
      <h3 class="o-banner-qr__info-title"><?php echo get_field('title'); ?></h3>
      <p class="o-banner-qr__info-text"><?php echo get_field('description'); ?></p>
      <div class="o-banner-qr__btns-content">
        <?php 

          get_template_part('/atoms/a-btn-info/a-btn-info', null, 
              array(
                  'custom_class' => '',
                  'target' => true
              )
          );
        ?>
      </div>

    </div>
    <div class="o-banner-qr__img">
        <?php 
           get_template_part('/atoms/a-img/a-img', null,
           array(
               'image_id' => get_field('imagen'),
               'image_size' => 'full',
               'alt' => get_field('title'),
               'class' => 'o-banner-qr__img-src',
           ));
        ?>
        <div class="img_qr">
          <img src="<?php the_field('qr'); ?>" alt="" class="o-banner-qr__qr">
        </div>
    </div>
  </div>
</div>