<?php 

wp_enqueue_style('m-info');
wp_enqueue_script('m-info');

$src = isset($args['src']) ? $args['src'] : '';
$title = isset($args['title']) ? $args['title'] : '';
$description = isset($args['description']) ? $args['description'] : '';

?>
<div class="m-info">
    <div class="m-info__img">
        <img src="<?php echo $src ?>" alt="info icono" class="m-info__img-icon" width="40" height="40">
    </div>
    <div class="m-info__text">
        <h3 class="m-info__text-title"><?php echo $title ?></h3>
        <p class="m-info__text-description"><?php echo $description ?></p>
    </div>
</div>