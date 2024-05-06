<?php
/**
 * Organism: o-faq
 * @param array $args
 * /
 **/

 wp_enqueue_style('o-faq');
 wp_enqueue_script('o-faq');
 
 $group = isset($args['group']) ? $args['group'] : '';
 $title = isset($args['title']) ? $args['title'] : '';
 $repeater = isset($args['repeater']) ? $args['repeater'] : '';
 $question = isset($args['question']) ? $args['question'] : '';
 $answer = isset($args['answer']) ? $args['answer'] : '';

 $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';

?>

<?php while (have_rows($group)): the_row(); ?>
    <div class="o-faq <?php echo $custom_class; ?>">
        <?php get_template_part('/atoms/a-titles/a-titles', null, 
            array(
                'title'         => get_sub_field($title),
                'titles-type'   => 'a-titles--main',
                'animations'    => 'js-title-typing',
                'custom-css'    => 'o-faq__title',
                )
            );
        ?>

        <div class="o-faq__content">
            <?php while(have_rows($repeater)) : the_row(); ?>
                <?php get_template_part('/molecules/m-faq/m-faq', null, 
                    array(
                        'question'      => get_sub_field($question),
                        'answer'         => get_sub_field($answer),
                        'custom_class'  => 'o-faq-card',
                    )
                ); ?>
            <?php endwhile; ?>
        </div>

    </div>
<?php endwhile; ?>