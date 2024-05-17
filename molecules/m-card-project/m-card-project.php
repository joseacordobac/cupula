<?php 

  /** 
   * Organism o-projects
   */

   wp_enqueue_style('m-card-project');
   wp_enqueue_script('m-card-project');

   $id_post = get_the_ID();

   $image_project_id = get_field('imagen', $id_post);
   $custom_link = get_field('custom_link', $id_post);
   $button_link = $custom_link ? $custom_link : get_the_permalink();

   $image_logo = wp_get_attachment_image(get_field('project_logo'), 'medium', null, array('class' => 'm-card-project__logo-img'));
?>
<div class="swiper-slide">
  <article class="m-card-project">  
    <header class="m-card-project__header m-card-project__swiper">
      <div class="swiper-wrapper">
        <?php 
          while (have_rows('media')) : the_row();

          echo '<div class="swiper-slide">';
            get_template_part('/atoms/a-img/a-img', null,
            array(
                'image_id' => get_sub_field('imagen'),
                'image_size' => 'full',
                'alt' =>'Cupula proyectos',
                'class' => 'm-card-project__img',
                'has_video' => get_sub_field('video'),
                'img_radius' => true
            ));
          echo '</div>';

          endwhile;
        ?>
      </div>
      <div class="swiper-pagination swiper-pagination--project"></div>
    </header>
  
    <div class="m-card-project__body">
      <section class="m-card-project__body-content">
        <div class="m-card-project__logo">
          <?php echo $image_logo; ?>
          <div class="m-card-project__title">
            <h4 class="m-card-project__title-text"><?php the_field('project_title'); ?></h3>
            <h5 class="m-card-project__title-subtitle"><?php the_field('project_subtitle'); ?></h5>
          </div>
        </div>
        <div class="m-card-project__descripton">
          <p class="m-card-project__description-main"><?php the_field('main_description'); ?></p>
          <p class="m-card-project__description-general"><?php the_field('general_description'); ?></p>
        </div>
      </section>
      <footer class="m-card-project__footer">
        <?php get_template_part('/atoms/a-btn/a-btn', null, array(
          'button_text' => get_field('btn_text'),
          'button_link' => $button_link,
          'btn_type' => 'a-btn--primary',
          'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
        )); ?>
      </footer>
    </div>
  </article>
</div>