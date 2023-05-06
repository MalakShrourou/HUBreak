<!Doctype html>

<html>

<head>
    <title>HU Break</title>
    <meta charset="UTF-8">
    <style type="text/css">
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

        table {
            width: 50%;
            margin: 20%;
        }

        footer {
            background-color: #f18b05;
            color: white;
            font-weight: bold;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li class="cart"><a href="cart.php">سلة المشتريات</a></li>
            <li><a href="#">العروض</a></li>
            <li><a href="#">من نحن</a></li>
            <li><a href="#">تواصل معنا</a></li>
            <li><a href="#">مواقع المطاعم</a></li>
            <li><a href="home.html">الصفحة الرئيسية</a></li>
        </ul>
        <img src="logo.jpg" height="48px">
    </nav>
    <?php
    if (!$database = mysqli_connect("localhost", "root", "12345678"))
        die("Sorry, could not connect to the server.");
    if (!mysqli_select_db($database, "hubreak_db"))
        die("Sorry, could not find database.");
    extract($_POST);
    $query = "select ID,name,quantity, price from espresso,cart where espresso.ID = cart.ID";
    $result = mysqli_query($database, $query);
    print("<table border='1px'>");
    print("<thead>");
    print("<th>ID</th>");
    print("<th>Proudct</th>");
    print("<th>Quantity</th>");
    print("<th>Price</th>");
    print("</thead>");
    $total = 0;
    while ($row = mysqli_fetch_row($result)) {
        print("<tr>");
        foreach ($row as $value) {
            print("<td>$value</td>");
        }
        $total = $total + $row[2] * $row[3];
        print("<input type='hidden' name='ID' value='$row[0]'>");
        print("</tr>");
    }
    print("<tfoot><th colspan='3'>Total</th><th>$total</th></tfoot>");
    print("</table>");
    mysqli_close($database);
    ?>
    <footer>
        <p>Developed By</p>
        <p>HU Break Team &copy;</p>
    </footer>
</body>

</html>