<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'controllers\\HelloController' => 
  array (
  ),
),
  'controllers\\HelloController' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', 'hello','automated'=>true)
  ),
  'controllers\\HelloController::msg' => array(
    array('#name' => 'post', '#type' => 'Ubiquity\\annotations\\router\\PostAnnotation')
  ),
);

