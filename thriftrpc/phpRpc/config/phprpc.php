<?php
namespace PhpRpc;

return [
	// for phprpc itself
	'base_config' => [
		'host' => env('PHPRPC_HOST', '0.0.0.0'),
		'port' => env('PHPRPC_PORT', 9090),
		'count' => env('PHPRPC_WORK_COUNT', 16),
		'class' => env('PHPRPC_WORK_CLASS', 'Permission'),

	],

];
