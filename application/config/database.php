<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

if(ENVIRONMENT == 'production')
{
	$db['default']['hostname'] = 'us-cdbr-azure-west-c.cloudapp.net';
	$db['default']['username'] = 'b98de423f68884';
	$db['default']['password'] = '016a22d4';
	$db['default']['database'] = 'discussionboard';
}
else
{
	$db['default']['hostname'] = '';
	$db['default']['username'] = '';
	$db['default']['password'] = '';
	$db['default']['database'] = '';
}

$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

//end of database.php