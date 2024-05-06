<?php 

function u_args_pt($post_type, $per_page = -1, $order='desc', $orderby='date', $tax_filter = null) {

  $args =  array(
    'post_type' => $post_type,
    'posts_per_page' => $per_page,
    'order' => $order,
    'orderby' => $orderby
  );

  return $args;

}