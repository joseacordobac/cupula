<?php 

/**
 * template part compare
 * @version: 1.0
 * @since: 1.0
 */

 wp_enqueue_script('o-compare');
 wp_enqueue_style('o-compare');


$args = u_args_pt('proyectos');

$proyectos = new WP_Query($args);
?>
<div class="o-compare-slider">

  <div class="o-compare-slider__content swiper-wrapper"> 
    <?php if($proyectos->have_posts()):
      while($proyectos->have_posts()):
        $proyectos->the_post(); ?>
        <?php get_template_part( '/molecules/m-card-compare/m-card-compare' ); ?>
      <?php endwhile;
    endif; ?>
  </div>

</div>

<div class="swiper-button-prev--compare">
  <img class="button-prev__icon" src="<?php echo get_stylesheet_directory_uri() . '/assets/icons/arrow-purple.svg'; ?>" alt="arrow-left">
</div>
<div class="swiper-button-next--compare">
  <img class="button-next__icon" src="<?php echo get_stylesheet_directory_uri() . '/assets/icons/arrow-purple.svg'; ?>" alt="arrow-left">
</div>

<div class="swiper-pagination o-compare-slider__pagination"></div>
  <?php wp_reset_postdata();

?>


 