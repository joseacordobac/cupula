<?php 

/**
 * template part compare
 * @version: 1.0
 * @since: 1.0
 */

 wp_enqueue_script('o-compare');
 wp_enqueue_style('o-compare');
?>

<div class="o-compare-slider">

  <div class="o-compare-slider__content swiper-wrapper"> 
    <?php if(have_rows('add_proyect')):
      while(have_rows('add_proyect')): the_row();
        get_template_part( '/molecules/m-card-compare/m-card-compare' );
      endwhile;
    endif; ?>
  </div>

</div>

<?php get_template_part('atoms/a-arrows-slide/a-arrows-slide', null, array('slide_class' => 'compare')); ?>
<div class="swiper-pagination--compare"></div>

<div class="swiper-pagination o-compare-slider__pagination"></div>
  <?php wp_reset_postdata();

?>


 