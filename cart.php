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
        color: rgb(124, 17, 17);
        background-attachment: fixed;
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
        margin: 6% 6% auto 50%;
        width: 40%;
        border: solid #f18b05;
        color: rgb(124, 17, 17);
    }

    .table td {
        text-align: right;
    }

    footer {
        background: #f18b05;
        color: white;
        text-align: center;
        padding: 10px;
        margin-bottom: 0;
        margin-top: 30%;
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
                    </ul>
                </div>
            </li>
            <li><a href="#">العروض</a></li>
            <li><a href="Home.php#cont">من نحن</a></li>
            <li class="rest"><a href=" #">المطاعم</a>
                <div class="menu">
                    <ul>
                        <li><a href="Zaza.html">مطاعم ظاظا</a></li>
                        <li><a href="Village.html">مطاعم القرية الطلابية</a></li>
                        <li><a href="Espresso.html">مطاعم اسبريسو</a></li>
                        <li><a href="Eastern.html">مطاعم الشرقي</a></li>
                        <li><a href="Western.html">مطاعم الغربي</a></li>
                        <li><a href="Medicine.html">مطاعم الطب</a></li>
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
    $query = "select quantity,price,n from cart ";
    $result = mysqli_query($database, $query);
    print("<table class='table' border='1px'>");
    print("<thead>");
    print("<th>السعر</th>");
    print("<th>الكمية</th>");
    print("<th>المنتج</th>");
    print("</thead>");
    $total = 0;
    while ($row = mysqli_fetch_row($result)) {
        print("<tr>");
        foreach ($row as $value)
            print("<td>$value</td>");
        $total = $total + $row[0] * $row[1];
        print("</tr>");
    }
    print("<tfoot><th>$total</th><th colspan='2'>المبلغ الاجمالي</th></tfoot>");
    print("</table>");
    mysqli_close($database);
    ?>
    <footer>
        <p>Developed By</p>
        <p>HU Break Team &copy;</p>
    </footer>
</body>

</html>