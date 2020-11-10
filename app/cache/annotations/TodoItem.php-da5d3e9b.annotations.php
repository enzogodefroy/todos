<?php

return array(
  '#namespace' => 'models',
  '#uses' => array (
),
  '#traitMethodOverrides' => array (
  'models\\TodoItem' => 
  array (
  ),
),
  'models\\TodoItem::getId' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'mixed')
  ),
  'models\\TodoItem::getCaption' => array(
    array('#name' => 'return', '#type' => 'mindplay\\annotations\\standard\\ReturnAnnotation', 'type' => 'mixed')
  ),
  'models\\TodoItem::setId' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'mixed', 'name' => 'id')
  ),
  'models\\TodoItem::setCaption' => array(
    array('#name' => 'param', '#type' => 'mindplay\\annotations\\standard\\ParamAnnotation', 'type' => 'mixed', 'name' => 'caption')
  ),
);

