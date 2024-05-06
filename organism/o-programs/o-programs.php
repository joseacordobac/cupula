<?php 

/** 
 * template parts Programas
*/

wp_enqueue_script('js-swiper');
wp_enqueue_style('css-swiper');

wp_enqueue_script('o-programs');
wp_enqueue_style('o-programs');

$img_alt = isset($args['alt']) ? $args['alt'] : '';
$img_path = isset($args['src']) ? $args['src'] : '';
$title = isset($args['title']) ? $args['title'] : '';

$repeater_name = isset($args['repeater_name']) ? $args['repeater_name'] : '';
$icon_mision = isset($args['icon_mision']) ? $args['icon_mision'] : '';
$b_color = isset($args['b_color']) ? $args['b_color'] : '';
$title_mision = isset($args['title_mision']) ? $args['title_mision'] : '';
$link_mision = isset($args['link_mision']) ? $args['link_mision'] : '';
$icon = isset($args['icon']) ? $args['icon'] : '';
$custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

?>

<div class="o-programs <?php echo $custom_class; ?>">
    <div class="o-programs__container">
        <div class="o-programs__left">
            <?php get_template_part('/atoms/a-img/a-img', null, 
                array(
                    'class' => 'o-programs__img',
                    'alt'   => $img_alt,
                    'src'   => $img_path,
                    'aspect_ratio' => '1/1.5'
                )
            ); ?>
        </div>
        <div class="o-programs__right">
            <div class="o-programs__right-content">
                <h4 class="o-programs__rigth-title"><?php echo $title ?></h4>
                <div class="o-programs-list js-programs">
                    <div class="swiper-wrapper o-programs__swiper-wrapper">
                    <?php while( have_rows($repeater_name) ): the_row(); ?>
                        
                        <?php get_template_part('/molecules/m-card-program/m-card-program', null,
                            array(
                                'image' => get_sub_field($icon_mision),
                                'title' => get_sub_field($title_mision),
                                'url' => get_sub_field($link_mision),
                                'b_color' => get_sub_field('mision_color'),
                                'icon' => $icon,
                                'custom_class' => 'swiper-slide'
                            ));
                        ?>
                    <?php endwhile; ?> 
                    </div>
                    <div class="swiper-pagination-programs"></div>
                </div>
            </div>
        </div>
    </div>
</div>