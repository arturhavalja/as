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


?>