<?php 

/**
 */
  $horizontal = $args['horizontal'] ? 'm-card-model--horizontal' : '';
  $thumbnail_id = get_sub_field('img_reference');
?>

<article class="m-card-model <?php echo $horizontal; ?>">
    <?php 
      get_template_part( 'atoms/a-img/a-img', null, array(
        'image_id' => $thumbnail_id,
        'alt' => get_sub_field('sales_sale_name'),
        'img_radius' => true
      ))
    ?>
    <section class="m-card-model__body">
      <div class="m-card-model__body-text">
        <h3 class="m-card-model__body-city"><?php the_sub_field('city'); ?></h3>
        <h2 class="m-card-model__body-title"><?php get_sub_field('sales_sale_name'); ?></h2>
        <p class="m-card-model__body-data">
          <img class="m-card-model__icon" src="<?php echo get_stylesheet_directory_uri() . '/assets/icons/call.svg'; ?>" />
          <?php the_sub_field('adress'); ?>
        </p>
        <p class="m-card-model__body-data">
          <img class="m-card-model__icon" src="<?php echo get_stylesheet_directory_uri() . '/assets/icons/phone.svg'; ?>" />
          <?php the_sub_field('phone'); ?>
        </p>
      </div>
      <?php template_part_atomic('atoms/a-btn-places/a-btn-places', 
          array(
            'waze' => get_sub_field('waze'), 
            'google_maps' => get_sub_field('google_maps')
            )
          ); 
      ?>
    </section>
</article>