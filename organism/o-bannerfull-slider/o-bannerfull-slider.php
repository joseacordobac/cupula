<?php

  wp_enqueue_script('js-swiper');
  wp_enqueue_style('css-swiper');

  wp_enqueue_script('o-bannerfull-slider');
  wp_enqueue_style('o-bannerfull-slider');

  $info_btn = isset($args['info_btn']) ? $args['info_btn'] : false;
?>


<section class="o-bannerfull-slider js-conocenos-banner g-background--home">
    <div class=" swiper-wrapper">
        <?php while( have_rows('hero_banner') ) : the_row(); ?>
            <div class="o-bannerfull-slider__content swiper-slide" style="background-color: <?php the_sub_field('background'); ?>;">
                <div class="o-bannerfull-slider__text js-title-tranning">
                    <h3 class="o-bannerfull-slider__title js-title"><?php the_sub_field('title'); ?></h3>
                    <p class="o-bannerfull-slider__description"><?php the_sub_field('decription'); ?></p>
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
                <div class="o-bannerfull-slider__img">
                    <?php $id_img = get_sub_field('main_img'); 
                        $image = wp_get_attachment_image($id_img, 'large', false, array('class' => 'o-bannerfull-slider__image'));
                        echo $image;
                        if( $info_btn ){ 
                            echo '<div class="o-bannerfull-slider__content-info o-bannerfull-slider--absolute">';
                            while( have_rows('button') ) : the_row();

                                get_template_part('/atoms/a-btn-info/a-btn-info', null, 
                                    array(
                                        'button_text' => get_sub_field('button_text'),
                                        'button_link' => get_sub_field('button_link'),
                                        'button_img' => get_sub_field('button_img'),
                                        'custom_color' => get_sub_field('color_icono'),
                                        'custom_class' => '',
                                        'target' => true
                                    )
                                );
                            endwhile;
                            echo '</div>';
                        }
                    ?>                    
                </div>    
            </div>
        <?php endwhile; ?>
    </div>
    <div class="swiper-pagination__main-banner"></div>    
</section>