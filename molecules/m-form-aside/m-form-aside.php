<?php 

/**
 * @package redaxo\theme\rexdev
 *
 * @internal
 */
  
 $asesor_name = isset($args['asesor_name']) ? $args['asesor_name'] : '';
 $asesor_picture = isset($args['asesor_picture']) ? $args['asesor_picture'] : '';
?>

<div class="m-form-aside">
  <div class="m-form-aside__content">
    <div class="m-form-aside__asesor">
      <img src="<?php echo $asesor_picture; ?>" alt="name" class="m-form-aside__asesor-pictur">
      <div class="m-form-aside__name">
        <h4 class="m-form-aside__name-text"><?php echo $asesor_name; ?></h4>
        <span class="m-form-aside__name-online">En línea</span>
      </div>
    </div>
    <div class="m-form-aside__time">
      <p class="m-form-aside__time-text">Tiempo de respuesta:</p>
      <span class="m-form-aside__time-value">menos de 1 minuto</span>
    </div>
    <div class="m-form-aside__form">
      <?php echo do_shortcode('[forminator_form id="988"]'); ?>
      <!-- <div class="m-form-aside__btn">
        <a href="#" class="m-form-aside__btn-wtss">
          <img class="m-form-aside__btn-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-wtss.svg" />
          <span class="m-form-aside__btn-text">INICIAR COVERSACIÓN</span>
        </a>
      </div> -->
    </div>
  </div>
 
  <div class="bnt-floats">
    <?php 
    template_part_atomic('atoms/a-btn-info/a-btn-info',
      array(
        'custom_class' => 'float-form',
        'target' => true
        ));
      ?>
  </div>
</div>