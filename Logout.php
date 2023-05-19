<html>
    <head>
        <title>Logout</title>
        <?php
            session_start();
            session_unset();
            session_destroy();
            header("Refresh: 2; url=Login.html");
?>
        <style>
            body{
                background-color: #f18b05;
                font-family: 'Courier New', Courier, monospace;
                color: white;
            }

            h1{
                text-align: center;
                margin-top: 25%;
            }
        </style>
    </head>
    <body>
        <h1>Logging out...</h1>
    </body>
</html>

