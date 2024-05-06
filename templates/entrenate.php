<?php
 /**
  * Template Name: Entrenate
  * Description: This is a custom template for entranate.
  * 
  */

  wp_enqueue_style('entrenate');
  wp_enqueue_script('entrenate');

?>

<?php get_header(); ?>
<main class="page-entrenate">
    <section class="entrenate-banner">
        <div class="entrenate-banner__content">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/circle-detail.png" alt="entrenate-banner" class="entrenate-banner__circle" with="195" height="200" />
            <h2 class="entrenate-banner__title"><?php the_field('main_text'); ?></h2>
        </div>
    </section>
    <section class="misiones g-content-regular">
        <?php get_template_part('/organism/o-iprogram/o-iprogram', null, 
            array(
                'btn-text'  => 'CONOCE MÁS',
                'direction' => 'horizontal',
                'custom-css' => '',
                'slider' => false
                )); 
            ?>
    </section>
    <section class="tranning-model">
        <?php get_template_part('/organism/o-tranning-model/o-tranning-model'); ?>
    </section>

    <section class="products">
        
    </section>

    <section class="testimonials">
        <div class="testimonials__content">
        <?php while( have_rows('new_realities') ) : the_row(); ?>
            <?php get_template_part('/atoms/a-titles/a-titles', null, 
                array(
                    'title'         => get_sub_field('titulo_de_seccion'),
                    'titles-type'   => 'a-titles--main',
                    'animations'    => 'js-title-typing',
                    'custom-css'    => 'g-content-middle'
                    )
                ); 
            ?>
            <?php get_template_part('/organism/o-testimonials/o-testimonials', null,
                array(
                    'repater_name'      => 'agregar_testimonsio',
                    'img_id'            => 'img_testimonial',
                    'alt'               => 'name',
                    'name_testimonial'  => 'name',
                    'testimonial'       => 'testimonial',
                    'possition'         => 'possition',
                    'custom_class'      => '',
                    'custom_class_card' => ''
                )
            ); ?>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="preguntas">
        <div class="preguntas__content g-content-5X">
            <?php get_template_part('/organism/o-faq/o-faq', null, 
                array(
                    'group' => 'frecuent_ask_question',
                    'title' => 'titulo_seccion',
                    'repeater' => 'questions_list',
                    'question' => 'question',
                    'answer' => 'Answer',
                    'custom_class' => 'o-faq--preguntas'
                    )
            ); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>