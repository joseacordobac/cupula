<?php 


/**
 * Template Name: Conocenos
 * Description: This is a custom template for the home page.
 */

 get_header(); 

 wp_enqueue_script('js-swiper');
 wp_enqueue_style('css-swiper');
 
 wp_enqueue_script('ScrollTrigger');
 wp_enqueue_script('gsap');
 wp_enqueue_script('gsap-text');

 wp_enqueue_script('conocenos');
 wp_enqueue_style('conocenos');
 
 ?>

<section id="banner-conocenos">
    <div class="content-banner-transversal">
        <div class="titulo-banner-transversal">
            <h1 class="">Cónocenos</h1>
        </div>
        <div class="img-banner-transversal" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

        </div>

    </div>

</section>

<section id="second-section-conocenos">
    <div class="container">
        <?php
       $conocenos_descripcion = get_field('descripcion_conocenos');
       if( $conocenos_descripcion ): ?>
        <div class="content-second-section-conocenos">
            <div class="video-second-section-conocenos">
                <?php echo $conocenos_descripcion['video']; ?>
            </div>
            <div class="text-second-section-conocenos">
                <h3><?php echo $conocenos_descripcion['titulo']; ?></h3>
                <p><?php echo $conocenos_descripcion['descripcion']; ?></p>
                <div class="content-redes-descripcion">
                    <?php 

                        get_template_part('/atoms/a-btn-info/a-btn-info', null, 
                            array(
                                'custom_class' => '',
                                'target' => true
                            )
                        );
                        ?>
                </div>

            </div>
        </div>
        <?php endif; ?>

    </div>

</section>

<?php get_footer(); ?>