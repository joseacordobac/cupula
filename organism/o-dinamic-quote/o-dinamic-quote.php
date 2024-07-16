<?php 

   /**
    * Organism Dinamic Quote
    */
?>

<div class="o-dinamic-quote">
  <?php
  $content = '<!-- wp:heading {"level":2,"style":{"color":"#ff0000"}} -->
  <h2 style="color:#ff0000" class="wp-block-heading">Este es un bloque de encabezado</h2>
  <!-- /wp:heading -->';

  echo apply_filters( 'the_content', $content );
  ?>
</div> 