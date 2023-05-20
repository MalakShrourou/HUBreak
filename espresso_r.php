<?php
$db = mysqli_connect("localhost", "root", "12345678", "hubreak_db");
$s1 = $_POST["s1"];
$s2 = $_POST["s2"];
$s3 = $_POST["s3"];
$s4 = $_POST["s4"];
$s5 = $_POST["s5"];
if ($s1) {
    $q = "insert into espresso_rate(espress_r)values('$s1')";
    mysqli_query($db, $q);
}
if ($s2) {
    $q = "insert into espresso_rate(espress_r)values('$s2')";
    mysqli_query($db, $q);
}
if ($s3) {
    $q = "insert into espresso_rate(espress_r)values('$s3')";
    mysqli_query($db, $q);
}
if ($s4) {
    $q = "insert into espresso_rate(espress_r)values('$s4')";
    mysqli_query($db, $q);
}
if ($s5) {
    $q = "insert into espresso_rate(espress_r)values('$s5')";
    mysqli_query($db, $q);
}

mysqli_close($db);
header("location:javascript://history.go(-1)");

?>
