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
    <?php
    $dbSessionDurationTime = $max * 60 * 1000;
    ?>
    <script type="text/javascript">
        var millis = <?php echo $dbSessionDurationTime; ?>

        function displaytimer() {
            var hours = Math.floor(millis / 36e5),
                mins = Math.floor((millis % 36e5) / 6e4),
                secs = Math.floor((millis % 6e4) / 1000);
            //    var remainingTime = mins + ':' + secs + ' minutes';
            //    console.log(remainingTime);
            //    document.write(remainingTime);
            //   location.reload();
            document.querySelector(".min").innerHTML = mins;
            document.querySelector(".sec").innerHTML = secs;
        }
        setInterval(function () {
            millis -= 1000;
            displaytimer();
        }, 1000);
    </script>
</body>

</html>