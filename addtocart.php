<?php
if (!$database = mysqli_connect("localhost", "root", "12345678"))
    die("Sorry, could not connect to the server.");
if
(!mysqli_select_db($database, "hubreak_db"))
    die("Sorry, could not find database.");
extract($_POST);
$query = "INSERT INTO cart (ID, quantity, price) VALUES ($ID, $quantity, $price) ";
mysqli_query($database, $query);
mysqli_close($database);
header("location:javascript://history.go(-1)");
?>