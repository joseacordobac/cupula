<?php

  wp_enqueue_script('js-swiper');
  wp_enqueue_style('css-swiper');

  wp_enqueue_script('o-bannerfull-slider');
  wp_enqueue_style('o-bannerfull-slider');

  $info_btn = isset($args['info_btn']) ? $args['info_btn'] : false;
?>


<section class="o-bannerfull-slider js-conocenos-banner g-background--home">
    <div class=" swiper-wrapper">
        <?php while( have_rows('hero_banner') ) : the_row();
        $type = get_sub_field('slide_type'); 
        
        if( $type === 'half' ) get_template_part('/molecules/m-banner-columns/m-banner-columns', null, array('info_btn' => $info_btn)); 
        if( $type === 'full' ) get_template_part('/molecules/m-banner-full/m-banner-full', null, array('info_btn' => $info_btn));
        
        endwhile; ?>
    </div>
    <div class="swiper-pagination__main-banner"></div>    
</section>