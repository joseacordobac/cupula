<?php 


/**
 * Template Name: Conocenos
 * Description: This is a custom template for the home page.
 */

 get_header(); 

 wp_enqueue_script('js-swiper');
 wp_enqueue_style('css-swiper');
 
 wp_enqueue_script('conocenos');
 wp_enqueue_style('conocenos');
 wp_enqueue_style('single');
 
 ?>

<section id="banner-conocenos">
    <div class="content-banner-transversal">
        <div class="titulo-banner-transversal">
            <h1 class="">Conócenos</h1>
        </div>
        <div class="img-banner-transversal" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

        </div>

    </div>

</section>

<section id="second-section-conocenos">
    <div class="container">
        <?php
       $conocenos_descripcion = get_field('descripcion_conocenos');
       if( $conocenos_descripcion ): ?>
        <div class="content-second-section-conocenos">
            <div class="video-second-section-conocenos">
                <?php echo $conocenos_descripcion['video']; ?>
            </div>
            <div class="text-second-section-conocenos">
                <h3><?php echo $conocenos_descripcion['titulo']; ?></h3>
                <p><?php echo $conocenos_descripcion['descripcion']; ?></p>
                <div class="content-redes-descripcion">
                    <?php 

                        get_template_part('/atoms/a-btn-info/a-btn-info', null, 
                            array(
                                'custom_class' => '',
                                'target' => true
                            )
                        );
                        ?>
                </div>

            </div>
        </div>
        <?php endif; ?>

    </div>

</section>

<section id="conoce-nuestro-equipo">
    <?php template_part_atomic('/atoms/a-titles/a-titles', 
                array(
                    'title'         => 'Conoce a nuestro equipo',
                    'titles-type'   => 'a-titles--main',                                )
                ); 
            ?>

    <div class="content-conoce-nuestro-equipo_swiper swiper-content">
        <div class="swiper-wrapper">
            <?php while (have_rows('conoce_nuestro_equipo')): the_row();
            $imagen = get_sub_field('imagen_equipo');
            ?>
            <div class="swiper-slide nuestro-equipo__slide">
                <div class="item-control-nuestro-equipo">
                    <div class="img-nuestro-equipo" style="background-image: url(<?php echo $imagen['url']; ?>);">
                        <span><?php the_sub_field('titulo_principal'); ?></span>

                    </div>
                    <div class="text-nuestro-equipo">
                        <div class="content-izq-nuestro-equipo">
                            <h4><?php the_sub_field('titulo_1'); ?></h4>
                            <p><?php the_sub_field('contenido_1'); ?></p>
                        </div>
                        <div class="content-dere-nuestro-equipo">
                            <h4><?php the_sub_field('titulo_2'); ?></h4>
                            <p><?php the_sub_field('contenido_2'); ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php template_part_atomic('atoms/a-arrows-slide/a-arrows-slide', array('slide_class' => 'paginations' ));   ?>
    </div>
</section>

<!--<section id="nuestra-historia">
    <div class="container">
        <?php template_part_atomic('/atoms/a-titles/a-titles', 
                array(
                    'title'         => 'Nuestra historia',
                    'titles-type'   => 'a-titles--main',                                )
                ); 
            ?>
        <div class="content-video-nuestra-historia">
            <?php the_field('video_nuestra_historia'); ?>
        </div>
    </div>
</section> -->

<section id="espacios-cupula">
    <div class="container">
        <?php template_part_atomic('/atoms/a-titles/a-titles', 
                array(
                    'title'         => 'Conoce los espacios de vida CUPULA',
                    'titles-type'   => 'a-titles--main',                                )
                ); 
            ?>
        <div class="content-espacios-cupula">
            <?php while (have_rows('espacios_cupula')): the_row();
            ?>

            <div class="item-espacios-cupula">
                <div class="video-espacios-cupula">
                    <?php the_sub_field('video_espacios'); ?>
                </div>
                <div class="text-espacios-cupula">
                    <h5><?php the_sub_field('titulo_espacio_1'); ?></h5>
                    <h5><?php the_sub_field('titulo_espacio_2'); ?></h5>
                    <p><?php the_sub_field('contenido_espacios'); ?></p>
                </div>

            </div>

            <?php endwhile; ?>
        </div>
    </div>
    </div>
</section>

<section id="nuestros-aliados">
    <div class="container">
        <?php template_part_atomic('/atoms/a-titles/a-titles', 
                array(
                    'title'         => 'Nuestros aliados',
                    'titles-type'   => 'a-titles--main',                                )
                ); 
            ?>
        <div class="content-nuestros-aliados">
            <ul class="item-logo">
                <?php while (have_rows('nuestros_aliados')): the_row();
            $imagen = get_sub_field('logo');
            ?>


                <li><img src="<?php echo $imagen['url']; ?>" alt="logo"></li>


                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>



<section id="nuestra-trayectoria">
    <div class="container">
        <?php template_part_atomic('/atoms/a-titles/a-titles', 
                array(
                    'title'         => 'Nuestra trayectoria',
                    'titles-type'   => 'a-titles--main',                                )
                ); 
            ?>
        <section id="time-line-trayectoria">
            <?php echo do_shortcode('[th-slider design="design-2" dots="false" autoplay="false"]'); ?>
        </section>

    </div>
</section>

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