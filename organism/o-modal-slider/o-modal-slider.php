<?php
/*
 * @package Cupula
 * Organism o-modal-slider
 * Modal Slider
 */
?>

<div class="o-modal-slider o-modal-slider--open">
  <div class="o-modal-slider__content">
    <span class="o-modal-slider__close">X</span>
    <div class="o-modal-slider__slid-component">
      <?php template_part_atomic('organism/o-gallery-slider/o-gallery-slider', array(
        'repeater' => 'gallery-list',
        'img_id' => 'gallery-id-img',
        'custom_class' => 'o-gallery-slider--project'
      ));  ?>
    </div>
  </div>
    </div>