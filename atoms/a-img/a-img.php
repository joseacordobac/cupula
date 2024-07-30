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
            'img_radius' => true,
            'has_video' => has video,
            'has_modal' => has modal,
            'autoplay' => autoplay,
        ));
 * **/

 wp_enqueue_style('a-img');
 wp_enqueue_script('a-img');
   
 $image_id = isset($args['image_id']) ? $args['image_id'] : '';
 $image_size = isset($args['image_size']) ? $args['image_size'] : 'large';
 $custom_class = isset($args['class']) ? $args['class'] : '';
 $aspect_ratio = isset($args['aspect_ratio']) ? $args['aspect_ratio'] : '';
 $img_radius = isset($args['img_radius']) ? 'a-img__img--rounded' : '';

 $has_video = isset($args['has_video']) ? $args['has_video'] : false;
 $autoplay = isset($args['autoplay']) ? 'autoplay' : false;

 $has_modal = isset($args['has_modal']) ? $args['has_modal'] : false;
 $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);

 $img_alt = isset($args['alt']) ? $args['alt'] : $alt_text;


 $img_path = wp_get_attachment_image($image_id, $image_size);

 $image_html = wp_get_attachment_image( $image_id, $image_size, false, array(
    'class' => 'a-img__img ' . $img_radius,
    'alt' => $img_alt,
) );

$play_icon = '<div class="a-img__video-play a-img__video-play--stop"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-player-play-filled" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#14387F" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 4v16a1 1 0 0 0 1.524 .852l13 -8a1 1 0 0 0 0 -1.704l-13 -8a1 1 0 0 0 -1.524 .852z" stroke-width="0" fill="#14387F" /></svg></div>';

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
}

if($has_modal && $has_video){ ?>
    <div class="a-img <?php echo $custom_class; ?> a-img--modal">
        <?php 
            echo $image_html; 
            echo $play_icon;
        ?>
        <div class='a-img__video a-img__video-modal '>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x a-img__modal-close" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 6l-12 12" /><path d="M6 6l12 12" /></svg>
            <?php echo wp_video_shortcode( $video_attr ); ?>
        </div>
    </div>
    <?php 
    return; 
}

 
if($has_video){
    echo "<div class='a-img__video $custom_class--video'>" . wp_video_shortcode( $video_attr )." $play_icon</div>";
}else{ ?>
    <div class="a-img <?php echo $custom_class; ?>">
        <?php echo $image_html; ?>
    </div>
<?php  }



