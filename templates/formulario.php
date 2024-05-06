<?php

/**
 * Template Name: Formulario
 * Description: This is a custom template for the home page.
 */

 wp_enqueue_style('formulario');
 get_header();

 $form_title = isset($_GET['mision']) ? ' en la misión </br>'.$_GET['mision'] : '';
 $register_name = isset($_GET['nombre']) ? ' '.$_GET['nombre'].'</br>' : '';
?>

<main class="main g-background--home">
    
    <section class="form-hero-banner">
        <div class="form-hero-banner__content">
            <h1 class="form-hero-banner__title">
                <span class="form-hero-banner__title-span"><?php echo $register_name ?></span>
                Gracias por registrarte<?php echo $form_title ?>
            </h1>
        </div>
    </section>
    <secton class="formulario">
        <?php the_content(); ?>
    </secton>

</main>

<?php get_footer(); ?>