<?php
include ('db.php');


function getEvents () {

	$sql = "SELECT * from as_events where 1";

	global $conn;
	$result = mysqli_query($conn, $sql);


	$events = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$events[] = $row;
	}

	return $events;
}

function subscribe ($email) {

	$email = trim($email, ' ');

	if ($email == '') {
		return 'Invalid data.';
	}
	$safe_email = $email;
	//mysql_real_escape_string($safe_email);

	$sql = "INSERT INTO as_subscribe (email) VALUES ('" . $safe_email . "')";

	global $conn;
	$result = mysqli_query($conn, $sql);
	
	if ($result == false) {
		return 'fail';
	}
	return 'success';
}


?>