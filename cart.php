<!Doctype html>
<html>

<head>
    <style>
        * {
            margin: 0;
            font-family: 'Courier New', Courier, monospace;
        }

        nav {
            background-color: #f18b05;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        nav ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        nav li {
            float: right;
            height: 20px;
        }

        nav li a {
            display: block;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 18px;
            text-decoration: none;
        }

        nav li a:hover {
            background-color: #fda025;
        }

        @media screen and (max-width: 600px) {
            nav li {
                width: 100%;
                float: none;
            }

            nav li a {
                text-align: center;
                padding: 10px;
                display: block;
            }

            h1 {
                font-size: 24px;
            }
        }

        .table {
            margin: 6% auto 0% 10%;
            width: 40%;
            border: solid #f18b05;
            color: rgb(124, 17, 17);
        }

        footer {
            background: #f18b05;
            color: white;
            text-align: center;
            padding: 10px;
            margin-bottom: 0;
            margin-top: 30%;
        }

        .cart-icon {
            display: inline-block;
            width: 18px;
            height: 18px;
            background-image: url("cart-icon.png");
            background-size: contain;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="cart.php"><span class="cart-icon"></span></a></li>
            <li><a href="#">العروض</a></li>
            <li><a href="#">من نحن</a></li>
            <li><a href="#">تواصل معنا</a></li>
            <li><a href="#">المطاعم</a></li>
            <li><a href="Home.html">الصفحة الرئيسية</a></li>
        </ul>
        <img src="logo.jpg" height="48px">
    </nav>
    <?php
    if (!$database = mysqli_connect("localhost", "root", "12345678"))
        die("Sorry, could not connect to the server.");
    if (!mysqli_select_db($database, "hubreak_db"))
        die("Sorry, could not find database.");
    extract($_POST);
    $query = "select quantity,price from cart";
    $result = mysqli_query($database, $query);
    print("<table class='table' border='1px'>");
    print("<thead>");
    print("<th>Quantity</th>");
    print("<th>Price</th>");
    print("</thead>");
    $total = 0;
    while ($row = mysqli_fetch_row($result)) {
        print("<tr>");
        foreach ($row as $value)
            print("<td>$value</td>");
        $total = $total + $row[0] * $row[1];
        print("</tr>");
    }
    print("<tfoot><th>Total</th><th>$total</th></tfoot>");
    print("</table>");
    mysqli_close($database);
    ?>
    <footer>
        <p>Developed By</p>
        <p>HU Break Team &copy;</p>
    </footer>
</body>

</html>