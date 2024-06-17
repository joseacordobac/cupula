<?php 

/**
 * @file
 * @brief
 */
  wp_enqueue_style('m-card-model');

  $horizontal = isset($args['horizontal']) ? 'm-card-model--horizontal' : '';
  $thumbnail_id = get_post_thumbnail_id();
  
?>

<article class="m-card-model <?php $horizontal; ?>">
    <?php 
      get_template_part( 'atoms/a-img/a-img', null, array(
        'image_id' => $thumbnail_id,
        'alt' => get_the_title(),
        'img_radius' => true
      ))
    ?>
    <section class="m-card-model__body">
      <div class="m-card-model__body-text">
        <h3 class="m-card-model__body-city"><?php the_field('city'); ?></h3>
        <h2 class="m-card-model__body-title"><?php the_title(); ?></h2>
        <p class="m-card-model__body-data">
          <img class="m-card-model__icon" src="<?php echo get_stylesheet_directory_uri() . '/assets/icons/call.svg'; ?>" />
          <?php the_field('adress'); ?>
        </p>
        <p class="m-card-model__body-data">
          <img class="m-card-model__icon" src="<?php echo get_stylesheet_directory_uri() . '/assets/icons/phone.svg'; ?>" />
          <?php the_field('phone'); ?>
        </p>
      </div>
      <?php template_part_atomic('atoms/a-btn-places/a-btn-places', 
            array(
              'waze' => get_field('waze'), 
              'google_maps' => get_field('google_maps')
              )
            ); 
      ?>
    </section>
</article>