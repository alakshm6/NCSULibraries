<?php

session_start();

if(!isset($_SESSION['NAME'])){
	header('Location: ../index.php');
	echo "Some thing wrong with session";
}

$conn = null;
require_once('../../../connections/Connection.php');
$UnityId = $_SESSION['NAME'];


$course = $_REQUEST['ID'];
$isbn = $_REQUEST['Identifier'];

echo "<br> <br>";
$ReserveBookQuery ="INSERT INTO RESERVES('{$UnityId}','{$course}','{$isbn}',SYSTIMESTAMP,(SYSTIMESAMP + INTERVAL '4' MONTH))";

var_dump($ReserveBookQuery);
$stid = oci_parse($conn, $ReserveBookQuery);
$result = oci_execute($stid);
if(!$result) {
	echo "Some error occurred while reserving book. If error persists contact support.";
	echo "<a href=\"ReserveBookForCourse.php\">Back</a>";
	echo "<br> <br>";
}
else {
	$query = "INSERT INTO NOTIFICATION('{$UnityId}',SYSTIMESTAMP,'Book with ISBN' || $isbn || ' has been reserved for course ' || $course || ' and expires on ' || (SYSTIMESTAMP + INTERVAL '4' MONTH))";	
	$stid = oci_parse($conn,$query);
	$result = oci_execute($stid);
	if(!$result) {
		echo " Unexpected error occurred while pushing notification. But book has been reserved for the course";
	} else {
		echo "<a href=\"Notifications.php\">Notifications!</a>";
		echo "<br> <br>";
	}
}


?>