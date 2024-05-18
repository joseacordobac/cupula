<?php 
   /**
    * Organism Events
    */

    wp_enqueue_script('o-events' );
    wp_enqueue_style('o-events');
?>

<div class="events-resources">
  <div class="events-resources">
    <h3 class="events-resources__title">Eventos y recursos</h3>
    
    <div class="events-resources-swipe swiper swiper-content">
      <div class="swiper-wrapper">
      
        <?php 
          $args = array('post_type' => 'events','posts_per_page' => 10);

          $posts = new WP_Query($args); 

          if($posts->have_posts()) {
                while($posts->have_posts()):
                    $posts->the_post();

                    get_template_part('molecules/m-card-event/m-card-event', null, array(
                      'img_id'      => get_post_thumbnail_id(),
                      'title'       => get_the_title(),
                      'excerpt'     => get_the_excerpt(),
                      'fecha'       => get_field('fecha'),
                      'hora'        => get_field('hora'),
                      'medio'       => get_field('medio'),
                      'plataforma'  => get_field('plaforma'),
                      'btn_text'    => get_field('btn_text'),
                      'btn_link'    => get_field('btn_link'),
                      'custom_class' => 'swiper-slide',
                    ));

                endwhile;
                wp_reset_postdata();
              } 
        ?>
            
      </div>
      <div class="events_resource-swiper__pagination"></div>
    </div>

  </div>
</div>