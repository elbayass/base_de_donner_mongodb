<?php
define('UserAuth', 'root');
define('PasswordAuth', 'simplonco');

$config = array(
	'username' => 'root',
	'password' => 'simplonco',
	'dbname'   => 'blog',
	//'cn' 	   => sprintf('mongodb://%s:%d/%s', $hosts, $port,$database),
	'connection_string'=> sprintf('mongodb://%s:%d/%s','127.0.0.1','27017','blog')
);
