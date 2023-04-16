<?php
if (!$database = mysqli_connect("localhost", "root", "12345678"))
    die("Sorry, could not connect to the server.");
if (!mysqli_select_db($database, "hubreak_db"))
    die("Sorry, could not find database.");
extract($_POST);
$query = "INSERT INTO user (name, email, pass) values ('$name' , '$email', '$pass')";
if (!mysqli_query($database, $query))
    header("Location:Signup_failed.html");
else
    header("Location:Account_created.html");
mysqli_close($database);
?>