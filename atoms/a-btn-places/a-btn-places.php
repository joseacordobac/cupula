<?php 

  $waze_link = isset($args['waze']) ? $args['waze'] : '';
  $maps_link = isset($args['google_maps']) ? $args['google_maps'] : '';
 ?>


<div class="a-btn-places">
  <a href="<?php echo $waze_link ; ?>" class="a-btn-places-waze" target="_blank">
    <img class="a-btn-places-waze-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/waze.svg" alt="waze-logo">
  </a>
  <a href="<?php echo $maps_link; ?>" class="a-btn-places-maps" target="_blank">
    <img class="a-btn-places-maps-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/google-maps.svg" alt="google-maps-logo">
  </a>
</div>