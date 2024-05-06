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

$image_html = wp_get_attachment_image( $img_id, $image_size, false, array(
   'class' => 'm-testimonial__image',
   'alt' => $alt,
) );

?>

<div class="m-testimonial <?php echo $custom_class; ?>">
    <div class="m-testimonial__content">
        <div class="m-testimonial-left">
            <?php echo $image_html; ?>
        </div>
        <div class="m-testimonial-info">
            <h4 class="m-testimonial-info__name"><?php echo $name_testimonial; ?></h4>
            <?php 
            echo $possition != '' ? '<h5 class="m-testimonial-info__possition">'.$possition.'</h5>' : ''; ?>
            <p class="m-testimonial-info__text"><?php echo $testimonial; ?></p>
        </div>
    </div>
</div>
