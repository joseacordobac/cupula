<?php

class AparmentCallBack
{
  public function call_back( WP_REST_Request $request ){

    $id_filter = $request->get_param('id_filter');

    $args = array(
        'post_type' => 'apartamentos', 
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'filtro', 
                'field'    => 'term_id',  
                'terms'    => $id_filter, 
            ),
        ),
        'posts_per_page' => -1,
    );

    $query = new WP_Query( $args );
    $post = [];
    if ($query->have_posts()) {

        while ($query->have_posts()) {
          $query->the_post();
          $post[] = array(
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'fields' => get_fields(get_the_ID()),
          );
        }
        
    }else{
      return new WP_REST_Response($post, 404);
    }

    return new WP_REST_Response($post, 200); 
  }
}
