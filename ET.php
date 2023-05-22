<?php
if (!$database = mysqli_connect("localhost", "root", "12345678", "hubreak_db"))
    die("Sorry, could not connect to the server.");
extract($_POST);
$query = "select ET from cart,time where cart.ID= time.ID";
$max = 0;
$result = mysqli_query($database, $query);
while ($row = mysqli_fetch_row($result)) {
    foreach ($row as $value) {
        if ($value > $max)
            $max = $value;
    }
}
mysqli_close($database);
?>

<!Doctype html>
<html>

<head>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        box-sizing: border-box;
    }

    body {
        background-attachment: fixed;
        background-image: url("cover.jpg");
    }

    h1 {
        color: white;
        text-align: center;
        font-size: 80px;
    }
    </style>
</head>

<body>
    <h1 style="margin-top:20%">Your waiting time is : </h1>
    <?php print("<h1>$max minute</h1>"); ?>
</body>

</html>