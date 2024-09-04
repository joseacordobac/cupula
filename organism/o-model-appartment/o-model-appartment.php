<?php 

  /**
   * Template Name: Model Appartment
   * 
   */
   
   $is_slider = isset($args['is_slider']) ? true : false;
   $is_horizontal = isset($args['is_horizontal']) ? true : false;

   wp_enqueue_style('o-model-appartment');
  ?>

  <div class="o-model-appartment">
    <div class="<?php echo $is_slider ? 'o-model-appartment__content-slider' : 'o-model-appartment__content'; ?>">
      <?php 
        
        if(have_rows('salas_de_venta') && !$is_slider):
          while(have_rows('salas_de_venta')):the_row();
            template_part_atomic('/molecules/m-card-model/m-card-model', array('horizontal' => $is_horizontal));
          endwhile;
        endif;
        
        if($is_slider):
          echo '<div class="o-model-appartment__slider">';
            echo '<div class="o-model-appartment__swiper swiper-wrapper">';
              while(have_rows('salas_de_venta')):the_row();
                echo '<div class="swiper-slide">'; 
                  template_part_atomic('/molecules/m-card-model/m-card-model', array('horizontal' => $is_horizontal));
                echo '</div>';
              endwhile;
            echo '</div>';
            template_part_atomic('atoms/a-arrows-slide/a-arrows-slide', array('slide_class' => 'swiper-button-next' ));
          echo '</div>';
          echo '<div class="swiper-pagination--content-project"></div>';
        endif;
        wp_reset_postdata();
      ?>

    </div>
  </div>