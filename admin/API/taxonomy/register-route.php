<?php

add_action('rest_api_init', function () {
  register_rest_route(PATH_API, '/filters/', array(
      'methods' => 'GET',
      'callback' => array(new TaxonomyCallback(), 'call_back'),
  ));
});
