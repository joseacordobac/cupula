<?php 

define("PATH_ORGANISM", trailingslashit( get_stylesheet_directory_uri() ).'organism/');

function enque_styles_organism() {

  $register_scrips_class = array(
    'o-banner-slider',
    'o-bannerfull-slider',
    'o-header',
    'o-footer',
    'o-you-get',
    'o-programs',
    'o-get-talent',
    'o-impact',
    'o-testimonials',
    'o-iprogram',
    'o-our-start',
    'o-team',
    'o-banner-form',
    'o-dialog-form',
    'o-tranning-model',
    'o-faq',
    'o-tabs',
    'o-calendar',
    'o-events',
    'o-stadistics',
    'o-banner-qr',
    'o-model-appartment',
    'o-compare'
  );

  foreach($register_scrips_class as $key => $value) {
    u_register_styles($value, PATH_ORGANISM);
  }

}

add_action('wp_enqueue_scripts', 'enque_styles_organism');