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

<link rel="stylesheet" href="/assets/css/conocenos.css">

<main class="main">
    <?php get_template_part('organism/o-bannerfull-slider/o-bannerfull-slider'); ?>
    
    <section class="move-us">
         <div class="move-us__content">
            <?php while( have_rows('move_us') ) : the_row();

             get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_sub_field('title_section'),
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing'
                    )
                ); 
            ?>
            <div class="move-us__content-list">

                <?php 
                $count = 0;
                while( have_rows('add_value') ) : the_row();
                    get_template_part('/molecules/m-card-move/m-card-move', null,
                        array(
                            'title' => get_sub_field('title'),
                            'description' => get_sub_field('description'),
                            'custom_class' => 'a--number',
                            'number' => $count++ < 10 ? '0'.$count : $count,
                            'color' => get_sub_field('color')
                        )
                    );
                
                endwhile; ?>
            </div>

            <?php endwhile; ?>
         </div>           
    </section>
    <section class="our-start">
        <div class="our-start__content">

            <?php while(have_rows('nuestro_origen')) : the_row();
                 get_template_part('/organism/o-our-start/o-our-start', null, array(
                    'title'         => get_sub_field('titulo_seccion'),
                    'description'   => get_sub_field('description'),
                    'img'           => get_sub_field('imagen'),
                    'custom_class'   => 'a-titles--main',
                )
            );
            endwhile; ?>

        </div>         
    </section>
    <section class="our-team">
        <?php get_template_part('/atoms/a-titles/a-titles', null, 
            array(
                'title'         => 'Equipo profesional_',
                'titles-type'   => 'our-team--titles a-titles--main',
                'animations'    => 'js-title-typing'
                )
            ); 
            
            get_template_part('/organism/o-team/o-team', null, array(
                'repeater'      => 'equipo',
                'img'           => 'team_photo',
                'name'          => 'name',
                'possition'     => 'position',
                'styles'        => 'o-our-team',
                'boton_name'    => 'btn_text',
                'linked_url'    => 'btn_url',
                'custom_class'  => 'a-titles--main',
                'linkedUrl'     => 'btn_url'
            )); 
        ?>
    </section>
    <section class="awards">

    </section>
    
    <section id="alidos" class="alians">
        <div class="alians__content">
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => 'Reconocimientos',
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing',
                    'custom-css'    => 'g-content-middle'
                    )
                ); 
            ?>
            <div class="alians-brands">
                <?php get_template_part('/molecules/m-logo-card/m-logo-card', null, 
                array(
                    'repeater'   => 'reconocimientos',
                    'id_name'    => 'acknowledgment'
                )); 
                ?> 
            </div>
        </div>
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


