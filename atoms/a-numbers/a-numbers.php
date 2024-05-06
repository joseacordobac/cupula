<?php 

// Template parts numbers

wp_enqueue_style('a-numbers');
wp_enqueue_script('a-numbers');

$number = isset($args['number']) ? $args['number'] : '';
$custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
$custom_attr = isset($args['custom_attr']) ? $args['custom_attr'] : '';

?>

<h4 class="a-numbers <?php echo $custom_class; ?> js-a-numbers" <?php echo $custom_attr; ?> ><?php echo $number ?></h4>