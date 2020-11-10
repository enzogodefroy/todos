<?php

return array(
  '#namespace' => 'Ubiquity\\controllers\\admin\\traits',
  '#uses' => array (
  'Command' => 'Ubiquity\\devtools\\cmd\\Command',
  'CacheManager' => 'Ubiquity\\cache\\CacheManager',
  'Startup' => 'Ubiquity\\controllers\\Startup',
  'URequest' => 'Ubiquity\\utils\\http\\URequest',
  'CommandList' => 'Ubiquity\\controllers\\admin\\popo\\CommandList',
  'CommandValues' => 'Ubiquity\\controllers\\admin\\popo\\CommandValues',
  'HtmlLabel' => 'Ajax\\semantic\\html\\elements\\HtmlLabel',
  'HtmlForm' => 'Ajax\\semantic\\html\\collections\\form\\HtmlForm',
  'HtmlInput' => 'Ajax\\common\\html\\html5\\HtmlInput',
  'HtmlMessage' => 'Ajax\\semantic\\html\\collections\\HtmlMessage',
  'DataTable' => 'Ajax\\semantic\\widgets\\datatable\\DataTable',
  'Parameter' => 'Ubiquity\\devtools\\cmd\\Parameter',
  'UArray' => 'Ubiquity\\utils\\base\\UArray',
  'UString' => 'Ubiquity\\utils\\base\\UString',
  'JString' => 'Ajax\\service\\JString',
),
  '#traitMethodOverrides' => array (
  'Ubiquity\\controllers\\admin\\traits\\CommandsTrait' => 
  array (
  ),
),
  'Ubiquity\\controllers\\admin\\traits\\CommandsTrait' => array(
    array('#name' => 'property', '#type' => 'mindplay\\annotations\\standard\\PropertyAnnotation', 'type' => '\\Ajax\\php\\ubiquity\\JsUtils', 'name' => 'jquery')
  ),
);

