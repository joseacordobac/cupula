<?php 

  /**
  * Template Name: Blog
  * Description: This is a custom template for entranate.
  */
  wp_enqueue_script( 'blog' );
  wp_enqueue_style('blog');

  $current_page = isset($_GET['current_page']) ? $_GET['current_page'] : 1;
?>

<?php get_header(); ?>
<?php
                                $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 2,
                                'paged' => $current_page
                                
                                    );
                    
                                $entradas = new WP_Query($args);
                                    ?>

<?php if ($entradas->have_posts()) : ?>

<?php while ($entradas->have_posts()) : $entradas->the_post();

$total_pages = $entradas->max_num_pages;

?>

<div class="contenedor-entrada-insight" style="margin-top: 5%">
    <div class="content-post-insight" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
        <div class="content-text-insight">
            <h3><?php the_title(); ?></h3>
            <div class="content-down-categoria">
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


            </div>
            <div class="btn-post">
                <a href="<?php echo get_the_permalink(); ?>"><img
                        src="<?php echo get_site_url(); ?>/wp-content/uploads/2024/06/row.png" alt="row-btn"></a>
            </div>

        </div>
    </div>
</div>
<?php endwhile ?>
<div class="pagination">
    <?php echo paginate_links(array(
        'total' => $total_pages,
        'next_text' => 'Adelante ->',
        'prev_text' => '<',
        'format' => '?current_page=%#%',
        'current' => $current_page
    )); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endif ?>






<?php get_footer(); ?>