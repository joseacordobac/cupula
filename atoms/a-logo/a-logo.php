<?php 
  /** logo */
  wp_enqueue_style('a-logo');
  wp_enqueue_script('a-logo');

  $logo_id = get_theme_mod('custom_logo');

?>

<div class="a-logo">
    <?php echo get_custom_logo(); ?>
</div>