<?php
session_start();
if (!$database = mysqli_connect("localhost", "root", "12345678"))
    die("Sorry, could not connect to the server.");
if (!mysqli_select_db($database, "hubreak_db"))
    die("Sorry, could not find database.");
extract($_POST);
$error = "";
$success = "";
if (isset($submit)) {
    $query1 = "SELECT * from user where email = '$delemail'";
    if (!$result = mysqli_query($database, $query1))
        die("wrong query");
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($delpass == $row['password']) {
            $query2 = "DELETE FROM user WHERE email='$delemail' AND password='$delpass'";
            $success = "Account Deleted";
            mysqli_query($database, $query2);
        } else
            $error = "Invalid Password";
    } else
        $error = "Email Not Found";
}
mysqli_close($database);
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        * {
            font-family: 'Times New Roman', Times, serif;
        }

        .login-page {
            width: 460px;
            padding: 10px;
            margin: 7% auto 0 30%;
        }

        .form {
            position: relative;
            background: #FFFFFF;
            max-width: 360px;
            padding: 45px;
            text-align: center;
            box-shadow: -30px 30px 20px rgba(0, 0, 0, 0.3);
            margin-top: -10px;
            border-radius: 30px;
        }

        .form input {
            background: #f2f2f2;
            width: 90%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
            border-radius: 30px;
        }

        .form button {
            background: orange;
            width: 50%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
            border-radius: 30px;
        }

        .form button:hover,
        .form button:active,
        .form button:focus {
            background: #b88715;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: orange;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        body {
            background-image: url("cover.jpg");
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        h2 {
            color: orange;
        }

        .error {
            color: red;
            text-align: center;
            font-weight: bold;
        }

        .success {
            color: lawngreen;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <h2>Delete Account</h2>
            <form class="login-form" method="POST" autocomplete="off">
                <input type="email" name="delemail" placeholder="Email" required />
                <input type="password" name="delpass" placeholder="Password" required />
                <p class="error">
                    <?php echo $error; ?>
                </p>
                <p class="success">
                    <?php echo $success; ?>
                </p>
                <button name="submit">Delete</button>
                <p class="message">Create a new account? <a href="signup.php">Signup</a></p>
            </form>
        </div>
    </div>
</body>

</html>