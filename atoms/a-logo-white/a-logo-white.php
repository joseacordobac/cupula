<?php
 /** @var string */

 wp_enqueue_script('a-logo-white');
 wp_enqueue_style('a-logo-white');

 $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
 ?>

<div class="a-logo-white <?php echo $custom_class; ?>">
    <a href="/" class="a-logo-white__link">
        <img class="a-logo-white__logo" src="<?php echo get_template_directory_uri() . '/assets/icons/imagen-logo.svg'; ?>" alt="logo Betek" width="100" height="60" />
    </a>
</div>