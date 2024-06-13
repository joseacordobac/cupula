<?php 
    // template part: get talent

    wp_enqueue_style('o-get-talent');
    wp_enqueue_script('o-get-talent');

    $title = isset($args['title']) ? $args['title'] : '';
    $description = isset($args['description']) ? $args['description'] : '';
    $btn_text = isset($args['btn_text']) ? $args['btn_text'] : '';
    $btn_link = isset($args['btn_link']) ? $args['btn_link'] : '';
    $image_id = isset($args['image_id']) ? $args['image_id'] : '';
    $imagen_size = isset($args['imagen_size']) ? $args['imagen_size'] : 'large';
    $internal_icon = isset($args['internal_icon']) ? $args['internal_icon'] : '';

    $video_embed = isset($args['video_embed']) ? $args['video_embed'] : '';

    $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
    $repeater_name = isset($args['repeater_name']) ? $args['repeater_name'] : '';
?>

<div class="o-get-talent <?php echo $custom_class; ?>">
    <div class="o-get-talent__content">
        <div class="o-get-talent__left">
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => $title,
                    'titles-type'   => 'a-titles--main o-get-talent__left-title',
                    'animations'    => 'a-titles--animation-typing',
                    )
                ); 
            ?>
            <div class="o-get-talent__left-description">
                <?php echo $description; ?>
            </div>
            <ul class="o-get-talent__list">
                <?php while( have_rows($repeater_name) ): the_row(); ?>
                    <?php get_template_part('/atoms/a-list/a-list', null,
                        array(
                            'item_list' => get_sub_field('option'),
                        ));
                    ?>
                <?php endwhile; ?>               
            </ul>
            <?php 
                template_part_atomic('atoms/a-btn/a-btn', 
                array(
                        'button_text' => $btn_text,
                        'button_link' => $btn_link,
                        'btn_type' => 'a-btn--primary',
                        'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                    )
                );
            ?>
        </div>
        <div class="o-get-talent__right">
            <?php get_template_part('/atoms/a-img/a-img', null,
                array(
                    'image_id' => $image_id,
                    'image_size' => $imagen_size,
                    'internal_icon' => $internal_icon,
                    'alt' => $title,
                    'class' => 'o-you-get-img',
                    'aspect_ratio' => '1/1'
                ));
            ?>
        </div>
    </div>
</div>