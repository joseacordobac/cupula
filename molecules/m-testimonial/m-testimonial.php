<?php
//   template part: testimnonios 

wp_enqueue_style('m-testimonial');
wp_enqueue_script('m-testimonial');

    $img_id = isset($args['img_id']) ? $args['img_id'] : '';
    $alt = isset($args['alt']) ? $args['alt'] : '';
    $image_size = isset($args['image_size']) ? $args['image_size'] : 'medium';
    $name_testimonial = isset($args['name_testimonial']) ? $args['name_testimonial'] : '';
    $testimonial = isset($args['testimonial']) ? $args['testimonial'] : '';
    $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
    $possition = isset($args['possition']) ? $args['possition'] : '';
?>

<div class="m-testimonial <?php echo $custom_class; ?>">
    <div class="m-testimonial__content <?php echo $img_id ? '' : 'm-testimonial-left--has-img'; ?>">
        <?php if($img_id != ''): ?>
            <div class="m-testimonial-left">
                <?php 
                    get_template_part('/atoms/a-img/a-img', null,
                    array(
                        'image_id' => $img_id,
                        'image_size' => "full",
                        'alt' => $alt,
                        'class' => "m-testimonial__image",
                        'img_radius' => true
                        // 'has_video' => has video,
                        // 'autoplay' => autoplay
                    ));
                ?>
            </div>
        <?php endif; ?>
        <div class="m-testimonial-info">
            <h4 class="m-testimonial-info__name"><?php echo $name_testimonial; ?></h4>
            <?php 
            echo $possition != '' ? '<h5 class="m-testimonial-info__possition">'.$possition.'</h5>' : ''; ?>
            <p class="m-testimonial-info__text"><?php echo $testimonial; ?></p>
        </div>
    </div>
</div>
