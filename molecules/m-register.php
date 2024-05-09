<?php 


define("PATH_MOLECULES", trailingslashit( get_stylesheet_directory_uri() ).'molecules/');


function enque_custom_molecules() {

  $molecules = array(
    'm-nav',
    'm-video',
    'm-value',
    'm-card-program',
    'm-testimonial',
    'm-logo-card',
    'm-info',
    'm-socials',
    'm-nav-footer',
    'm-whatsapp',
    'm-card-iprogram',
    'm-card-numbers',
    'm-card-move',
    'm-card-team',
    'm-form-basic',
    'm-faq',
    'm-date-mision',
    'm-date-info',
    'm-card-empresa',
    'm-card-event',
    'm-card-project',
    'm-card-model',
    'm-card-compare'
  );

  foreach ($molecules as $molecule) {
    u_register_styles($molecule, PATH_MOLECULES);
  }

}

add_action('wp_enqueue_scripts', 'enque_custom_molecules');