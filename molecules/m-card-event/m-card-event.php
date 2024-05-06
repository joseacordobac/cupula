<?php 

  /**
   * @param array $args
   * M-card-event
   */

   wp_enqueue_style('m-card-event');
   wp_enqueue_script('m-card-event');

   $img_id = isset($args['img_id']) ? $args['img_id'] : '';
   $title = isset($args['title']) ? $args['title'] : '';
   $excerpt = isset($args['excerpt']) ? $args['excerpt'] : '';
   $fecha = isset($args['fecha']) ? $args['fecha'] : '';
   $hora = isset($args['hora']) ? $args['hora'] : '';
   $medio = isset($args['medio']) ? $args['medio'] : '';
   $plataforma = isset($args['plataforma']) ? $args['plataforma'] : '';
   $btn_text = isset($args['btn_text']) ? $args['btn_text'] : '';
   $btn_link = isset($args['btn_link']) ? $args['btn_link'] : '';
   $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

?>

<div class="m-card-event <?php echo $custom_class; ?>">
  <div class="m-card-event__head">
    <?php get_template_part('atoms/a-img/a-img', null, array(
      'image_id' => $img_id,
      'image_size' => 'medium',
      'alt' => $title,
      'aspect_ratio' => '1/1',
      'class' => 'm-card-event__img',
      'custom_class' => 'border-radius',
    )); ?>
  </div>

  <div class="m-card-event__body">
    <h4 class="m-card-event__body-title"><?php echo $title; ?></h4>
    
    <p class="m-card-event__body-excerpt"><?php echo $excerpt; ?></p>
    
    <div class="m-card-event-info">
      
      <div class="m-card-event-info__content">
        <span class="m-card-event-infor__lebel m-card-event-infor__fecha-label">Fecha</span>
        <span class="m-card-event-infor__data"><?php echo $fecha; ?></span>
      </div>
      
      <div class="m-card-event-info__content">
        <span class="m-card-event-infor__lebel m-card-event-infor__hora-label">Hora</span>
        <span class="m-card-event-infor__data"><?php echo $hora; ?></span>
      </div>
      
      <div class="m-card-event-info__content">
        <span class="m-card-event-infor__lebel m-card-event-infor__medio-label"><?php echo $medio; ?></span>
        <span class="m-card-event-infor__data"><?php echo $plataforma; ?></span>
      </div>
    </div>
    <div class="m-card-btn">
      <?php get_template_part('atoms/a-btn/a-btn', null, array(
        'button_text' => $btn_text,
        'button_link' => $btn_link,
        'btn_type' => 'a-btn--primary',
        'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
      )); ?>
    </div>

  </div>

</div>

