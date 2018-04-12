<?php 
require_once 'Medoo.php';
use Medoo\Medoo;
global $db;
$db = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'tecnol43_servicios',
	'server' => 'tecnologiawebunid.com',
	'username' => 'tecnol43_ealor',
	'password' => 'ErickAlor1995&'
]);
?>