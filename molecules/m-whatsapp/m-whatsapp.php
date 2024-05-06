
<?php 
    wp_enqueue_style('m-whatsapp'); 
    wp_enqueue_style( 'dashicons' );    
?>


<a href="https://wa.me/<?php the_field('whatsapp_number', 'whatsapp') ?>?text=<?php the_field('default_text', 'whatsapp') ?>" class="m-whatsapp" target="_blank">
    <span class="m-whatsapp__icon-whatspp dashicons dashicons-whatsapp"></span>
</a>