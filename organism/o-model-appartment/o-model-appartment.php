<?php 

  /**
   * Template Name: Model Appartment
   * 
   */
   
   $is_slider = isset($args['is_slider']) ? true : false;
   
   wp_enqueue_style('o-model-appartment');
  ?>

  <div class="o-model-appartment">
    <div class="<?php echo $is_slider ? 'o-model-appartment__content-slider' : 'o-model-appartment__content'; ?>">
      <?php 
        $args = u_args_pt('apartamentos');
        $proyectos = new WP_Query($args);
        
        if($proyectos->have_posts() && !$is_slider):
          while($proyectos->have_posts()):
            $proyectos->the_post();
            template_part_atomic('/molecules/m-card-model/m-card-model');
          endwhile;
        endif;

        if($proyectos->have_posts() && $is_slider):
          echo '<div class="o-model-appartment__slider"><div class="o-model-appartment__swiper swiper-wrapper">';
            while($proyectos->have_posts()):
              $proyectos->the_post();
              echo '<div class="swiper-slide">';
                template_part_atomic('/molecules/m-card-model/m-card-model');
              echo '</div>';
            endwhile;
          echo '</div>';
          template_part_atomic('atoms/a-arrows-slide/a-arrows-slide', array('slide_class' => 'swiper-button-next' ));
          echo '</div>';
        endif;
        wp_reset_postdata();
      ?>

    </div>
  </div>