<?php 

$db_server = "172.28.1.3";
$db_username = "root";
$db_password = "root";
$db_database = "test";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);

if (mysqli_connect_errno()) {
	echo 'Connection failed. Check the README in order to setup the DB connection.';
} else {
	echo 'Connected successfully to MySQL container at ' . $db_server;
}