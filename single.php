<?php 

get_header(); 
wp_enqueue_style('single');
?>

<section id="main-single">
    <div class="container">
        <div class="content-main-single">
            <main id="content-single">
                <div class="content-img-single" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                </div>
                <ul class="control-categoria">
                    <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                echo '<li>' . esc_html($category->name) . '</li>';
                            }
                        }
                    ?>
                </ul>
                <h3><?php the_title(); ?></h3>
                <div class="content-calendar-date-single">
                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/08/calendar-post.svg">
                    <span><?php echo get_the_time('j F Y'); ?></span>
                </div>
                <p><?php the_content(); ?></p>
            </main>

            <div class="content-form">
                <div class="control-form-sidebar">

                    <h4>Navega por temas de tu interés</h4>
                    <?php
                        $categories = get_categories();
                        if (!empty($categories)) {
                            echo '<ul class="post-categories">';
                            foreach ($categories as $category) {
                                echo '<li>';
                                echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">';
                                echo esc_html($category->name);
                                echo '</a>';
                                echo '</li>';
                            }
                            echo '</ul>';
                        } else {
                            echo 'No hay categorías disponibles.';
                        }
                        ?>

                    <!-- <div class="content-redes-sidebar">
                        <?php 
                            get_template_part('/atoms/a-btn-info/a-btn-info', null, 
                                array(
                                    'custom_class' => '',
                                    'target' => true
                                )
                            );
                            ?>
                    </div> -->
                    <?php template_part_atomic('molecules/m-form-aside/m-form-aside', array(
                'asesor_name' => 'Natalia Serna',
                'asesor_picture' => get_stylesheet_directory_uri() . '/assets/img/asesora.jpg',
            )); ?>

                </div>
            </div>

        </div>

    </div>
</section>


<?php 
$image = get_field('imagen_destacada_blog', 1094);
if( !empty( $image ) ): ?>
<section id="img-destacada">
    <div class="container">
        <div class="content-img-destacada" style="background-image: url(<?php echo esc_url($image['url']); ?>);"></div>
    </div>
</section>
<?php endif; ?>


<section id="related-posts">
    <div class="container">
        <?php template_part_atomic('/atoms/a-titles/a-titles', 
                array(
                    'title'         => 'Últimas noticias',
                    'titles-type'   => 'a-titles--main',                                )
                ); 
            ?>
        <div class="content-posts-second">
            <?php
            // Query arguments
            $related_args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 3, 
                'orderby' => 'rand',
                'post__not_in' => array(get_the_ID()), // Evitar conflicto con $post
            );

            // The query
            $relatedPosts = new WP_Query($related_args);

            // Loop through query
            if($relatedPosts->have_posts()) {
                while($relatedPosts->have_posts()) {
                    $relatedPosts->the_post();
            ?>

            <a href="<?php echo get_the_permalink(); ?>" class="contenedor-entrada-blog second">
                <div class="content-img-post-blog second"
                    style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                </div>
                <div class="content-text-blog second">
                    <ul class="control-categoria">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            foreach ($categories as $category) {
                                echo '<li>' . esc_html($category->name) . '</li>';
                            }
                        }
                    ?>
                    </ul>
                    <h3><?php the_title(); ?></h3>
                    <div class="content-calendar-date">
                        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/08/calendar-post.svg">
                        <span><?php echo get_the_time('j F Y'); ?></span>
                    </div>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 19); ?></p>
                    <!-- Cambié excerpt('19') por wp_trim_words -->
                </div>
            </a>

            <?php
                }
            } else {
                echo 'No posts found';
            }

            // Restore original post data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>