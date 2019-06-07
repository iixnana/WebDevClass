<?php 
//Include config
//require_once('/config/config.php');

//DB params
define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASS', 'admin');
define('DB_NAME', 'pizzacau');


//Helper file
//require_once('helpers/system_helper.php');

//Autoload
function __autoload($class_name) {
	require_once('libraries/'.$class_name.'.php');
}
?>