<?php
	if(!isset($_SESSION))session_start();
	@ob_start();
	error_reporting(E_ERROR | E_PARSE);
	$serverName="localhost";
	$databaseName="ppoursaf";
	$databaseUser="ppoursaf";
	$databasePassword="TON_MOT_DE_PASSE";
	$dsn="mysql:dbname=$databaseName;host=$serverName";
	$conn=new PDO($dsn, $databaseUser, $databasePassword);
?>
