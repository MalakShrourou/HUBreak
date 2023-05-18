<?php
if (!$database = mysqli_connect("localhost", "root", "12345678"))
    die("Sorry, could not connect to the server.");
if (!mysqli_select_db($database, "hubreak_db"))
    die("Sorry, could not find database.");
extract($_POST);
if (preg_match('/^([0-9A-Za-z_$]{8})$/', $password)) {
    $query = "INSERT INTO user (name, email, password) values ('$name' , '$email', '$password')";
    if (!mysqli_query($database, $query))
        mysqli_error($database);
    else
        header("Location:Login.html");
} else
    die("Try another password");
mysqli_close($database);
?>
