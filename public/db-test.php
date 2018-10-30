<?php 

// Server is mysql docker container's IP address
// Found by docker inspect <cid>
$db_server = "172.18.0.4";
$db_username = "test";
$db_password = "test";
$db_database = "test";

// Create connection
$db_connection = new mysqli($db_server, $db_username, $db_password, $db_database);

if (mysqli_connect_errno()) {
	echo 'Connection failed. Check the README in order to setup the DB connection.';
} else {
	echo 'Connected successfully to MySQL container at ' . $db_server;
}