<?php 

 /**
  * Template part: Youtube
  *
  * @param array $args
  * @param string $args['embed']
  * @return void
  */

  $embed = isset($args['embed']) ? $args['embed'] : '';
  $class = isset($args['class']) ? $args['class'] : '';

?>

<div class="m-youtube <?php echo $class; ?>">
  <?php echo $embed; ?>
</div>