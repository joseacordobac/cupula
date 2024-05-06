<?php 

/** molecule m-video */
wp_enqueue_style('m-video');

$image_id = isset($args['image_id']) ? $args['image_id'] : '';
$imagen_size = isset($args['image_size']) ? $args['image_size'] : 'thumbnail';
$img_alt = isset($args['alt']) ? $args['alt'] : '';
$video_link = isset($args['video_link']) ? $args['video_link'] : '';
$custom_class = isset($args['class']) ? $args['class'] : '';
$aspect_ratio = isset($args['aspect_ratio']) ? $args['aspect_ratio'] : '';

?>

<div class="m-video" <?php $custom_class; ?> >
    <?php get_template_part('/atoms/a-img/a-img', null, 
        array(
            'class' => 'has-video__video',
            'image_id' => $image_id,
            'image_size' => $imagen_size,
            'alt' => $img_alt,
            'video_link' => $video_link,
            'aspect_ratio' => $aspect_ratio,
            'internal_icon' => get_template_directory_uri() . '/assets/icons/play-video.svg',
            'has_video' => $video_link
        )
    ); ?>
    <div class="m-video__modal">
        <?php echo $video_link; ?>
    </div>
</div>