<?php 
  /**
   * Info Project
   * @param array $args
   */

   $logo = isset($args['logo']) ? $args['logo'] : null;
   $title = isset($args['title']) ? $args['title'] : null;
   $sub_title = isset($args['sub_title']) ? $args['sub_title'] : null;
   $btn_text = isset($args['btn_text']) ? $args['btn_text'] : null;
   $btn_link = isset($args['btn_link']) ? $args['btn_link'] : null;

   $html_img = wp_get_attachment_image($logo, 'full', false, array('class' => 'm-info-project__img-icon'));
?>

<div class="m-info-project">
   <div class="m-info-project__img">
      <?php echo $html_img; ?>
   </div>
   <div class="m-info-project__texts">
      <h3 class="m-info-project__texts-title"><?php echo $title; ?></h3>
      <p class="m-info-project__texts-subtitle"><?php echo $sub_title; ?></p>
      <?php template_part_atomic(
        'atoms/a-btn/a-btn', array(
          'button_text' => $btn_text, 
          'button_link' => $btn_link, 
          'btn_type' => 'a-btn--quinary', 
          'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg'), 'm-info-project'); 
      ?>
   </div>
</div>