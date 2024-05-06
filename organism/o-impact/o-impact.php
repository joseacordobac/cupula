<?php
/**
 * 
 * template part: impact
 * 
 */

 wp_enqueue_style('o-impact');
//  wp_enqueue_script('o-impact');

 $repater_name = isset($args['repeater_name']) ? $args['repeater_name'] : 'impact';
 $number = isset($args['number']) ? $args['number'] : '';
 $description = isset($args['description']) ? $args['description'] : '';
 $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

 $file_route = get_template_directory_uri().'/assets/img/map.svg';
 $contenidoSVG = file_get_contents($file_route);
?>

<div class="o-impact">
    <div class="o-impact__content <?php echo $custom_class; ?>">
        <div class="o-impact-left">
            <div class="o-impact-left__svg-map">
                <?php echo $contenidoSVG; ?>
            </div>
            <p class="o-impact-left__description"><?php the_sub_field('map_text'); ?></p>
        </div>
        <div class="o-impact-right">
            <div class="o-impact-right__grid">
                <?php while( have_rows($repater_name) ) : the_row(); ?>
                    <div class="o-impact-item">
                        <?php get_template_part('atoms/a-numbers/a-numbers', null, 
                            array(
                                'number' => get_sub_field($number),
                                'custom_class' => 'o-impact-item__number'
                            )); 
                        ?>
                        <p class="o-impact-item__description"><?php the_sub_field($description); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
            
            <div class="o-impact__content--talent">
                <div class="o-impact-right__data">
                    <h4 class="o-impact-right__title"><?php the_sub_field('our_talent'); ?></h4>
                    <p class="o-impact-right__description"><?php the_sub_field('talent_description'); ?></p>
                </div>
    
                <div class="o-impact-right__grid o-impact-right__grid--talents">
                    <?php while( have_rows('datos_talent') ) : the_row(); ?>
                        <div class="o-impact-item">
                            <?php get_template_part('atoms/a-numbers/a-numbers', null, 
                                array(
                                    'number' => get_sub_field($number),
                                    'custom_class' => 'o-impact-item__number'
                                )); 
                            ?>
                            <p class="o-impact-item__description"><?php the_sub_field($description); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        </div>
        
    </div>
</div>