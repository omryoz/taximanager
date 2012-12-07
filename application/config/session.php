<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'cookie' => array(
	  'name' => 'ttm_cook',
	  'encrypted' => TRUE,
	  'lifetime' => 0,
	),
	'native' => array(
	  'name' => 'ttm_sess',
	  'encrypted' => TRUE,
	  'lifetime' => 0,
	),
	'database' => array(
	  'group' => 'default',
	  'table' => 'table_name',
	),
);