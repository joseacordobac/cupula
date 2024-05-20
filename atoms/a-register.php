<?php 

define("PATH_ATOMS", trailingslashit( get_stylesheet_directory_uri() ).'atoms/');

function enqueue_custom_atoms() {

  $register_scripts_styles = array(
    'a-logo',
    'a-logo-white',
    'a-btn',
    'a-img',
    'a-titles',
    'a-list',
    'a-numbers',
    'a-social',
    'a-tags',
    'a-btn-info',
    'a-btn-imobile',
    'a-arrows-slide'
  );

  foreach($register_scripts_styles as $key => $value) {
    u_register_styles($value, PATH_ATOMS);
  }

}

add_action('wp_enqueue_scripts', 'enqueue_custom_atoms');