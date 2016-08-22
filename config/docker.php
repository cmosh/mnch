<?php

return [
	'host'   => env('DOCKER_APP_HOST','0.0.0.0'),
	'caddy'  => env('CADDY_HTTP_PORT',8000),
	'ssl'    => env('CADDY_SSL_PORT',8443),
	'config' => env('CADDY_CONFIG_PORT',2015),
	'mongo'  => env('DOCKER_MONGO_PORT',27018),
	'redis'  => env('DOCKER_REDIS_PORT',6380)
];
