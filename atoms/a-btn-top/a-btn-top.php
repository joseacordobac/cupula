<?php
  wp_enqueue_style('a-btn-top');
  wp_enqueue_script('a-btn-top');
?>

<a class="a-btn-top" href="#main">
  <div class="a-btn-top__content">
    <img 
      class="a-btn-top__arrow-top" 
      alt="ir arriba" 
      src="<?php echo get_template_directory_uri() . '/assets/icons/arrow-top.svg' ?>"
    />
  </div>
</a>