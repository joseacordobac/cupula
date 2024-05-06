<?php 
 /**
  * Organism Stadistics
  * @param array $args
  */

  wp_enqueue_style('o-stadistics');
  wp_enqueue_script('o-stadistics');

 ?>

  <div class="g-content-regular o-stadistics__tile">
    <?php get_template_part('/atoms/a-titles/a-titles', null, 
        array(
            'title'         => get_field('section_title'),
            'titles-type'   => 'a-titles--main',                                )
        ); 
    ?>
  </div>

 <div class="o-stadistics">
    <?php while (have_rows('add_new_element')) : the_row(); ?>
    <div class="o-stadisctics-card">
      <?php 
        get_template_part('/atoms/a-img/a-img', null,
        array(
            'image_id' => get_sub_field('main_img'),
            'alt' => get_sub_field('description'),
            'class' => 'o-stadisctics-card__img',
            'img_radius' => true
        ));
      ?>
      <div class="o-stadisctis-card__body">
        <?php get_template_part('/atoms/a-numbers/a-numbers', null,
            array(
                'number' => get_sub_field('number'),
                'custom_class' => 'o-stadisctics-card__number',
            )
          ); ?>
        <p class="o-stadisctics-card__description">
          <?php echo get_sub_field('description'); ?>
        </p>
      </div>
    </div>
    <?php endwhile; ?>
    
 </div>