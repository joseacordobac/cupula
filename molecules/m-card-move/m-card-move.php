<?php 

    //Template part
    wp_enqueue_script('m-card-move');
    wp_enqueue_style('m-card-move');

    $title = isset($args['title']) ? $args['title'] : '';
    $description = isset($args['description']) ? $args['description'] : '';
    $number = isset($args['number']) ? $args['number'] : '';
    $styles = isset($args['custom_class']) ? $args['custom_class'] : '';
    $color = isset($args['color']) ? $args['color'] : '';
?>

<div class="m-card-move <?php echo $styles; ?>" >
    <div class="m-card-move__number">
        <?php get_template_part('atoms/a-numbers/a-numbers', null, 
            array(
                'number' => $number,
                'custom_class' => 'm-card-move--number',
                'custom_attr' => 'style="background-color:'.$color.'"'
            )); 
        ?>
    </div>
    <div class="m-card-move__description">
        <h3 class="m-card-move__text-title"><?php echo $title; ?></h3>
        <p class="m-card-move__text-description"><?php echo $description; ?></p>
    </div>
</div>