<?php
if (!$database = mysqli_connect("localhost", "root", "12345678", "hubreak_db"))
    die("Sorry, could not connect to the server.");
extract($_POST);
$query = "INSERT INTO cart (ID, n, price, quantity) VALUES ($ID, $na, $price, $quantity)";
mysqli_query($database, $query);
mysqli_close($database);
header("location:javascript://history.go(-1)");
?>