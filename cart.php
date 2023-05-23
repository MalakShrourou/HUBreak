<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
            box-sizing: border-box;
        }

        body {
            color: rgb(124, 17, 17);
            background-attachment: fixed;
            background-color: white;
        }

        .menu-bar {
            background: #f18b05;
            text-align: right;
            height: 40px;
            margin-right: 10%;
            padding-right: 5px;
            font-size: large;
        }

        .menu-bar ul {
            display: inline-flex;
            list-style: none;
            color: #fff;
        }

        .menu-bar ul li {
            width: 120px;
            margin: 0px;
            padding: 10px 0px;
            text-align: center;
        }

        .menu-bar ul li a {
            text-decoration: none;
            color: #fff;
            padding-right: 10px;
        }

        .menu,
        .user {
            display: none;
        }

        .menu-bar ul li:hover {
            background-color: #fda025;
        }

        .menu-bar ul li:hover .menu,
        .menu-bar ul li:hover .user {
            display: block;
            position: absolute;
            background-color: #FBB202;
            margin-top: 10px;
            margin-left: -20px;
        }

        .menu-bar ul li:hover .menu ul,
        .menu-bar ul li:hover .user ul {
            display: block;
        }

        .menu-bar ul li:hover .menu ul li,
        .menu-bar ul li:hover .user ul li {
            width: 150px;
            padding: 10px;
            border-bottom: 1px dotted #fff;
            background: transparent;
            border-radius: 0;
            text-align: center;
        }

        .menu-bar ul li:hover .menu ul li:last-child,
        .menu-bar ul li:hover .user ul li:last-child {
            border-bottom: none;
        }

        .menu-bar ul li:hover .menu ul li a:hover,
        .menu-bar ul li:hover .user ul li a:hover {
            color: rgb(124, 17, 17);
        }

        .logo {
            width: 10%;
            height: 40px;
            right: 0;
            position: absolute;
        }

        .table {
            font-size: 30px;
            margin: 6% 6% auto 15%;
            width: 80%;
            color: rgb(124, 17, 17);
        }

        .table td {
            text-align: center;
        }

        tr {
            height: 40px;
        }

        thead,
        tfoot {
            height: 30px;
        }

        footer {
            background: #f18b05;
            color: white;
            text-align: center;
            padding: 10px;
            margin-bottom: 0;
            margin-top: 10%;
            background-attachment: fixed;
        }

        a .cart-icon {
            display: inline-block;
            width: 18px;
            height: 18px;
            background-image: url("cart-icon.png");
            background-size: contain;
        }

        .user-icon {
            display: inline-block;
            width: 18px;
            height: 18px;
            background-image: url("user.png");
            background-size: contain;
        }

        .intro {
            background-color: #fda025;
            width: 100%;
            color: white;
            padding: 2% 0;
            font-size: xx-large;
            text-align: center;
        }

        .button {
            cursor: pointer;
            padding: 6px;
            width: 60%;
            background: red;
            color: white;
            border: 0;
            border-radius: 5px;
        }

        .place {
            background: orange;
            width: 15%;
            border: 0;
            margin-left: 44%;
            margin-top: 30px;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav class="menu-bar">
        <img src="logo.jpg" class="logo">
        <ul>
            <li><a href="cart.php"><span class="cart-icon"></span></a></li>
            <li><a href="#"><span class="user-icon"></span></a>
                <div class="user">
                    <ul>
                        <li><a href="Logout.php">تسجيل الخروج</a></li>
                        <li><a href="ChangePassword.php">تغيير كلمة السر</a></li>
                        <li><a href="DeleteAccount.php">حذف الحساب</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">العروض</a></li>
            <li><a href="Home.php#cont">من نحن</a></li>
            <li class="rest"><a href=" #">المطاعم</a>
                <div class="menu">
                    <ul>
                        <li><a href="Zaza.html">مطعم ظاظا</a></li>
                        <li><a href="Village.html">مطعم القرية الطلابية</a></li>
                        <li><a href="Espresso.html">مطعم اسبريسو</a></li>
                        <li><a href="Eastern.html">مطعم الشرقي</a></li>
                        <li><a href="Western.html">مطعم الغربي</a></li>
                        <li><a href="Medicine.html">مطعم الطب</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="Home.php">الصفحة الرئيسية</a></li>
        </ul>
    </nav>
    <div class="intro">
        <h1>سلة المشتريات</h1>
    </div>
    <?php
    if (!$database = mysqli_connect("localhost", "root", "12345678", "hubreak_db"))
        die("Sorry, could not connect to the server.");
    extract($_POST);
    $query = "select price,quantity,n from cart";
    $result = mysqli_query($database, $query);
    print("<table class='table'>");
    print("<thead>");
    print("<th>حذف</th>");
    print("<th>السعر</th>");
    print("<th>الكمية</th>");
    print("<th>المنتج</th>");
    print("</thead>");
    $total = 0;
    while ($row = mysqli_fetch_row($result)) {
        print("<tr>");
        print("<form method='POST' action='deletecart.php'>");
        print("<td><input type='submit' class='button' value='X'></td>");
        foreach ($row as $value)
            print("<td>$value</td>");
        $total = $total + $row[0] * $row[1];
        $nname = $row[2];
        print("</form>");
        print("</tr>");
    }
    print("<tfoot style='margin-top:30px;'>");
    print("<th></th>");
    print("<th>$total</th>");
    print("<th colspan='2'>المبلغ الاجمالي</th>");
    print("</tfoot>");
    print("</table>");
    mysqli_close($database);
    ?>
    <div>
        <form action="ET.php" method="POST">
            <input type="submit" class="place" value="إنهاء الطلب">
        </form>
    </div>
    <footer>
        <p>Developed By</p>
        <p>HU Break Team &copy;</p>
    </footer>
</body>

</html>