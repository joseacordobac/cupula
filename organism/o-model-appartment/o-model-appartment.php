<?php 

  /**
   * Template Name: Model Appartment
   * 
   */

   wp_enqueue_style('o-model-appartment');
  ?>

  <div class="o-model-appartment">
    <div class="o-model-appartment__content">
      <?php 
        $args = u_args_pt('apartamentos');
        $proyectos = new WP_Query($args);
        
        if($proyectos->have_posts()):
          while($proyectos->have_posts()):
            $proyectos->the_post();
            get_template_part('/molecules/m-card-model/m-card-model');
          endwhile;
        endif;

        wp_reset_postdata();
      ?>

    </div>
  </div>