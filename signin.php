<?php
if (!$database = mysqli_connect("localhost", "root", "12345678"))
	die("Sorry, could not connect to the server.");
if (!mysqli_select_db($database, "hubreak_db"))
	die("Sorry, could not find database.");
extract($_POST);
$query = "SELECT * FROM user WHERE email = '$email' AND pass = '$pass'";
$result = mysqli_query($database, $query);
if (mysqli_num_rows($result) > 0)
	header("Location:Home.html");
else
	header("Location:Login_denied.html");
mysqli_close($database);
?>