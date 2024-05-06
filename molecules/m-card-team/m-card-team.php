<?php 

    wp_enqueue_script('m-card-team');
    wp_enqueue_style('m-card-team');

    $repeater = isset($args['repeater']) ? $args['reapeater'] : '';
    $imagen = isset($args['img']) ? $args['img'] : '';
    $name = isset($args['name']) ? $args['name'] : '';
    $possition = isset($args['possition']) ? $args['possition'] : '';
    $linked_url = isset($args['linkedUrl']) ? $args['linkedUrl'] : '';
    $boton_name = isset($args['boton_name']) ? $args['boton_name'] : '';
    $styles = isset($args['custom_class']) ? $args['custom_class'] : '';
?>

<div class="m-card-team <?php echo $styles; ?>">
    <div class="m-card-team__img">
        <?php get_template_part('atoms/a-img/a-img', null, array(
            'image_id' => $imagen,
            'image_size' => 'medium',
            'alt' => $title,
            'aspect_ratio' => '1/1',
        ) );
        ?>
    </div>

   <div class="m-card-team__body">
       <h3 class="m-card-team__title"><?php echo $name; ?></h3>
       <p class="m-card-team__possition"><?php echo $possition; ?></p>
       <div class="m-card-team__btn">
           <a href="<?php echo $linked_url; ?>" class="m-card-team__link" target="_blank">
                <img class="m-card-team__link-img" src="<?php echo get_template_directory_uri(); ?>/molecules/m-card-team/linkedin.svg" alt="likedin-logo">
                <?php echo $boton_name; ?>
           </a>
       </div>
    </div> 
</div>