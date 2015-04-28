<?php
	require_once(__DIR__ . "/database.php");
	
	session_start();
	session_regenerate_id(true);

	
	$path = "/todo2/";
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "todo2";

	//checking if it has been set 
	if(!isset($_SESSION["connection"])) {
		//storing object mysqli
		$connection = new Database($host, $username, $password, $database);

		$_SESSION["connection"] = $connection;
	}