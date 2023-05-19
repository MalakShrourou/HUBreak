<?php
    session_start();

    if (!$database = mysqli_connect("localhost", "root", "12345678"))
	    die("Sorry, could not connect to the server.");
    if (!mysqli_select_db($database, "hubreak_db"))
	    die("Sorry, could not find database.");
    extract($_POST);
    $error = "";
    if(isset($submit)){
        $query = "SELECT * FROM user WHERE email = '$email'";
        if(!$result = mysqli_query($database, $query))
	        die("wrong query");
        if (mysqli_num_rows($result) == 1){
	    $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
	        $_SESSION['email'] = $email;
            $error = "";
	        header("Location:Home.html");
        }
        else {
            $error = "Invalid Password";
        }
        }
        else {
            $error = "Invalid Email";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
}
.form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}
.form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: orange;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
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
.container:before, .container:after {
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
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;      
}
.error {
    color: red;
    font-family: "Roboto", sans-serif;
    text-align: center;
}
        </style>
    </head>
    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" method="POST" autocomplete="off">
                    <input type="email" name="email" placeholder="Email"/>
                    <input type="password" name="password" placeholder="Password"/>
                    <p class="error"><?php echo $error; ?></p>
                    <button name="submit">Login</button>
                    <p class="message">Don't have an account? <a href="signup.php">Signup</a></p>
                </form>
            </div>
        </div>
    </body>
</html>