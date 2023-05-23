<?php
if (!$database = mysqli_connect("localhost", "root", "12345678"))
    die("Sorry, could not connect to the server.");
if (!mysqli_select_db($database, "hubreak_db"))
    die("Sorry, could not find database.");
extract($_POST);
$query = "DELETE FROM cart WHERE n = $nname ";
if (!$result = mysqli_query($database, $query))
    die("Sorry, Item not deleted.");
mysqli_close($database);
header("Location:cart.php");
?>