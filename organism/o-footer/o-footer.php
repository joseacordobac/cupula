<?php 

/* template part footer */
wp_enqueue_style('o-footer');
wp_enqueue_script('o-footer');

get_template_part('atoms/a-btn-imobile/a-btn-imobile'); ?>

<div class="o-footer g-content-regular">

    <div class="o-footer__info">
        <div class="o-footer__section footer--pading">

            <?php get_template_part( 'atoms/a-logo/a-logo', null, array(
                'custom_class' => '',
                )); 
            ?>

            <div class="o-footer__bottom-nav-menu">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'nav-project',
                        'menu_class' => 'o-footer__botton-project o-footer-nav', 
                        'container' => 'div',
                        'container_class' => 'o-footer__botton-project-content',
                        'container_id' => 'o-footer__botton-project-content'
                  ));            
                ?>
            </div>
            
            <div class="o-footer__bottom-nav-social">
                
                <?php  get_template_part( 'molecules/m-nav-footer/m-nav-footer', null, array(
                    'custom_class' => 'o-footer-nav',
                ) ); ?>

            </div>
            
        </div>
    </div>

    
    <div class="o-footer__bottom">
        <div class="o-footer__botton-politics-menu">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'nav-legal',
                    'menu_class' => 'o-footer__botton-nav-legal', 
                    'container' => 'div',
                    'container_class' => 'o-footer__botton-nav-content',
                    'container_id' => 'o-footer__botton-nav-content'
                  ));            
            ?>
        </div>
        <?php get_template_part('molecules/m-socials/m-socials', null, array(
                'custom_class' => '',
                'repeater' => 'redes_sociales',
        )); ?>
    </div>

</div>
