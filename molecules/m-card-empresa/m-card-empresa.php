<?php 
   
   /**
    * @param array $args
    * @since 1.0.0
    * @example
    * get_template_part('/molecules/m-card-empresa/m-card-empresa', null, $args);
   */

      wp_enqueue_style('m-card-empresa');
      wp_enqueue_script('m-card-empresa');

      $imagen_id = isset($args['imagen_id']) ? $args['imagen_id'] : '';
      $number = isset($args['number']) ? $args['number'] : '';
      $card_title = isset($args['card_title']) ? $args['card_title'] : '';
      $card_desc = isset($args['card_desc']) ? $args['card_desc'] : '';
      $btn_text = isset($args['btn_text']) ? $args['btn_text'] : '';
      $btn_link = isset($args['btn_link']) ? $args['btn_link'] : '';

   ?>

   <div class="m-card-empresa">
      <div class="m-card-empresa__head">
         <?php get_template_part('/atoms/a-img/a-img', null,
            array(
                  'image_id' => $imagen_id,
                  'image_size' => 'large',
                  'alt' => 'betek',
                  'class' => 'o-you-get-img',
                  'aspect_ratio' => '1/1'
            ));
         ?>
      </div>
      <div class="m-card-empresas-body">
         <div class="m-card-emprsas-body__title">
            <span class="m-card-eempresas-body__title-tag"><?php echo $number; ?></span>
            <h3 class="m-card-empresas-body__title-text"><?php echo $card_title; ?></h3>
         </div>
         <p class="m-card-empresas-body__desc">
            <?php echo $card_desc; ?>
         </p>
         <?php 
            get_template_part('/atoms/a-btn/a-btn', null, 
               array(
                     'button_text' => $btn_text,
                     'button_link' => $btn_link,
                     'btn_type' => 'a-btn--primary',
                     'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                  )
            );?>
      </div>
   </div>