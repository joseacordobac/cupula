<?php 

/** template name: Socials */

wp_enqueue_style('m-socials');
wp_enqueue_script('m-socials');

$custom_css = isset($args['custom_css']) ? $args['custom_css'] : '';
?>

<div class="m-socials">
    <?php while(have_rows('redes_sociales', 'social')): the_row(); ?>
        <?php get_template_part('atoms/a-social/a-social', null, 
         array(
            'socialIcon' => get_sub_field('icono_redes_sociales', 'social'),
            'socialLink' => get_sub_field('redes_sociales', 'social'),
         )
    ); ?>
    <?php endwhile; ?>
</div>
