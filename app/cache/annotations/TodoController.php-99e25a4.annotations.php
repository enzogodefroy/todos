<?php

return array(
  '#namespace' => 'controllers',
  '#uses' => array (
  'URequest' => 'Ubiquity\\utils\\http\\URequest',
  'TodoItem' => 'models\\TodoItem',
  'TodoSessionLoader' => 'services\\TodoSessionLoader',
),
  '#traitMethodOverrides' => array (
  'controllers\\TodoController' => 
  array (
  ),
),
  'controllers\\TodoController' => array(
    array('#name' => 'property', '#type' => 'mindplay\\annotations\\standard\\PropertyAnnotation', 'type' => '\\Ajax\\php\\ubiquity\\JsUtils', 'name' => 'jquery')
  ),
  'controllers\\TodoController::$loader' => array(
    array('#name' => 'autowired', '#type' => 'Ubiquity\\annotations\\di\\AutowiredAnnotation'),
    array('#name' => 'var', '#type' => 'mindplay\\annotations\\standard\\VarAnnotation', 'type' => 'TodoSessionLoader')
  ),
  'controllers\\TodoController::setLoader' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => '\\services\\TodoSessionLoader', 'name' => 'loader')
  ),
  'controllers\\TodoController::delete' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'string', 'name' => 'id'),
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', 'delete/{id}')
  ),
  'controllers\\TodoController::index' => array(
    array('#name' => 'route', '#type' => 'Ubiquity\\annotations\\router\\RouteAnnotation', '_default')
  ),
  'controllers\\TodoController::add' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "add")
  ),
  'controllers\\TodoController::submit' => array(
    array('#name' => 'post', '#type' => 'Ubiquity\\annotations\\router\\PostAnnotation', "add")
  ),
  'controllers\\TodoController::clear' => array(
    array('#name' => 'get', '#type' => 'Ubiquity\\annotations\\router\\GetAnnotation', "clear")
  ),
);

