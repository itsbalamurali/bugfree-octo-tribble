<?php
//$openshift_db = ''$_SERVER['OPENSHIFT_MYSQL_DB_HOST']':'$_SERVER['OPENSHIFT_MYSQL_DB_PORT']'';
//Database Information
if($_SERVER['HTTP_HOST'] == "localhost" )
{

$db_host = "localhost"; //Host address (most likely localhost)
$db_name = "cake"; //Name of Database
$db_user = "root"; //Name of database user
$db_pass = "milanohio"; //Password for database user
$db_table_prefix = "app_";
	
}
else
{

$db_host = $_SERVER['OPENSHIFT_MYSQL_DB_HOST']; //Host address in ENV tunnel.pagodabox.com:3306
$db_name = $_SERVER['OPENSHIFT_GEAR_NAME']; //Name of Database ENV database
$db_user = $_SERVER['OPENSHIFT_MYSQL_DB_USERNAME'];//Name of database user ENV magaly
$db_pass = $_SERVER['OPENSHIFT_MYSQL_DB_PASSWORD']; //Password for database user ENV j4hIFZDV

$db_table_prefix = "app_";
	
}

GLOBAL $errors;
GLOBAL $successes;

$errors = array();
$successes = array();

/* Create a new mysqli object with database connection parameters */
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
GLOBAL $mysqli;

if(mysqli_connect_errno()) {
	echo "Connection Failed: " . mysqli_connect_errno();
	exit();
}

/*
//Direct to install directory, if it exists
if(is_dir("install/"))
{
	header("Location: install/");
	die();

}
*/
?>