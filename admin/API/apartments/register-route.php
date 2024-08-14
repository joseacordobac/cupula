<?php

add_action('rest_api_init', function () {
  register_rest_route(PATH_API, '/apartment/', array(
      'methods' => 'GET',
      'callback' => array(new AparmentCallBack(), 'call_back'),
  ));
});
