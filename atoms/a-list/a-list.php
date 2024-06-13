<?php
 /* Tempalte part: list */

  wp_enqueue_style('a-list');
  $item_list = isset($args['item_list']) ? $args['item_list'] : '';
  $item_img = isset($args['item_img']) ? $args['item_img'] : false;
  $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

  $image_url = wp_get_attachment_image_url($item_img, 'medium');

 ?>

 <li class="a-list <?php echo $custom_class; ?>">
  <?php echo $image_url ? '<img class="a-list__img" src="'.$image_url.'" alt="">' : ''; ?>
  <?php echo $item_list; ?>
</li>