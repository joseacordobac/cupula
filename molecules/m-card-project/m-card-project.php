<?php 

  /** 
   * Organism o-projects
   */

   wp_enqueue_style('m-card-project');

   $image_project_id = get_field('imagen');
   $custom_link = get_field('custom_link');
   $button_link = $custom_link ? $custom_link : get_the_permalink();

   $image = wp_get_attachment_image($image_project_id, 'full', null, array('class' => 'm-card-project__img'));
   $image_logo = wp_get_attachment_image(get_field('project_logo'), 'medium', null, array('class' => 'm-card-project__logo-img'));
?>

<article class="m-card-project">  
  <header class="m-card-project__header">
    <?php echo $image; ?>
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