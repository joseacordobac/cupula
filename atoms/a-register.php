<?php 

define("PATH_ATOMS", trailingslashit( get_stylesheet_directory_uri() ).'atoms/');


function enqueue_custom_atoms() {

  $register_scripts_styles = array(
    'a-logo-white',
    'a-img',
    'a-titles',
    'a-list',
    'a-numbers',
    'a-social',
    'a-tags',
    'a-btn-info',
    'a-btn-imobile',
    'a-arrows-slide',
    'a-btn-top'
  );

  foreach($register_scripts_styles as $key => $value) {
    u_register_styles($value, PATH_ATOMS);
  }

}

add_action('wp_enqueue_scripts', 'enqueue_custom_atoms');

function template_part_atoms($template_name, $args = array()) {

  $add_atoms_list = array(
    'atoms/a-logo/a-logo',
    'atoms/a-logo-white/a-logo-white',
    'atoms/a-btn/a-btn'
  );

  foreach($add_atoms_list as $key => $value) {
    $name = basename($value);
    if ($template_name == $value) {
        wp_enqueue_style($name, get_stylesheet_directory_uri() . "/$template_name.css", array(), '1.0.0', 'all');
        wp_enqueue_script($name, get_stylesheet_directory_uri() . "/$template_name.js", array('jquery'), '1.0.0', true);
        break;
      }
    }
    
    get_template_part($template_name, null, $args);
}