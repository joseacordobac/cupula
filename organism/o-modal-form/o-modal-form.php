<?php
/*
 * @package Cupula
 * Organism o-modal-form
 * Modal form
 */
 
  $custom_class = isset($args['custom_class']) ? $args['custom_class'] : '';
  $form_short_code = isset($args['form_short_code']) ? $args['form_short_code'] : ''; 
  $trigger_modal = isset($args['trigger_modal']) ? $args['trigger_modal'] : '';
?>

<div class="o-modal-form <?php echo $custom_class; ?>">
  <div class="o-modal-form__content">
    <div class="o-modal-form__slid-component">
      <span class="o-modal-form__close">X</span>
      <div class="o-modal-form__imagen">
        
      </div>
      <div class="o-modal-form__formulary">
        <h4 class="o-modal-form__title">Déjanos tus datos para enviarte más información del proyecto</h4>
        <?php echo do_shortcode($form_short_code); ?>
      </div>
    </div>
  </div>
</div>

<script>
  openDialogModals('<?php echo $trigger_modal; ?>');
</script>