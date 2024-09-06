<?php 

/**
 * Template Name: Home
 * Description: This is a custom template for the home page.
 */


get_header(); 

wp_enqueue_script('ScrollTrigger');
wp_enqueue_script('gsap');
wp_enqueue_script('gsap-text');

wp_enqueue_script('home');
wp_enqueue_style('home');

?>

<main class="main">

    <?php template_part_atomic('organism/o-bannerfull-slider/o-bannerfull-slider', 
        array(
            'info_btn' => true
        )); 
    ?>

    <section id="proyectos" class="projects">

        <div class="g-content-regular trainning__content">
            <?php template_part_atomic('/atoms/a-titles/a-titles', 
                array(
                    'title'         => 'Proyecto en venta',
                    'titles-type'   => 'a-titles--main',                                )
                ); 
            ?>
        </div>

        <div class="content-project swiper-project swiper-content">
            <div class="swiper-wrapper">
                <?php
                    $args = u_args_pt('proyectos', -1, 'desc', 'date', 'estado', 'en-venta');

                    $proyectos = new WP_Query($args);

                    if($proyectos->have_posts()):
                        while($proyectos->have_posts()):
                            $proyectos->the_post();
                            template_part_atomic('/molecules/m-card-project/m-card-project');
                        endwhile;
                    endif;

                    wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="swiper-pagination swiper-pagination--content-project"></div>
        <?php template_part_atomic('atoms/a-arrows-slide/a-arrows-slide', array('slide_class' => 'project' ));   ?>

    </section>

    <section id="confiar" class="reazons-trust">
        <div class="reazons-trust__content">
            <?php template_part_atomic('organism/o-stadistics/o-stadistics'); ?>
        </div>
    </section>

    <section id="banner-impact" class="banner-impact">
        <?php template_part_atomic( 'organism/o-banner-qr/o-banner-qr'); ?>
    </section>

    <section id="model-appartment" class="model-appartment">
        <div class="model-appartment__content">
            <div class="g-content-regular model-appartment-title">
                <?php template_part_atomic('/atoms/a-titles/a-titles', 
                    array(
                        'title'         => 'Ven y conoce nuestro apartamento modelo',
                        'titles-type'   => 'a-titles--main',                                )
                    ); 
                ?>
            </div>
            <?php template_part_atomic( 'organism/o-model-appartment/o-model-appartment'); ?>
        </div>
    </section>

    <section id="proyects-list" class="proyects-list">
        <div class="g-content-regular">
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => 'Confía en nuestra experiencia',
                    'titles-type'   => 'a-titles--main',                                )
                ); 
            ?>
        </div>

        <div class="card-experiencie">
            <?php get_template_part('/organism/o-compare/o-compare'); ?>
        </div>
    </section>

    <section id="testimonios" class="new-realities">
        <div class="new-realities__content">
            <?php while( have_rows('new_realities') ) : the_row(); ?>
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_sub_field('titulo_de_seccion'),
                    'titles-type'   => 'a-titles--main',
                    'custom-css'    => 'g-content-middle'
                    )
                ); 
            ?>
            <?php get_template_part('/organism/o-testimonials/o-testimonials', null,
                array(
                    'repater_name'      => 'agregar_testimonsio',
                    'img_id'            => 'img_testimonial',
                    'alt'               => 'name',
                    'name_testimonial'  => 'name',
                    'testimonial'       => 'testimonial',
                    'possition'         => 'possition',
                    'custom_class'      => '',
                    'custom_class_card' => ''
                )
            ); ?>
            <?php endwhile; ?>
        </div>
    </section>

</main>


<section id="preguntas-frecuentes">
    <div class="container">
        <?php template_part_atomic('/atoms/a-titles/a-titles', 
                array(
                    'title'         => 'Conoce más de nosotros',
                    'titles-type'   => 'a-titles--main',)
                ); 
            ?>
        <div class="content-preguntas-frecuentes">
            <div class="accordion">
                <?php while (have_rows('conoce_mas_de_nosotros')): the_row();
            ?>
                <div class="accordion-item">
                    <button class="accordion-header"><?php the_sub_field('titulo'); ?>
                        <span><?php the_sub_field('texto_inicial'); ?></span></button>
                    <div class="accordion-content">
                        <p><?php the_sub_field('texto_completo'); ?></p>
                    </div>
                </div>

                <?php endwhile; ?>


            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>