<!Doctype html>
<html>

<head>
    <style>
    body {
        color: rgb(124, 17, 17);
        font-family: 'Courier New', Courier, monospace;
        margin: 0;
    }

    table {
        margin: 2%;
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
        font-family: 'Courier New', Courier, monospace;
    }

    nav li a:hover {
        background-color: #ff9208;
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
    </style>
</head>

<body>
    <nav>
        <ul>
            <li class="cart"><a href="cart.php">سلة المشترايات</a></li>
            <li><a href="#">العروض</a></li>
            <li><a href="#">من نحن</a></li>
            <li><a href="#">تواصل معنا</a></li>
            <li><a href="#">مواقع المطاعم</a></li>
            <li><a href="home.html">الصفحة الرئيسية</a></li>
        </ul>
        <img src="logo.jpg" height="50px">
    </nav>
    <h1>The Cart</h1>


    <?php
    if (!$database = mysqli_connect("localhost", "root", "12345678"))
        die("Sorry, could not connect to the server.");
    if (!mysqli_select_db($database, "hubreak_db"))
        die("Sorry, could not find database.");
    extract($_POST);
    $query = "select cart.ID, p_name,p_price,quantity from products,cart where products.ID = cart.ID";
    $result = mysqli_query($database, $query);
    print("<table border='1px'>");
    print("<thead>");
    print("<th>Id</th>");
    print("<th>Products</th>");
    print("<th>Price</th>");
    print("<th>Quantity</th>");
    print("</thead>");
    $total = 0;
    print("<form mathod='post' action='clearcart.php'>");
    while ($row = mysqli_fetch_row($result)) {
        print("<tr>");
        print("<form mathod='post' action='deletecart.php'>");
        foreach ($row as $value) {
            print("<td>$value</td>");
        }
        $total = $total + $row[2] * $row[3];
        print("<input type='hidden' name='ID' value='$row[0]'>");
        print("<td><input type='submit' value='Delete'></td>");
        print("</form>");
        print("</tr>");
    }
    print("<tfoot><th colspan='3'>Total</th><th>$total</th></tfoot>");
    print("</table>");
    print("<input type='submit' value='Place order'></form>");
    mysqli_close($database);
    ?>

</body>

</html>