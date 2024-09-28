<?php

class TaxonomyCallback
{
  public function call_back( WP_REST_Request $request ){

    $id_parent = $request->get_param('id_parent');
    $id_parent = isset($id_parent) ? intval($id_parent) : 0;

    $terms = get_terms(array(
      'taxonomy' => 'filtro',
      'hide_empty' => true,
      'parent' => $id_parent
    ));

    $terms_array = array();

    if (!is_wp_error($terms)) {
      $terms_array = array();
      foreach ($terms as $term) {
        $terms_array[] = array(
          'parent' => $term->parent,
          'id' => $term->term_id,
          'name' => $term->name,
          'slug' => $term->slug,
          'description' => $term->description,
        );
      }
    } else {
      $terms_array = array();
    }

    return new WP_REST_Response($terms_array, 200); 
  }
}
