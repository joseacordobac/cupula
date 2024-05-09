<?php
/**
 * Footer del tema.
 * @package OMTBID
 */
?>

</body>

<footer class="footer">
    <?php  get_template_part( 'organism/o-footer/o-footer', null, 
        array( 
            'class' => 'o-footer' 
        ) ); ?>
</footer>

<?php wp_footer(); ?>