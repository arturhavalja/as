<?php

include ('functions.php');

$action = $_POST["action"];
$data = [];
switch ($action) {
	case 'getEvents' :
		$data = getEvents(); break;

}

$result = json_encode($data);

echo $result;

?>
