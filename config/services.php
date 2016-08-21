<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'firebase' => [
		'api_key' => env('FIREBASE_APIKEY'), // Only used for JS integration
		'auth_domain' => env('FIREBASE_AUTHDOMAIN'), // Only used for JS integration
		'database_url' => env('FIREBASE_DATABASEURL'),
		'secret' => env('FIREBASE_DATABASESECRET'),
		'storage_bucket' => env('FIREBASE_STORAGEBUCKET'), // Only used for JS integration
	],

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],

];
