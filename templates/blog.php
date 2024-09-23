<?php

/**
 * Template Name: Blog
 * Description: This is a custom template for entranate.
 */
wp_enqueue_script('blog');
wp_enqueue_style('blog');
wp_enqueue_style('single');

$current_page = isset($_GET['current_page']) ? $_GET['current_page'] : 1;
$get_category = isset($_GET['cat']) ? $_GET['cat'] : false;
$search = isset($_GET['buscar']) ? $_GET['buscar'] : false;


function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}
?>




<?php get_header(); ?>


<section id="banner-conocenos">
    <div class="content-banner-transversal">
        <div class="titulo-banner-transversal">
            <h1 class="">Blog</h1>
        </div>
        <div class="img-banner-transversal" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

        </div>

    </div>

</section>

<section id="destacados-form">
    <div class="container">
        <div class="content-destacados-form">
            <div class="content-destacados">

                <?php
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'tax_query' => array(array('taxonomy' => 'category', 'field' => 'slug', 'terms' => 'destacados'))
                );

                $entradas = new WP_Query($args);
                ?>

                <?php if ($entradas->have_posts()) : ?>

                    <?php while ($entradas->have_posts()) : $entradas->the_post();

                    ?>

                        <a href="<?php echo get_the_permalink(); ?>" class="contenedor-entrada-blog">
                            <div class="content-img-post-blog"
                                style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

                            </div>
                            <div class="content-text-blog">
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
                                <p><?php echo excerpt('19'); ?></p>

                            </div>
                        </a>
                    <?php endwhile ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif ?>

            </div>
            <div class="content-form">

                <div class="control-form-sidebar">
                    <form action="" method="get">
                        <input type="text" placeholder="Buscador" name="buscar" value="<?php echo $search; ?>">
                        <button type="submit"> Buscar </button>
                    </form>

                    <h4>Navega por temas de tu interés</h4>
                    <?php
                    // Obtener todas las categorías
                    $categories = get_categories();

                    if (!empty($categories)) {
                        echo '<ul class="post-categories">';
                        foreach ($categories as $category) {
                            // Mostrar el nombre de la categoría con un enlace a la página de la categoría
                            echo '<li>';
                            echo '<a href="' . get_the_permalink() .  '?cat=' . $category->slug .  ' ">';
                            echo esc_html($category->name);
                            echo '</a>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo 'No hay categorías disponibles.';
                    }
                    ?>

                    <div class="content-redes-sidebar">
                        <?php

                        get_template_part(
                            '/atoms/a-btn-info/a-btn-info',
                            null,
                            array(
                                'custom_class' => '',
                                'target' => true
                            )
                        );
                        ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-secondsection">
    <div class="container">
        <div class="content-posts-second">


            <?php

            $excluded_category_id = get_cat_ID('Destacados');
            $args = array(
                's' => $search,
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 6,
                'paged' => $current_page,
                'category__not_in' => array($excluded_category_id),

            );
            if ($get_category) {
                $args['tax_query'] = array(array('taxonomy' => 'category', 'field' => 'slug', 'terms' => $get_category));
            }
            $entradas = new WP_Query($args);
            ?>

            <?php if ($entradas->have_posts()) : ?>

                <?php while ($entradas->have_posts()) : $entradas->the_post();

                    $total_pages = $entradas->max_num_pages;

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
                            <p><?php echo excerpt('19'); ?></p>

                        </div>
                    </a>
                <?php endwhile ?>

                <?php wp_reset_postdata(); ?>
            <?php endif ?>

        </div>
        <div class="pagination">
            <?php echo paginate_links(array(
                'total' => $total_pages,
                'next_text' => 'Adelante -->',
                'prev_text' => '<-- Atrás',
                'format' => '?current_page=%#%',
                'current' => $current_page
            )); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>