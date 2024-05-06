<?php 
    /* Atom: Titles 
        get_template_part('/atoms/a-titles/a-titles', null, 
        array(
            'title'         => '',
            'titles-type'   => '',
            // 'animations'    => ''
            )
        ); 
    */


    $title = isset($args['title']) ? $args['title'] : '';
    $type = isset($args['titles-type']) ? $args['titles-type'] : '';
    $animations = isset($args['animations']) ? $args['animations'] : '';
    $custom_css = isset($args['custom-css']) ? $args['custom-css'] : '';

    wp_enqueue_style('a-titles');
    // wp_enqueue_script('a-titles');
?>

<div class="a-titles <?php echo $type . ' ' . $custom_css . ' ' . $animations; ?>">
    <h3 class="a-titles-title"><?php echo $title; ?></h3>
</div>
