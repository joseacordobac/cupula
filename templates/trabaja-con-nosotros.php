<?php 


/**
 * Template Name: Trabaja con nosotros
 * Description: This is a custom template for the home page.
 */

 get_header(); 

 wp_enqueue_script('js-swiper');
 wp_enqueue_style('css-swiper');
 
 wp_enqueue_script('ScrollTrigger');
 wp_enqueue_script('gsap');
 wp_enqueue_script('gsap-text');

 wp_enqueue_script('trabaja-con-nosotros');
 wp_enqueue_style('trabaja-con-nosotros');
 
 ?>

<section id="banner-conocenos">
    <div class="content-banner-transversal">
        <div class="titulo-banner-transversal">
            <h1 class="">Trabaja con nosotros</h1>
        </div>
        <div class="img-banner-transversal" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        </div>
    </div>
</section>

<section id="content-form">
    <div class="container">
        <p><?php the_content(); ?></p>
    </div>
</section>

<?php get_footer(); ?>