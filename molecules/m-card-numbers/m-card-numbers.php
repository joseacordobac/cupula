<?php 

    //Template part
    wp_enqueue_script('m-card-numbers');
    wp_enqueue_style('m-card-numbers');

    $description = isset($args['description']) ? $args['description'] : '';
    $number = isset($args['number']) ? $args['number'] : '';
    $styles = isset($args['custom_class']) ? $args['custom_class'] : '';
?>

<div class="m-card-numbers <?php echo $styles; ?>">
    <div class="m-card-numbers__number">
        <?php get_template_part('atoms/a-numbers/a-numbers', null, 
            array(
                'number' => $number,
                'custom_class' => 'o-impact-item__number'
            )); 
        ?>
    </div>
    <div class="m-card-numbers__description">
        <p class="m-card-numbers__text-description"><?php echo $description; ?></p>
    </div>
</div>