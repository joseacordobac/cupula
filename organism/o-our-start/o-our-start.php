<?php 

    //Our start  -- template part

    wp_enqueue_style('o-our-start');
    wp_enqueue_script('o-our-start');

    $title = isset($args['title']) ? $args['title'] : '';
    $description = isset($args['description']) ? $args['description'] : '';
    $imagen = isset($args['img']) ? $args['img'] : '';
    $styles = isset($args['custom_class']) ? $args['custom_class'] : '';
?>

<div class="o-our-start <?php echo $styles; ?>">
    <div class="o-our-start__information">
        <h3 class="o-our-start__title"><?php echo $title; ?></h3>
        <div class="o-our-start__description"><?php echo $description; ?></div>
    </div>
    <div class="o-our-start__img">
        <?php get_template_part('/atoms/a-img/a-img', null, array(
                'image_id' => $imagen,
                'image_size' => 'large',
                'alt' => $title,
                'class' => 'a-img--default',
                'aspect_ratio' => '1/1',
            )); 
        ?>
</div>