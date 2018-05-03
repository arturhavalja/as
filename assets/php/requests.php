<?php

include ('functions.php');

$action = $_POST["action"];
$data = [];
switch ($action) {
	case 'getEvents' :
		$data = getEvents(); 
		break;
	case 'subscribe':
		$email = $_POST["email"];
		$data = subscribe($email);
}

$result = json_encode($data);

echo $result;

?>
