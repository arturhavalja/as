<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "as_events_managments";


$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn) {
	echo "Connection failed with db";
	die;
}



?>