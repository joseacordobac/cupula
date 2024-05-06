<?php 
    /**
     * Single Programas
     */

    get_header(); 
    wp_enqueue_style('single-programs');
    ?>
    
    <main class="main">
        <?php while( have_rows('hero_banner') ) : the_row(); ?>
        <section class="hero-banner" style="background-color: #<?php the_sub_field('background_color'); ?>;">
            <div class="hero-banner__content">
            <div class="hero-banner__left">
                <div class="hero-banner__left-contains">
                    <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('main_title'),
                        'titles-type'   => 'a-titles--main',
                        'animations'    => 'a-titles--animation-typing',
                        'custom-css'    => 'js-title-typing hero-banner__title',
                        )
                    ); 
                    ?> 
                    <?php get_template_part('/atoms/a-tags/a-tags', null); ?> 
                    <div class="hero-banner__left-description">
                        <?php the_sub_field('description'); ?>
                    </div>
                    <?php 
                    get_template_part('/atoms/a-btn/a-btn', null, 
                        array(
                                'button_text' => get_sub_field('btn_text'),
                                'button_link' => get_sub_field('url_btn'),
                                'btn_type' => 'a-btn--primary',
                                'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                            )
                        );
                    ?>
                    
                </div>
                </div>
                <div class="hero-banner__right">
                    <?php get_template_part('/atoms/a-img/a-img', null,
                        array(
                            'image_id' => get_sub_field('main_img'),
                            'image_size' => 'large',
                            'alt' => 'betek',
                            'class' => 'banner-img',
                        ));
                    ?>
                </div>
            </div>
        </section>
        <?php endwhile; ?>

        <section class="information">
            <?php while( have_rows('info') ) : the_row(); ?>
                
                <div class="g-content-regular trainning__content">
                    <?php if(get_sub_field('bran_icon')): ?>
                     <img src="<?php the_sub_field('bran_icon'); ?>" alt="" class="incon-brand" width="80" height="80">
                    <?php endif; ?>
                    <?php get_template_part('/atoms/a-titles/a-titles', null, 
                        array(
                            'title'         => get_sub_field('texto'),
                            'titles-type'   => 'a-titles--main',                                )
                        ); 
                    ?>
                </div>
                
                <?php get_template_part('/organism/o-you-get/o-you-get', null,
                array(
                    'img_path'          => get_sub_field('description_img'),
                    'img_icon'          => get_sub_field('internal_icon'),
                    'title'             => get_sub_field('title_section'),
                    'title_type'        => 'a-titles--black',
                    'title_animetion'   => 'js-title-typing',
                    'img_size'          => 'large',
                    'content_name'      => 'list_description',
                    'list_img_path'     => 'list_img_path',
                    'list_title'        => 'list_title',
                    )); 
                ?>
                
                <div class="information_btn">
                    <?php 
                        get_template_part('/atoms/a-btn/a-btn', null, 
                        array(
                                'button_text' => get_sub_field('btn_text'),
                                'button_link' => get_sub_field('url_btn'),
                                'btn_type' => 'a-btn--primary',
                                'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                            )
                        );
                    ?>
                </div>

            <?php endwhile; ?>
        </section>

        <section class="tools">
            <?php while( have_rows('tools_domain') ) : the_row(); ?>
                <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('section_title'),
                        'titles-type'   => 'a-titles--main',                                )
                    ); 
                ?>
                <div class="tools-tabs">
                    <?php get_template_part('/organism/o-tabs/o-tabs', null, 
                    array(
                        'repeater' => 'hability_type',
                        'custom_class' => 'o-tabs--tools',
                    )
                ); ?>
                </div>
                <div class="tools_btn">
                    <?php 
                    get_template_part('/atoms/a-btn/a-btn', null, 
                        array(
                                'button_text' => get_sub_field('btn_text'),
                                'button_link' => get_sub_field('url_btn'),
                                'btn_type' => 'a-btn--primary',
                                'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                                'target' => '_blank',
                            )
                        );
                    ?>
                </div>
            <?php endwhile; ?>
        </section>

        <section class="steps">
            <?php while(have_rows('steps') ) : the_row(); ?>
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_sub_field('titulo_de_la_seccion'),
                    'titles-type'   => 'a-titles--main steps',                                )
                ); 
            ?>

            <div class="steps-contains">
                <?php 
                $counter = 1;
                while(have_rows('add_step') ) : the_row(); ?>
                    <?php get_template_part('/molecules/m-card-move/m-card-move', null, 
                    array(
                        'title' => get_sub_field('step_title'),
                        'description' => get_sub_field('step_description'),
                        'number' => $counter < 10 ? '0'.$counter++ : $counter++,
                        'custom_class' => 'add-step-card',
                        'color' => get_sub_field('step_color'),
                    )); ?>
                <?php endwhile; ?>
            </div>

            <div class="steps_btn">
                <?php 
                get_template_part('/atoms/a-btn/a-btn', null, 
                    array(
                            'button_text' => get_sub_field('texto_del_boton'),
                            'button_link' => get_sub_field('url_btn'),
                            'btn_type' => 'a-btn--primary',
                            'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg'
                        )
                    );
                ?>
            </div>

            <?php endwhile; ?>
        </section>
        
        <section class="misions-dates">
            <?php while( have_rows('misiones_date') ) : the_row(); ?>
                <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('section_title'),
                        'titles-type'   => 'a-titles--main steps',                                )
                    ); 
                ?>

            <div class="missions-dates-timer">
                <?php while(have_rows('back_date') ) : the_row(); 
                    get_template_part('/organism/o-calendar/o-calendar', null, '');    
                endwhile; ?>
            </div> 

            <div class="missions-dates__btn">
                <?php 
                get_template_part('/atoms/a-btn/a-btn', null, 
                    array(
                            'button_text' => get_sub_field('btn_text'),
                            'button_link' => get_sub_field('url_btn'),
                            'btn_type' => 'a-btn--primary',
                            'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                        )
                    );
                ?>
            </div>

            <?php endwhile; ?>
        </section>
        
        <section class="banner-form">
            <?php get_template_part('organism/o-banner-form/o-banner-form', null, ''); ?>
        </section>

        <section class="intergral-process">
            <?php while( have_rows('integrated_process') ) : the_row(); ?>
            
                <?php get_template_part('/atoms/a-titles/a-titles', null, 
                    array(
                        'title'         => get_sub_field('texto'),
                        'titles-type'   => 'a-titles--main integral',
                        )
                    ); 
                ?>
                
                <?php get_template_part('/organism/o-you-get/o-you-get', null,
                    array(
                        'img_path'          => get_sub_field('description_img'),
                        'title'             => get_sub_field('title_section'),
                        'title_type'        => 'a-titles--black',
                        'title_animetion'   => 'js-title-typing',
                        'img_size'          => 'large',
                        'content_name'      => 'list_description',
                        'list_img_path'     => 'list_img_path',
                        'list_title'        => 'list_title',
                        'content_class'     => 'integral-process-cards'
                        )); 
                ?>
            <?php endwhile; ?>
        </section>

        <section class="tek-community">
            <?php while( have_rows('community_tek') ) : the_row(); ?>             
                <?php get_template_part('/organism/o-you-get/o-you-get', null,
                    array(
                        'img_path'          => get_sub_field('description_img'),
                        'title'             => get_sub_field('title_section'),
                        'title_type'        => 'a-titles--black',
                        'img_size'          => 'large',
                        'content_name'      => 'list_description',
                        'list_img_path'     => 'list_img_path',
                        'list_title'        => 'list_title',
                        'content_class'     => 'tek-community-cards'
                        )); 
                ?>
            <?php endwhile; ?>
        </section>

        <section class="our-team">
            <?php while( have_rows('our_team_work') ) : the_row(); ?>             
                <?php get_template_part('/organism/o-you-get/o-you-get', null,
                    array(
                        'img_path'          => get_sub_field('description_img'),
                        'title'             => get_sub_field('title_section'),
                        'title_type'        => 'a-titles--black',
                        'title_animetion'   => 'js-title-typing',
                        'img_size'          => 'large',
                        'content_name'      => 'list_description',
                        'list_img_path'     => 'list_img_path',
                        'list_title'        => 'list_title',
                        'content_class'     => 'our-team--cards'
                        )); 
                ?>
            <?php endwhile; ?>
        </section>

        <section class="brands">
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

        <section class="faq">
            <div class="preguntas__content g-content-5X">
                <?php get_template_part('/organism/o-faq/o-faq', null, 
                    array(
                        'group' => 'frecuent_ask_question',
                        'title' => 'titulo_seccion',
                        'repeater' => 'questions_list',
                        'question' => 'question',
                        'answer' => 'Answer',
                        'custom_class' => 'o-faq--preguntas'
                        )
                ); ?>
            </div>
        </section>

    </main>

    <?php get_footer(); ?>