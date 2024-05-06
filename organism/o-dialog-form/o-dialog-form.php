<?php 

    /** 
     * Template part: Dialog Form
    */
    wp_enqueue_style('o-dialog-form');
    wp_enqueue_script('o-dialog-form');
?>

<dialog class="o-dialog-form" >
    <span class="o-dialog-form__close-icon">X</span>
    <?php get_template_part('organism/o-banner-form/o-banner-form', null, ''); ?>
</dialog>