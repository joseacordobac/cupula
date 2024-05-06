<?php

/* template part for displaying info list
 */

 wp_enqueue_style('m-info-list');
 wp_enqueue_script('m-info-list');

 $repeater = isset($args['repeater']) ? $args['repeater'] : null;
 $custom_class = isset($args['custom_class']) ? $args['custom_class'] : null;

?>
<div class="m-info-list <?php echo $custom_class; ?>">
    <?php while(have_rows($repeater, 'contacto')) : the_row(); ?>
        <?php get_template_part('molecules/m-info/m-info', null, 
        array(
            'title'         => get_sub_field('title', 'contacto'),
            'src'           => get_sub_field('imagenes', 'contacto'),
            'description'   => get_sub_field('informacion', 'contacto'),
        ));?>
    <?php endwhile; ?>
</div