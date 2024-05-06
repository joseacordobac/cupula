<?php
 /* Tempalte part: list */

  wp_enqueue_style('a-list');
  $item_list = isset($args['item_list']) ? $args['item_list'] : '';
 ?>

 <li class="a-list"><?php echo $item_list; ?></li>