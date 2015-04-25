<?php
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
	public $error;
public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->connection = new mysqli($host, $username, $password);
		
		if ($this->connection->connect_error) {
			die("<p>Error: " . $this->connection->connect_error . "</p>");
		}
		
		$exists = $this->connection->select_db($database);
		
		if (!$exists) {
			//Sends a command to make a database
			$query = $this->connection->query("CREATE DATABASE $database");
			//this if statement echos that the database was created
			if ($query) {
				echo "<p>Successfully creaated database: " . $database . "</p>";
			}
		}
		else {
			echo "<p>Database already exists.</p>";
		}
	} 
	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
		
		//Checking if there was an error connecting to the database.
		if ($this->connection->connect_error) {
			die("<p>Error: " . $this->connection->connect_error . "</p>");
		}
	}

	public function closeConnection() {
		//checks if the variable has been set or not
		if(isset ($this->connection)) {
			$this->connection->close();
		}
	}
	public function query($string) {
		$this->openConnection();
		$query = $this->connection->query($string);
	
		if(!$query) {
			$this->error = $this->connection->error;
		}
		$this->closeConnection();
		return $query;
	}
}