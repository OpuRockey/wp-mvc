<?php

return 	[
	'constantVar' => [
		WPAPI_BASEURL => plugin_dir_url(__FILE__),
		WPAPI_BASEPATH => plugin_dir_path(__FILE__)
	],
	'controllers' =>[
		'Core\Controllers\AdminController',
		'Core\Controllers\ApiController',
	],
	'scripts' => [
		['wp-api-script', 'assets/js/wp-api-script.js',array('jquery'), '1.0.0', true]
	],
	'styles' => [
		['wp-api-style', 'assets/css/wp-api-style.css']
	]
] ;