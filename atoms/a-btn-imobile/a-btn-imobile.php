<?php 
  /** 
   * Info Button Atom
   * @param array $args
   */
if(wp_is_mobile()):
  wp_enqueue_style('a-btn-imobile');
  wp_enqueue_script('a-btn-imobile');

  $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
  $target = isset($args['target']) ? 'target="_blank"' : '';
  
echo '<div class="a-btn-imobile ' . $custom_class . '">';  
while (have_rows('button', 'information')) : the_row(); 
  
  $button_img = get_sub_field('button_img', 'information');
  $img = wp_get_attachment_image($button_img, 'small', false, array('class' => 'a-btn-imobile__icon', 'alt' => 'contacto'));
  $button_link = get_sub_field('button_link', 'information');
?>  
    <?php $call = get_sub_field('button_text', 'information'); ?>
    <a href="<?php echo $call === 'LLÁMANOS' ? 'tel:'.$button_link : $button_link; ?>" <?php echo $target; ?> class="a-btn-imobile__content">
      <div class="a-btn-imobile__icon-content" style="background: <?php the_sub_field('color_icono', 'information'); ?>;">
        <?php echo $img; ?>
      </div>
      <div class="a-btn-imobile__link">
        <?php the_sub_field('button_text', 'information') ?>
      </div>
    </a>
<?php 
  endwhile; 
  echo '</div>';
endif;
?>