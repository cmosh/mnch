<?php
	return [
		/*
		|--------------------------------------------------------------------------
		| Default Remote Connection Name
		|--------------------------------------------------------------------------
		|
		| Here you may specify the default connection that will be used for SSH
		| operations. This name should correspond to a connection name below
		| in the server list. Each connection will be manually accessible.
		|
		*/
		'default'     => 'production',
		/*
		|--------------------------------------------------------------------------
		| Remote Server Connections
		|--------------------------------------------------------------------------
		|
		| These are the servers that will be accessible via the SSH task runner
		| facilities of Laravel. This feature radically simplifies executing
		| tasks on your servers, such as deploying out these applications.
		|
		*/
		'connections' => [
			'local_GubanSchool' => [
				'host'      => '192.168.133.33:10022',
				'username'  => 'web-admin',
				'password'  => '',
				'key'       => '/key/gubanpri.ppk',
				'keytext'   => '',
				'keyphrase' => '',
				'agent'     => '',
			],
			'local_Guban' => [
				'host'      => '41.89.6.233:10022',
				'username'  => 'web-admin',
				'password'  => '',
				'key'       => '/key/gubanpri.ppk',
				'keytext'   => '',
				'keyphrase' => '',
				'agent'     => '',
			],
			'SiteGuban' => [
				'host'      => '127.0.0.1:10022',
				'username'  => 'web-admin',
				'password'  => '',
				'key'       => '/key/gubanpri.ppk',
				'keytext'   => '',
				'keyphrase' => '',
				'agent'     => '',
			],
			'local_homestead' => [
				'host'      => '127.0.0.1:22',
				'username'  => 'vagrant',
				'password'  => '',
				'key'       => '/key/id_rsa.ppk',
				'keytext'   => '',
				'keyphrase' => '',
				'agent'     => '',
			],



		],
		/*
		|--------------------------------------------------------------------------
		| Remote Server Groups
		|--------------------------------------------------------------------------
		|
		| Here you may list connections under a single group name, which allows
		| you to easily access all of the servers at once using a short name
		| that is extremely easy to remember, such as "web" or "database".
		|
		*/
		'groups'      => [
			'web' => [ 'sandboxschool' ]
		],
	];
