<?php
/**
 * Footer del tema.
 * @package OMTBID
 */
?>

</body>

<?php 
    if(wp_is_mobile()) {
      wp_enqueue_style('a-btn-imobile');
      wp_enqueue_script('a-btn-imobile');
    }
?>

<footer class="footer">
    <?php  get_template_part( 'organism/o-footer/o-footer', null, 
        array( 
            'class' => 'o-footer' 
        ) ); ?>
</footer>

<?php wp_footer(); ?>