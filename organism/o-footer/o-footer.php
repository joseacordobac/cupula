<?php 

/* template part footer */
wp_enqueue_style('o-footer');
wp_enqueue_script('o-footer');

?>

<?php 
    get_template_part( 'molecules/m-whatsapp/m-whatsapp', null, array( 'custom_class' => 'footer--pading' ) );
?>

<div class="o-footer g-content-regular">

    <div class="o-footer__info">
        <div class="o-footer__bottom-social footer--pading">

            <?php get_template_part( 'atoms/a-logo/a-logo', null, array(
                'custom_class' => '',
                )); 
            ?>
            
            <div class="o-footer__bottom-nav-social">
                
                <?php  get_template_part( 'molecules/m-nav-footer/m-nav-footer', null, array(
                    'custom_class' => '',
                ) ); ?>

                <?php get_template_part('molecules/m-socials/m-socials', null, array(
                    'custom_class' => '',
                    'repeater' => 'redes_sociales',
                )); ?>
            </div>
            
        </div>
    </div>

    <div class="o-footer__info">
        <?php get_template_part('molecules/m-info-list/m-info-list', null, array(
            'repeater' => 'datos',
            'custom_class' => 'footer--pading',
        ));
        ?>
    </div>
    

    <div class="o-footer__bottom">
        <div class="o-footer__bottom-text">
            <p>© <?php echo date("Y"); ?> Betek. Todos los derechos reservados | Desarrollado por <a class="o-footer__bottom-link" href="https://movemosmarcas.com/" target="_blank">movemosmarcas.com</a></p>
        </div>
        <a href="https://makaia.org/politica-de-tratamiento-de-datos/" target="_blank" class="o-footer__policy">Política de privacidad</a>
    </div>

</div>
