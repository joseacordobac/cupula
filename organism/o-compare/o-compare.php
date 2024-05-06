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

echo '<div class="o-compare-slider"><div class="o-compare-slider__content swiper-wrapper">';
if($proyectos->have_posts()):
    while($proyectos->have_posts()):
      $proyectos->the_post(); ?>
        <?php get_template_part( '/molecules/m-card-compare/m-card-compare' ); ?>
      <?php endwhile;
  endif;
echo '</div></div>';

wp_reset_postdata();

?>


 