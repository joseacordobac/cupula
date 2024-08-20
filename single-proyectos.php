<?php

get_header();
wp_enqueue_style('single-proyectos');
?>
<main class="main-proyects">
    <div class="main-proyect--content">
        <article class="proyect-head">
            <?php if(!wp_is_mobile()): ?>
            <section class="project-video">
                <?php template_part_atomic('molecules/m-youtube/m-youtube', array(
                    'embed' => get_field('video_embed'),
                ));
                ?>
            </section>
            <?php else: ?> 
            <section class="projects-banner">
                <?php template_part_atomic('/atoms/a-img/a-img',
                    array(
                        'image_id' => get_field('imagen_principal'),
                        'image_size' => "full",
                        'alt' => "main banner",
                        'class' => "projects-banner--imagen",
                        'aspect_ratio' => "16/9",
                        'img_radius' => 'banner-img--radius',
                        'has_video' => get_field('video_'),
                )); ?>
            </section>
            <?php endif; ?>

            <section class="project-nav">
                <div class="project-nav__content">
                    <?php while (have_rows('btn_content')) : the_row(); ?>
                        <?php template_part_atomic('/atoms/a-nav-btn/a-nav-btn', array(
                            'icon' => get_sub_field('icon'),
                            'text' => get_sub_field('text'),
                            'anchor' => get_sub_field('anchor'),
                            'custom_class' => 'a-btn--primary',
                        )); ?>
                    <?php endwhile; ?>
                </div>
            </section>

            <section class="project-logo">
                <div class="project-logo__content">
                    <?php template_part_atomic('molecules/m-info-project/m-info-project', array(
                        "logo" => get_field('logo'),
                        "title" => get_field('title_info'),
                        "sub_title" => get_field('subtitle'),
                        "btn_text" => get_field('btn_text_project'),
                        "btn_link" => get_field('btn_link_project'),
                    )); ?>
                </div>
                <div class="project-logo__gallery">
                    <?php
                    if(wp_is_mobile()):
                    template_part_atomic('organism/o-gallery-slider/o-gallery-slider', array(
                        'repeater' => 'gallery-list',
                        'img_id' => 'gallery-id-img',
                        'custom_class' => 'o-gallery-slider--project'
                    ));
                    else:
                        template_part_atomic('organism/o-modal-slider/o-modal-slider');
                    endif;
                    ?>
                </div>
            </section>

        </article>

        <aside class="proyect-aside">
            <?php template_part_atomic('molecules/m-form-aside/m-form-aside', array(
                'asesor_name' => 'Natalia Serna',
                'asesor_picture' => get_stylesheet_directory_uri() . '/assets/img/asesora.jpg',
            )); ?>
        </aside>
    </div>

    <div class="main-proyect--gray">
        <div class="main-proyect--gray__container">
            <article class="proyect-article">
                <div class="content-section">
                    <section class="about-project">
                        <div class="about-project__about">
                            <?php template_part_atomic('atoms/a-titles/a-titles', array(
                                'title' => get_field('title_main'),
                                'titles-type' => 'h3',
                                'custom-css' => 'about-project__title',
                            )); ?>

                            <p class="about-project__description"><?php the_field('description_about_project'); ?></p>
                        </div>

                        <div class="about-project__spaces">
                            <?php template_part_atomic('atoms/a-titles/a-titles', array(
                                'title' => get_field('title_spaces'),
                                'titles-type' => 'h3',
                                'custom-css' => 'about-project__title',
                            )); ?>
                            <div class="about-project__list">
                                <?php while (have_rows('spaces_list')) : the_row();
                                    template_part_atomic('atoms/a-list/a-list', array(
                                        'item_list' => get_sub_field('nombre'),
                                        'item_img' => get_sub_field('icon'),
                                        'custom_class' => 'a-list--primary',
                                    ));
                                endwhile; ?>
                            </div>
                        </div>

                    </section>

                    <div class="cotiza-you-apartment">
                        <?php template_part_atomic('organism/o-dinamic-quote/o-dinamic-quote'); ?>
                    </div>

                    <div class="como-llegar" id="como-llegar">
                        <div class="title-content">
                            <?php template_part_atomic('atoms/a-titles/a-titles', array(
                                'title' => get_field('title_map'),
                                'custom-css' => 'como-llegar__title',
                            )); ?>
                            <?php template_part_atomic(
                                'atoms/a-btn-places/a-btn-places',
                                array(
                                    'waze' => get_field('waze'),
                                    'google_maps' => get_field('google_maps')
                                )
                            );
                            ?>
                        </div>
                        <div class="how-arrive__content">
                            <div class="how-arrive__map">
                                <?php the_field('mapa'); ?>
                            </div>
                            <div class="how-arrive_information">
                                <?php template_part_atomic('atoms/a-titles/a-titles', array(
                                    'title' => get_field('title_elements'),
                                    'custom-css' => 'title--secondary',
                                )); ?>
                                <ul class="how-arrive__list">
                                    <?php while (have_rows('options_list')) : the_row();
                                        template_part_atomic('atoms/a-list/a-list', array(
                                            'item_list' => get_sub_field('places'),
                                            'custom_class' => 'a-list--primary',
                                        ));
                                    endwhile; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="video-proyecto">
                        <?php template_part_atomic('molecules/m-youtube/m-youtube', array(
                            'embed' => get_field('video_embed'),
                        ));?>
                    </div>

                    <div class="apartamento-modelo">
                        <?php template_part_atomic('atoms/a-titles/a-titles', array(
                            'title' => "Ven y conoce nuestro apartamento modelo",
                            'custom-css' => 'como-llegar__title',
                        )); ?>
                        <?php template_part_atomic(
                            'organism/o-model-appartment/o-model-appartment',
                            array(
                                'is_slider' => true,
                                'is_horizontal' => true
                            )
                        );
                        ?>
                    </div>
                </div>
            </article>

            <aside class="proyect-aside">
                <section class="project-contact">

                </section>
            </aside>
        </div>
    </div>

    <section id="testimonios" class="new-realities">
        <div class="new-realities__content">
            <?php while (have_rows('new_realities')) : the_row(); ?>
                <?php template_part_atomic(
                    '/atoms/a-titles/a-titles',
                    array(
                        'title'         => get_sub_field('titulo_de_seccion'),
                        'titles-type'   => 'a-titles--main',
                        'custom-css'    => 'g-content-middle'
                    )
                );
                ?>
                <?php template_part_atomic(
                    '/organism/o-testimonials/o-testimonials',
                    array(
                        'repater_name'      => 'agregar_testimonsio',
                        'img_id'            => 'img_testimonial',
                        'alt'               => 'name',
                        'name_testimonial'  => 'name',
                        'testimonial'       => 'testimonial',
                        'custom_class'      => '',
                        'custom_class_card' => ''
                    )
                ); ?>
            <?php endwhile; ?>
        </div>
    </section>

    <section id="banner-impact" class="banner-impact">
        <?php template_part_atomic('organism/o-banner-qr/o-banner-qr', array('custom_class' => 'o-banner-qr--secondary')); ?>
    </section>

    <!-- organism/o-modal-slider -->
    <?php //template_part_atomic('organism/o-modal-slider/o-modal-slider'); 
    ?>

</main>

<?php get_footer(); ?>