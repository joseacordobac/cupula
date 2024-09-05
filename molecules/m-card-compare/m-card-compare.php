<?php 

/**
 * Template part: Card Compare
 * 
 */

wp_enqueue_style('m-card-compare');

$imagen_render_id = get_sub_field('render_imagen');
$imagen_real_id = get_sub_field('real');


?>

<div class="m-card-compare swiper-slide">

  <div class="g-content-regular">
      <?php get_template_part('/atoms/a-titles/a-titles', null, 
          array(
              'title'         => get_sub_field('proyect_name'),
              'titles-type'   => 'a-titles--simple',
            )
          ); 
      ?>
  </div>

  <div class="m-card-compare__content">
    <div class="m-card-compare__render">
      <div class="m-card-compare__img">
        <?php get_template_part('/atoms/a-img/a-img', null, array(
          'image_id' => $imagen_render_id,
          'image_class' => 'm-card-compare__render-img',
          'image_size' => 'full',
          'img_radius' => true
        )) ?>
        <div class="m-card-compare__label">
          <span class="m-card-compare__label--render">Render</span>
        </div>
      </div>
      <div class="m-card-compare__body">
        <?php while(have_rows('render data')): the_row(); ?>
        <div class="m-card-compare__info-contet">
          <h4 class="m-card-compare__render-data"><?php the_sub_field('data_value'); ?></h4>
          <p class="m-card-compare__render-description"><?php the_sub_field('dato_description'); ?></p>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
    <div class="m-card-compare__real">
      <div class="m-card-compare__img">
        <?php get_template_part('/atoms/a-img/a-img', null, array(
          'image_id' => $imagen_real_id,
          'image_class' => 'm-card-compare__render-img',
          'image_size' => 'full',
          'img_radius' => true
        )) ?>
        <div class="m-card-compare__label">
          <span class="m-card-compare__label--real">Real</span>
        </div>
      </div>
      <div class="m-card-compare__body">
        <?php while(have_rows('render data_real')): the_row(); ?>
        <div class="m-card-compare__info-contet">
          <h4 class="m-card-compare__render-data"><?php the_sub_field('data_value'); ?></h4>
          <p class="m-card-compare__render-description"><?php the_sub_field('dato_description'); ?></p>
        </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  
</div>