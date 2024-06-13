<?php 
define("PATH_TEMPLATES", trailingslashit( get_stylesheet_directory_uri() ).'templates/');

function register_templates_custom() {

  $list_nameSpaces_register = array(
    'home',
    'conocenos',
    'formulario',
    'thank-you',
    'entrenate',
    'single-proyectos',
    'empresas',
  );

  foreach($list_nameSpaces_register as $key => $value) {
    u_register_styles($value, PATH_TEMPLATES); 
  }
} 

add_action('wp_enqueue_scripts', 'register_templates_custom');

