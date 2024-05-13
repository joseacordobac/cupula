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
            'img_radius' => img radius,
            'has_video' => has video,
            'autoplay' => autoplay
        ));
 * **/

 wp_enqueue_style('a-img');
   
 $image_id = isset($args['image_id']) ? $args['image_id'] : '';
 $image_size = isset($args['image_size']) ? $args['image_size'] : 'large';
 $img_alt = isset($args['alt']) ? $args['alt'] : '';
 $custom_class = isset($args['class']) ? $args['class'] : '';
 $aspect_ratio = isset($args['aspect_ratio']) ? $args['aspect_ratio'] : '';
 $img_radius = isset($args['img_radius']) ? 'a-img__img--rounded' : '';
 $has_video = isset($args['has_video']) ? $args['has_video'] : false;
 $autoplay = isset($args['autoplay']) ? 'autoplay' : false;

 $img_path = wp_get_attachment_image($image_id, $image_size);
 $image_html = wp_get_attachment_image( $image_id, $image_size, false, array(
    'class' => 'a-img__img ' . $img_radius,
    'alt' => $img_alt,
) );


if($has_video){
$video_attr = [
    'poster' => wp_get_attachment_image_url($image_id, $image_size),
    'src' =>  $has_video['url'],
    'frameborder' => '0',
    'allowfullscreen' => 'allowfullscreen',
    'muted' => 'muted',
    'autoplay' => $autoplay,
    'loop' => 'loop',
    'class' => "$custom_class--video",
];

echo "<div class='a-img__video $custom_class--video'>" . wp_video_shortcode( $video_attr )."</div>";

}else{ ?>
    <div class="a-img <?php echo $custom_class; ?>">
        <?php echo $image_html; ?>
    </div>
<?php  }



