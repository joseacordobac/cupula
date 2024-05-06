<?php 

    //Team

    wp_enqueue_script('o-team');
    wp_enqueue_style('o-team');

    $repeater_name = isset($args['repeater']) ? $args['repeater'] : '';
    $imagen = isset($args['img']) ? $args['img'] : '';
    $name = isset($args['name']) ? $args['name'] : '';
    $possition = isset($args['possition']) ? $args['possition'] : '';
    $linked_url = isset($args['linkedUrl']) ? $args['linkedUrl'] : '';
    $boton_name = isset($args['boton_name']) ? $args['boton_name'] : '';
    $styles = isset($args['custom_class']) ? $args['custom_class'] : '';
?>

<div class="o-team <?php echo $styles; ?>">
    <?php while(have_rows($repeater_name, 'team')) : the_row(); ?>
        <?php get_template_part('molecules/m-card-team/m-card-team', null, array(
            'img' => get_sub_field($imagen, 'team'),
            'name' => get_sub_field($name, 'team'),
            'possition' => get_sub_field($possition, 'team'),
            'linkedUrl' => get_sub_field($linked_url, 'team'),
            'boton_name' => get_sub_field($boton_name, 'team'),
        )); ?>
        
    <?php endwhile; ?>
</div>