<?php 
  /** 
   * Info Button Atom
   * @param array $args
   */

  wp_enqueue_style('a-btn-info');
  wp_enqueue_script('a-btn-info');

  $button_text = isset($args['button_text']) ? $args['button_text'] : '';
  $button_link = isset($args['button_link']) ? $args['button_link'] : '';
  $button_img = isset($args['button_img']) ? $args['button_img'] : '';
  $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
  $custom_color = isset($args['custom_color']) ? $args['custom_color'] : '';
  $target = isset($args['target']) ? 'target="_blank"' : '';

  $img = wp_get_attachment_image($button_img, 'medium', false, array('class' => 'a-btn-info__icon', 'alt' => 'contacto'));

?>

<div class="a-btn-info <?php echo $custom_class; ?>">
  <div class="a-btn-info__content">
    <div class="a-btn-info__icon-content" style="background: <?php echo $custom_color; ?>;">
      <?php echo $img; ?>
    </div>
    <a href="<?php echo $button_link; ?>" <?php echo $target; ?> class="a-btn-info__link">
      <?php echo $button_text; ?>
    </a>
  </div>
</div>