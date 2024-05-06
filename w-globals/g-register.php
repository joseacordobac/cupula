<?php 

if (!defined('ABSPATH')) exit;

// include_once 'open-graph.php';
$timestamp = time();
$version = mt_rand(1, $timestamp);

define("VERSION", $version);
define("PATH_STYLE", trailingslashit(get_stylesheet_directory_uri()));

// register global function 
if (!function_exists('register_custom_elements')) :
  
    function register_custom_elements(){
      
      //Objects - globa styles //				
      wp_enqueue_style('w-globals', PATH_STYLE . 'w-globals/w-globals.css', array(), '1.1' . VERSION);
      wp_enqueue_script('w-globals', PATH_STYLE . 'w-globals/w-globals.js', array(), false, true);
      
      /** SWIPER JS */
      wp_register_style('css-swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css');
      wp_register_script('js-swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);

      //* GSAP */
      wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js', array(), null, true);
      wp_enqueue_script('ScrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/ScrollTrigger.min.js', array(), null, true);
      wp_register_script('gsap-text', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/TextPlugin.min.js', array(), null, true);
      wp_register_script('gsap-observer', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/Observer.min.js', array(), null, true);

      //lenis
      wp_enqueue_script('lenis', 'https://unpkg.com/@studio-freight/lenis@1.0.29/bundled/lenis.min.js', array('gsap'), null, true);
    }
  
endif;
  
add_action('wp_enqueue_scripts', 'register_custom_elements', 10);