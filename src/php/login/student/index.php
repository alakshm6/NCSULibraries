
<?php
session_start();

if(!isset($_SESSION['NAME'])){
	header('Location: ../index.php');
	echo "Some thing wrong with session";
}

echo "<a href=\"HomePage.php\">Profile!</a>";
echo "<br> <br>";
echo "<a href=\"viewPages/AccountBalance.php\">Account Balance!</a>";
echo "<br> <br>";

echo "<a href=\"../../checkout/student/publications/CheckoutPublications.php\">To Check Out Resources!</a>";
echo "<br> <br>";

echo "<a href=\"viewPages/CheckedOut.php\">Checked Out Resources!</a>";
echo "<br> <br>";	
echo "<a href=\"viewPages/Notifications.php\">Notifications!</a>";
echo "<br> <br>";

echo "<a href=\"viewPages/ReserveRoom.php\">Reserve Room!</a>";
echo "<br> <br>";	
echo "<a href=\"viewPages/RoomCheckInCheckout.php\">Room CheckIn And Checkout!</a>";
echo "<br> <br>";


echo "<a href=\"viewPages/ReserveCamera.php\">Reserve Camera!</a>";
echo "<br> <br>";

echo "<a href=\"viewPages/CheckoutCamera.php\">Checkout Camera!</a>";
echo "<br> <br>";



?>