<?php

/**
 * Organism Dinamic Quote
 */
?>

<div class="o-dinamic-quote">
  <div class="o-dinamic-quote__content">
    
    <?php template_part_atomic('atoms/a-titles/a-titles', array(
      'title' => 'Cotiza aquí tu apartamento ideal',
      'titles-type' => 'h3',
      'custom-css' => 'o-dinamic-quote__title',
    )); ?>

    <ul class="o-dinamic-quote__steps">
      <li class="o-dinamic-quote__steps-element">
        <span class="o-dinamic-quote__steps-num">1.</span> Elige Torre
      </li>
      <li class="o-dinamic-quote__steps-element">
        <span class="o-dinamic-quote__steps-num">2.</span> Elige Piso
      </li>
      <li class="o-dinamic-quote__steps-element">
        <span class="o-dinamic-quote__steps-num">3.</span> Elige Área
      </li>
      <li class="o-dinamic-quote__steps-element">
        <span class="o-dinamic-quote__steps-num">4.</span> Elige Distribución
      </li>
    </ul>

    <div class="o-dinamic-quote__sections">

        <div class="o-dinamic-quote__map">
          <img src="<?php echo get_template_directory_uri() . '/organism/o-dinamic-quote/img/vista-proyecto.png'; ?>" alt="" class="o-dinamic-quote__map-img">
          <div class="o-dinamic-quote__map-tower o-dinamic-quote__map-tower--1">
            <h4 class="o-dinamic-quote__map-tower-title">Torre 1</h4>
          </div>
          <div class="o-dinamic-quote__map-tower o-dinamic-quote__map-tower--2">
            <h4 class="o-dinamic-quote__map-tower-title">Torre 2</h4>
          </div>
          <div class="o-dinamic-quote__map-tower o-dinamic-quote__map-tower--3">
            <h4 class="o-dinamic-quote__map-tower-title">Torre 3</h4>
          </div>
          <div class="o-dinamic-quote__map-tower o-dinamic-quote__map-tower--4">
            <h4 class="o-dinamic-quote__map-tower-title">Torre 4</h4>
          </div>
          <div class="o-dinamic-quote__map-tower o-dinamic-quote__map-tower--5">
            <h4 class="o-dinamic-quote__map-tower-title">Torre 5</h4>
          </div>
        </div>
      
        <div class="o-dinamic-quote__floor">
          <div class="o-dinamic-quote__floor-content">
            <div class="o-dinamic-quote__floor-options">
              <h4 class="o-dinamic-quote__floor-title">Elige piso</h4>
              <ul class="o-dinamic-quote__floor-list">
                
              </ul>
            </div>
          </div>
        </div>
    
      </div>

  </div>
</div>