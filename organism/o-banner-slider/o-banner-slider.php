<?php 
  /** Hero banner slider */
  wp_enqueue_script('js-swiper');
  wp_enqueue_style('css-swiper');
  wp_enqueue_style('o-banner-slider');
  wp_enqueue_script('o-banner-slider');

?>
<section class="hero-banner js-hero-banner g-content-regular">
<div class="swiper-wrapper hero-banner swiper-content">
    <?php while( have_rows('slider_baner') ) : the_row(); ?>
        <div class="swiper-slide hero-banner-slide">
            <div class="hero-banner__slide-content">
                <div class="hero-banner__left">
                    <h3 class="hero-banner__title js-title"><?php the_sub_field('titulo'); ?></h3>
                    <div class="hero-banner__text"><?php the_sub_field('description'); ?></div>
                    <?php 
                        template_part_atomic('atoms/a-btn/a-btn', 
                        array(
                                'button_text' => get_sub_field('btn_text'),
                                'button_link' => get_sub_field('url_btn'),
                                'btn_type' => 'a-btn--primary',
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
</div>

</section>