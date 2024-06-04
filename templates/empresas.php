<?php 

  /**
  * Template Name: Empresas
  * Description: This is a custom template for entranate.
  */
  wp_enqueue_script( 'empresas' );
  wp_enqueue_style('empresas');
?>

<?php get_header(); ?>
    <section class="hero-banner js-hero-banner">
        <div class="hero-banner-cotainer g-content-regular swiper-content">
            <div class="swiper-wrapper hero-banner">
                <?php while( have_rows('hero_banner') ) : the_row(); ?>
                <?php while( have_rows('slider_banner') ) : the_row(); ?>
                    <div class="swiper-slide hero-banner-slide">
                        <div class="hero-banner__slide-content">
                            <div class="hero-banner__left">
                                <h3 class="hero-banner__title js-title"><?php the_sub_field('title'); ?></h3>
                                <p class="hero-banner__text"><?php the_sub_field('description'); ?></p>
                                <?php 
                                    template_part_atoms('atoms/a-btn/a-btn', 
                                    array(
                                            'button_text' => get_sub_field('btn_text'),
                                            'button_link' => get_sub_field('url_btn'),
                                            'btn_type' => 'a-btn--quinary',
                                            'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                                        )
                                    );
                                ?>
                                
                            </div>
                            <div class="hero-banner__rigth">
                                <?php get_template_part('/atoms/a-img/a-img', null,
                                    array(
                                        'image_id' => get_sub_field('imagen'),
                                        'image_size' => 'large',
                                        'alt' => 'betek',
                                        'class' => 'o-you-get-img',
                                        'aspect_ratio' => '1/1'
                                    ));
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endwhile; ?>
            </div>
        </div>
        <div class="swiper-pagination__main-banner"></div>
    </section>

  <section class="navigation-cards">
    <div class="navigation-card__content">
        <?php while( have_rows('company_group') ) : the_row(); ?>
            <?php 
            get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_sub_field('titulo_de_seccion'),
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing',
                    'custom-css'    => 'g-content-middle'
                    )
                );  
            ?>
            <div class="navigation-card__list">
                <?php 
                $number = 1;
                while( have_rows('step_solution') ) : the_row(); ?>
                    <?php get_template_part('/molecules/m-card-empresa/m-card-empresa', null, 
                        array(
                            'imagen_id'   => get_sub_field('img'),
                            'number'      => $number < 10 ? '0'.$number++ : $number ++,
                            'card_title'  => get_sub_field('title'), 
                            'card_desc'   => get_sub_field('description'),
                            'btn_text'    => get_sub_field('btn_text'),
                            'btn_link'    => get_sub_field('url_btn'),
                        )
                    ); 
                ?>
            <?php endwhile; ?>
        </div>
        <?php endwhile; ?>
    </div>                                
  </section>

    <section class="card-talento">
        <div id="get-talent" class="card-talento__content">
            <?php while( have_rows('get_talent') ) : the_row(); 

                $title = '<div class="card-talento__title"><span class="card-talento__title-tag card-talento__title-tag--clear-six">01</span><h3 class="card-talento__title-text"> '. get_sub_field("title").'</h3></div>';   

                get_template_part('/organism/o-you-get/o-you-get', null,
                array(
                    'img_path'          => get_sub_field('section-img'),
                    'title'             => $title,
                    'title_type'        => 'a-titles--black',
                    'img_size'          => 'large',
                    'content_name'      => 'list',
                    'list_img_path'     => 'icon',
                    'list_title'        => 'information',
                    'content_class'     => 'o-you-get--v2'
                    )); 
                ?>
            
                <?php while( have_rows('tools_domain_copiar') ) : the_row(); ?>
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
                            ); 
                        ?>

                    <div class="tools_btn">
                        <?php 
                        template_part_atoms('atoms/a-btn/a-btn', 
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
                    
                <?php endwhile; ?>

            <?php endwhile; ?>
        </div>              
    </section>

  <section class="enhace-team" id="enhance-team">
    <div class="enhance-team__content">
        <?php while( have_rows('enhace_your_team') ) : the_row(); 

        $title = '<div class="card-talento__title"><span class="card-talento__title-tag card-talento__title-tag--quinary-color">02</span><h3 class="card-talento__title-text"> '. get_sub_field("title").'</h3></div>';

        get_template_part('/organism/o-you-get/o-you-get', null,
                array(
                    'img_path'          => get_sub_field('imagen_section'),
                    'title'             => $title,
                    'title_type'        => 'a-titles--black',
                    'img_size'          => 'large',
                    'content_name'      => 'list',
                    'list_img_path'     => 'icon',
                    'list_title'        => 'information',
                    'content_class'     => 'tek-community-cards grid-52-42',
                    'btn_text'          => get_sub_field('btn_text'),
                    'btn_link'          => get_sub_field('btn_link')
                )); 
            ?>
        <?php endwhile; ?>
    </div>
  </section>

  <section class="sponsore-oportunity" id="sponsor-oportunities">
    <div class="enhance-team__content">
        <?php while( have_rows('sponsor_oportunities') ) : the_row(); 
        
        $title = '<div class="card-talento__title"><span class="card-talento__title-tag card-talento__title-tag--main-color">03</span><h3 class="card-talento__title-text"> '. get_sub_field("title").'</h3></div>';

        get_template_part('/organism/o-you-get/o-you-get', null,
                array(
                    'img_path'          => get_sub_field('imagen_section'),
                    'title'             => $title,
                    'title_type'        => 'a-titles--black',
                    'img_size'          => 'large',
                    'content_name'      => 'list',
                    'list_img_path'     => 'icon',
                    'list_title'        => 'information',
                    'content_class'     => 'tek-community-cards grid-52-42',
                    'btn_text'          => get_sub_field('btn_text'),
                    'btn_link'          => get_sub_field('btn_link')
                )); 
            ?>
        <?php endwhile; ?>
    </div>
  </section>


  <section class="event-resourses">
    <div class="event-resourses__content">
        <?php get_template_part('organism/o-events/o-events', null, ''); ?>
    </div>
  </section>

  <section class="companies-partners">
    <div class="companies-paratners__content">
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

  <section class="testimonials">
  <div class="testimonials__content">
      <?php while( have_rows('new_realities') ) : the_row(); ?>
          <?php get_template_part('/atoms/a-titles/a-titles', null, 
              array(
                  'title'         => get_sub_field('titulo_de_seccion'),
                  'titles-type'   => 'a-titles--main',
                  'animations'    => 'js-title-typing',
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
<?php get_footer(); ?>