<?php 
    /* Card Program */
    wp_enqueue_style('m-card-program');
    wp_enqueue_script('m-card-program');

    $image = isset($args['image']) ? $args['image'] : '';
    $title = isset($args['title']) ? $args['title'] : '';
    $url = isset($args['url']) ? $args['url'] : '';
    $icon = isset($args['icon']) ? $args['icon'] : '';
    $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
    $b_color = isset($args['b_color']) ? $args['b_color'] : '';

?>

<div class="m-card-program <?php echo $custom_class; ?>">
    <div class="m-card-program__content">
        <img class="m-card-program__image" src="<?php echo $image; ?>" alt="<?php echo $title; ?>" style="background-color: <?php echo $b_color; ?>">
        <h4 class="m-card-program__title"><?php echo $title; ?></h4>
        <a href="<?php echo $url; ?>" class="m-card-program__link">
            <img class="m-card-program__link-icon" src="<?php echo $icon; ?>" alt="ir al programa">
        </a>
    </div>
</div>

