<?php 

  /**
   * Atom: Nav Button
   * @param array $args
   * /
   **/
   $icon = isset($args['icon']) ? $args['icon'] : '';
   $text = isset($args['text']) ? $args['text'] : '';
   $anchor = isset($args['anchor']) ? $args['anchor'] : '';
   $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
   $image_url = wp_get_attachment_image_url($icon, 'medium');

  ?>
  <a href="<?php echo $anchor; ?>" class="a-nav-btn <?php echo $custom_class; ?>">
    <div class="a-nav-btn__content">
      <img src="<?php echo $image_url; ?>" alt="<?php echo $text; ?>" class="a-nav-btn__icon">
      <span class="a-nav-btn__text"><?php echo $text; ?></span>
    </div>
  </a>
