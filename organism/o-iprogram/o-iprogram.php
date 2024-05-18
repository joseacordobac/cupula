<?php 
wp_enqueue_style('o-iprogram');
wp_enqueue_script('o-iprogram');


$button_text = isset($args['btn-text']) ? $args['btn-text'] : 'Aplicar';
$direction = isset($args['direction']) ? $args['direction'] : 'vertical';
$custom_css = isset($args['custom-css']) ? $args['custom-css'] : null;

$slider = isset($args['slider']) ? true : false;
$modal_trigger = isset($args['modal_trigger']) ? $args['modal_trigger'] : '';

$args = array(
    'post_type' => 'programas', 
    'posts_per_page' => 5,      
);

$query = new WP_Query($args); 
?>

<div class="<?php echo $custom_css; ?> o-iprogram__wrapper o-iprogram swiper-content">
    <div class="<?php echo !$slider ? 'swiper-wrapper' : ''; ?>  o-iprogram__container">
        <?php if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

            <div class="swiper-slide o-iprogram__slide">
                <?php get_template_part('molecules/m-card-iprogram/m-card-iprogram', null, 
                    array(
                        'btn-text' => $button_text,
                        'direction' => $direction,
                        'modal_trigger' => $modal_trigger
                    )); 
                ?>
            </div>

        <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>

    </div>
    <div class="o-iprogram__pagination"></div>  
</div>
