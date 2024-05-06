<?php 

/**
 * Molecule: Date Info
 * 
 * @package WordPress
 * @subpackage movemos marcas
 * @since 1.0
 * @version 1.0
 */

 wp_enqueue_style('m-date-info');
?>

<div class="m-date-info">
  <div class="m-date-info__item">
    <h4 class="m-date-info__text"><?php the_sub_field('duration_data'); ?></h4>
  </div>
  <div class="m-date-info__item">
    <h4 class="m-date-info__text"><?php the_sub_field('schedule_data'); ?></h4>
  </div>
  <div class="m-date-info__item">
    <h4 class="m-date-info__text"><?php the_sub_field('modality_data'); ?></h4>
  </div>
</div>