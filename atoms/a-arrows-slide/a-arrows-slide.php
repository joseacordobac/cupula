
<?php

wp_enqueue_style('a-arrows-slide');
wp_enqueue_script('a-arrows-slide');

$slide_class = isset($args['slide_class']) ? $args['slide_class'] : '';
$arrow = wp_is_mobile() ? get_stylesheet_directory_uri() . '/assets/icons/arrow-single.svg' : get_stylesheet_directory_uri() . '/assets/icons/arrow-purple.svg';
?>

<div class="<?php echo  "swiper-button-prev--$slide_class"; ?> a-arrows-slide">
  <img class="button-prev__icon" src="<?php echo $arrow;; ?>" alt="arrow-left">
</div>
<div class="<?php echo "swiper-button-next--$slide_class"; ?> a-arrows-slide">
  <img class="button-next__icon" src="<?php echo $arrow; ?>" alt="arrow-left">
</div>