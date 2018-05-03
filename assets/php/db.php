<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$db_name = "test";


$conn = mysqli_connect($servername, $username, $password, $db_name);

if(!$conn) {
	echo "Connection failed with db1";
	die;
}



?>