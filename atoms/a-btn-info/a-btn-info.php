<?php 
  /** 
   * Info Button Atom
   * @param array $args
   */

  wp_enqueue_style('a-btn-info');
  wp_enqueue_script('a-btn-info');

  $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
  $target = isset($args['target']) ? 'target="_blank"' : '';
  
  
  while (have_rows('button', 'information')) : the_row(); 
  
  $button_img = get_sub_field('button_img', 'information');
  $img = wp_get_attachment_image($button_img, 'medium', false, array('class' => 'a-btn-info__icon', 'alt' => 'contacto'));
  
  ?>

<div class="a-btn-info <?php echo $custom_class; ?>">
  <div class="a-btn-info__content">
    <div class="a-btn-info__icon-content" style="background: <?php the_sub_field('color_icono', 'information'); ?>;">
      <?php echo $img; ?>
    </div>
    <a href="<?php the_sub_field('button_link', 'information') ?>" <?php echo $target; ?> class="a-btn-info__link">
      <?php the_sub_field('button_text', 'information') ?>
    </a>
  </div>
</div>

<?php endwhile; ?>