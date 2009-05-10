<?php
// getting required files
require './includes/functions.php';

// setting up constants
define('APP_BOOTSTRAP', $_SERVER['SCRIPT_NAME']);

// setting up the db connection
$db = include './includes/db.inc.php';

// parse url, if any action is given
if(!empty($_SERVER['PATH_INFO']))
{
	$url = explode('/', substr($_SERVER['PATH_INFO'], 1));
	if(isset($url[0]))
	{
		$url['controller'] = $url[0];
	}
	if(isset($url[1]) && is_numeric($url[1]))
	{
		$url['id'] = $url[1];
	}
}
else
{
	// no action is given by url, we'll choose the default controller
	$url['action'] = 'default';
}

$controllers = array(

	'default' 	=> 'default.php',
	'show'		=> 'show.php'
);

if(array_key_exists($url['controller'], $controllers))
{
	include './includes/controllers/'.$controllers[$url['controller']];
}
else
{
	// invalid controller, choosing default
	include './includes/controllers/default.php';
}
?>
