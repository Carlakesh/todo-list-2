<?php
	require_once(__DIR__ . "/database.php");
	require_once(__DIR__ . "/date.php");
	session_start();
	session_regenerate_id(true);

	
	$path = "/todo-2/";
	
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "todo-2";

	//checking if it has been set 
	if(!isset($_SESSION["connection"])) {
		//storing object mysqli
		$connection = new Database($host, $username, $password, $database);

		$_SESSION["connection"] = $connection;
	}