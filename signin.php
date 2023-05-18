<?php

session_start();

if (!$database = mysqli_connect("localhost", "root", "12345678"))
	die("Sorry, could not connect to the server.");
if (!mysqli_select_db($database, "hubreak_db"))
	die("Sorry, could not find database.");
extract($_POST);
$query = "SELECT * FROM user WHERE email = '$email'";
if(!$result = mysqli_query($database, $query))
	die("wrong query");
if (mysqli_num_rows($result) == 1){
	$row = mysqli_fetch_assoc($result);
    if ($password == $row['password']) {
	$_SESSION['email'] = $email;
	header("Location:Home.html");
}}
else {
	header('Location: login.html?error=invalid_credentials');
}
	header("Location:Login_denied.html");
mysqli_close($database);
?>
