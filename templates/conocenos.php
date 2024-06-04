<?php 


/**
 * Template Name: Conocenos
 * Description: This is a custom template for the home page.
 */

 get_header(); 

 wp_enqueue_script('js-swiper');
 wp_enqueue_style('css-swiper');
 
 wp_enqueue_script('ScrollTrigger');
 wp_enqueue_script('gsap');
 wp_enqueue_script('gsap-text');

 wp_enqueue_script('conocenos');
 wp_enqueue_style('conocenos');
 
 ?>

<main class="main">
    <?php get_template_part('organism/o-bannerfull-slider/o-bannerfull-slider'); ?>
    
    <section class="build-dreams">
        <?php template_part_organism('organism/o-you-get/o-you-get', array(
            'title' => get_field('titulo'),
            'custom_class' => 'o-you-get--conocenos',
            'img_path' => get_field('imagen'),
            'img_size' => 'large',
            'content_name' => 'informacion',
        )); ?>
    </section>

    <section id="alidos" class="alians">
        <div class="alians__content">

            <?php while( have_rows('alinced') ) : the_row(); ?>
                <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('titulo_de_seccion'),
                        'titles-type'   => 'a-titles--main',
                        'animations'    => 'js-title-typing',
                        'custom-css'    => 'g-content-middle'
                        )
                    ); 
                ?>
                
                <?php get_template_part('/molecules/m-logo-card/m-logo-card', null, 
                        array(
                            'repeater'   => 'aliance_list',
                            'id_name'    => 'logo'
                        )); 
                    ?> 
                </div>
            <?php endwhile; ?>
            
        </div>
    </section>
    
</main>
  
<?php get_footer(); ?>


