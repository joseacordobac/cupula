<?php 

/** template part: a-img 
 * 
 *  get_template_part('/atoms/a-img/a-img', null,
        array(
            'image_id' => imagen id,
            'image_size' => imagen size,
            'alt' => alt name,
            'class' => img class,
            'aspect_ratio' => aspect ratio
            'internal_icon' => internal icon
            'has_video' => has video
            'img_radius' => img radius
        ));
 * **/

 wp_enqueue_style('a-img');
//  wp_enqueue_script('a-img');
//  wp_enqueue_script('lighmodal');   
   
 $image_id = isset($args['image_id']) ? $args['image_id'] : '';
 $image_size = isset($args['image_size']) ? $args['image_size'] : 'large';
 $img_alt = isset($args['alt']) ? $args['alt'] : '';
 $internal_icon = isset($args['internal_icon']) ? $args['internal_icon'] : '';
 $custom_class = isset($args['class']) ? $args['class'] : '';
 $aspect_ratio = isset($args['aspect_ratio']) ? $args['aspect_ratio'] : '';
 $has_video = isset($args['has_video']) ? $args['has_video'] : false;
 $img_radius = isset($args['img_radius']) ? 'a-img__img--rounded' : '';

 $img_path = wp_get_attachment_image($image_id, $image_size);
 $image_html = wp_get_attachment_image( $image_id, $image_size, false, array(
    'class' => 'a-img__img ' . $img_radius,
    'alt' => $img_alt,
) );

$img_icon = wp_get_attachment_image($internal_icon, 'medium');
$icon_html = wp_get_attachment_image( $img_icon, $image_size, false, array(
   'class' => 'a-img__video-icon',
   'alt' => $img_alt,
) );

?>

<div class="a-img <?php echo $custom_class; ?>">
    <?php echo $image_html; ?>

    <?php if($internal_icon && $has_video === false): ?>
        <?php echo $icon_html; ?>
    <?php endif; ?> 

    <?php if($has_video && strlen($has_video) > 0): ?>
        <img class="a-img__video-icon" src="<?php echo $internal_icon; ?>" alt="Play Icon" width="100" height="100" />
    <?php endif; ?> 
</div>

<?php if($has_video): ?>
    <dialog class="a-img__dialog">
        <div class="a-img__dialog__title">
            <div class="a-img__dialog__close">X</div>
            <?php the_sub_field('url_video'); ?>
        </div>
        <div class="a-img__video-overlay"></div>
    </dialog>
<?php endif; ?>
