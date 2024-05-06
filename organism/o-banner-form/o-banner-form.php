<?php 

    /** 
     * Template part: Banner Form
    */

    wp_enqueue_style('o-banner-form');
    $id_form = get_field('imagen', 'form');
    $imagen = wp_get_attachment_image($id_form, 'large', null, array('class' => 'o-banner-form__imagen-src'));
?>

<section class="o-banner-form">
    <div class="o-banner-form__content">
       <div class="o-banner-form__imagen">
          <?php echo $imagen; ?>
       </div>
       <div class="o-banner-form__form">
          <?php get_template_part('molecules/m-form-basic/m-form-basic', null, ''); ?>
       </div>
    </div>
</section>