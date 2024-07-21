<?php

add_action('rest_api_init', function () {
  register_rest_route(PATH_API, '/datos/', array(
      'methods' => 'GET',
      'callback' => 'taxonomies_call_back',
  ));
});

function taxonomies_call_back(WP_REST_Request $request) {
  $data = array(
      'mensaje' => 'Hola, este es tu endpoint personalizado!',
      'fecha' => date('Y-m-d H:i:s'),
  );

  return new WP_REST_Response($data, 200);
}