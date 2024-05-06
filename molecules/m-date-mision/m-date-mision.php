<?php 

/**
 * Molecule: Date Mision
 * 
 * @package WordPress
 * @subpackage movemos marcas
 * @since 1.0
 * @version 1.0
 */

 wp_enqueue_style('m-date-mision');	
?>

<div class="m-date-mision">
  <div class="m-date-mision__content">
    <h4 class="m-date-mision__title"><?php the_sub_field('start_date'); ?></h4>
  </div>
</div>