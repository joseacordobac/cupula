<?php 

/**
 * Molecule: IProgram
 * @param array $args
 **/

 wp_enqueue_style('m-card-iprogram');
//  wp_enqueue_script('m-card-iprogram');

$button_text = isset($args['btn-text']) ? $args['btn-text'] : 'Aplicar';
$direction = isset($args['direction']) ? $args['direction'] : 'vertical';
$modal_trigger = isset($args['modal_trigger']) ? $args['modal_trigger'] : '';
?>

<div class="m-card-iprogram <?php echo 'm-card-iprogram--' . $direction; ?>">
    <a href="<?php get_the_permalink(); ?>" class="m-card-iprogram__head">
        <?php get_template_part('/atoms/a-img/a-img', null, 
            array(
                'class' => 'm-card-iprogram__image-el',
                'image_id' => get_post_thumbnail_id(),
                'image_size' => 'large',
                'alt' => get_the_title(),
                'video_link' => '',
                'aspect_ratio' => '16/9',
            )
        ); ?>
    </a>
    <div class="m-card-iprogram__body">
        <a class="m-card-iprogram__title" href="<?php get_the_permalink(); ?>">
            <div class="m-card-iprogram__title-link" >
                <img src="<?php the_field('mision_icon'); ?>" alt="icon misión" class="m-card-iprogram__icon" width="47" height="47">
                <h3 class="m-card-iprogram__title-el">
                    <span class="m-card-iprogram__title--name">Misión </span>
                    <span class="m-card-iprogram__title--title"><?php the_title(); ?></span>
                </h3>
            </div>

            <?php get_template_part('/atoms/a-tags/a-tags', null); ?>
            
            <p class="m-card-iprogram__description"><?php the_field('descripcion'); ?></p>
        </a>
        <?php 
            $modal_trigger ? $btn_link = '#formulario' : $btn_link = get_permalink();
            template_part_atoms('atoms/a-btn/a-btn', 
            array(
                    'button_text' => $button_text,
                    'button_link' => $btn_link,
                    'btn_type' => 'a-btn--primary',
                    'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                    'custom_css' => $modal_trigger,
                )
            );
        ?>
    </div>    
</div>