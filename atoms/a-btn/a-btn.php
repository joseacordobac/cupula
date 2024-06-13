<?php

/** template part for buttons 
 * @param array $args
 * @return void
 * @example 
    template_part_atomic('atoms/a-btn/a-btn', 
        array(
            'button_text' => 'Read More',
            'button_link' => '#',
            'btn_type' => 'a-btn--primary',
            'custom_css' => 'g-with-100',
            'target' => '_blank',
            'icons_path' => get_template_directory_uri().'/assets/icons'
        );
    );
 */

// wp_enqueue_style('a-btn');

$button_text = isset($args['button_text']) ? $args['button_text'] : '';
$button_link = isset($args['button_link']) ? $args['button_link'] : '';
$icons_path = isset($args['icons_path']) ? $args['icons_path'] : '';
$btn_type = isset($args['btn_type']) ? $args['btn_type'] : 'a-btn--primary';
$custom_css = isset($args['custom_css']) ? $args['custom_css'] : '';
$target = isset($args['target']) ? $args['target'] : '';

?>

<div class="a-btn">
    <a href="<?php echo $button_link; ?>" target="<?php echo $target ?>" class="a-btn__content <?php echo $btn_type . ' ' . $custom_css; ?>">
        <span class="a-btn__text"><?php echo $button_text; ?></span>
        <img class="a-btn__icon" src="<?php echo $icons_path; ?>" alt="arrow-right" width="27" height="27">
    </a>
</div>