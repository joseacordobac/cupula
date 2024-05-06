<?php 
 
/**
 * Organism: o-tranning-model
 * @param array $args
 **/

 wp_enqueue_style('o-tranning-model');
 wp_enqueue_script('o-tranning-model');
?>

<?php while(have_rows('tranning_mode')): the_row(); ?>
    <div class="o-tranning-model">
        <div class="o-tranning-model__img">
            <?php 
                $imagen_id = get_sub_field('img');
                $html_img = wp_get_attachment_image($imagen_id, 'medium-large', false, array('class' => 'o-tranning-model__img-src'));

                echo $html_img;
            ?>
        </div>
        <div class="o-tranning-model__model">
            <h3 class="o-tranning-model__title"><?php echo get_sub_field('section_title'); ?></h3>
            <div class="o-tranning-model__content">
                <?php 
                $number = 1;
                while(have_rows('tranning_list')): the_row(); ?>
                    <div class="o-tranning-model__item">
                    
                    <?php get_template_part('/atoms/a-numbers/a-numbers', null, 
                        array(
                            'number' => $number < 10 ? '0'.$number++ : $number ++,
                            'custom_class' => 'o-tranning-model__number',
                        )
                    ); ?>
                        <div class="o-tranning-model__list-content">
                            <h3 class="o-tranning-model__list-title"><?php echo get_sub_field('title'); ?></h3>
                            <p class="o-tranning-model__list-description"><?php echo get_sub_field('description'); ?></p>
                        </div>
                    </div>  
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>