<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Copyright © 2019
 * Update : July, 07 2019
 * Deveploment : Muh. Ramadhan
 * Version : Beta 1.1
 * Mail : muh.ramadhan@email.com
 * Contact : +6282191272636
 */
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'e_bukutamu',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8mb4',
	'dbcollat' => 'utf8mb4_unicode_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
