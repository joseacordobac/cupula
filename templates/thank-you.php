<?php 
    /**
     * Template Name: Thank You page
     */

    wp_enqueue_style('thank-you');
?>
<?php get_header(); ?>
    <main class="main">
        <div class="thank-you">
            <div class="thank-you__content">
                <div class="thank-you__img">
                    <img class="thank-you__image" src="<?php the_field('imagen'); ?>" alt="thank-you">
                </div>
                <div class="thank-you__description">
                    <h1 class="thank-you__title">
                        <?php the_field('title'); ?>
                    </h1>
                    <h2 class="thank-you__subtitle">
                        <?php the_field('subtitle'); ?>
                    </h2>
                    <div class="thank-you__description-text">
                        <?php the_field('description'); ?>
                    </div>
                    <?php get_template_part('/atoms/a-btn/a-btn', null,
                        array(
                            'button_text' => get_field('btn_text'),
                            'button_link' => get_field('url_btn'),
                            'btn_type' => 'a-btn--primary',
                            'icons_path' => get_template_directory_uri().'/assets/icons/arrow-to-right.svg',
                            'custom_class' => 'thank-you__btn'
                            )
                        );
                    ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>