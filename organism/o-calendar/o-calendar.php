<?php 
 /**
  * Organism: Calendar
  * 
  * @package WordPress
  * @subpackage movemos marcas
  * @since 1.0
  * @version 1.0
  */
  
  wp_enqueue_script('o-calendar');
  wp_enqueue_style('o-calendar');
?>
<div class="o-calendar">
  <?php get_template_part('molecules/m-date-mision/m-date-mision', null, array('custom_class' => 'o-calendar__date')); ?>
  <?php get_template_part('molecules/m-date-info/m-date-info', null, array('custom_class' => 'o-calendar__calendar')); ?>
</div>