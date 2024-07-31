<?php
/*
 * @package Cupula
 * Organism o-modal-slider
 * Modal Slider
 */
?>

<dialog class="o-modal-slider" open>
  <div class="o-modal-slider__content">
    <div class="o-modal-slider__close">X</div>
    <div class="o-modal-slider__slid-component">
      <?php template_part_atomic('organism/o-gallery-slider/o-gallery-slider', array(
        'repeater' => 'gallery-list',
        'img_id' => 'gallery-id-img',
        'custom_class' => 'o-gallery-slider--project'
      ));  ?>
    </div>
  </div>
</dialog>