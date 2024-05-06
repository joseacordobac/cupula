<?php 

wp_enqueue_style('a-social');

$social_icon = isset($args['socialIcon']) ? $args['socialIcon'] : '';
$social_link = isset($args['socialLink']) ? $args['socialLink'] : '';

?>

<a href="<?php echo $social_link; ?>" class="a-social" target="_blank">
    <img class="a-social__icon" src="<?php echo $social_icon; ?>" alt="social icon" width="18" height="18" />
</a>