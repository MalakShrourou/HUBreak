<!Doctype html>

<html>

<head>
    <title>HU Break</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <style type="text/css">
    body {
        background-image: url(cover.jpg);
    }

    * {
        margin: 0;
        padding: 0;
        font-family: 'Times New Roman', Times, serif;
        box-sizing: border-box;
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

    .intro {
        background-color: #fda025;
        width: 100%;
        height: 100%;
        padding-bottom: 4%;
    }

    .logo {
        width: 10%;
        height: 40px;
        right: 0;
        position: absolute;
    }

    .intro h1 {
        color: #fff;
        font-size: 70px;
        padding-left: 8%;
        padding-right: 8%;
        padding-bottom: 8%;
        padding-top: 14%;
    }

    .logo2 {
        margin-top: 2%;
        float: right;
        margin-right: 4%;
    }

    tr {
        margin: 5%;
    }

    td {
        width: 20%;
        text-align: center;
        border-style: solid;
        border-color: #fff;
        background: #fff;
        border-radius: 30px;
        color: white;
        padding: 5px;
        box-shadow: -30px 30px 20px rgba(0, 0, 0, 0.3);
    }

    .pic {
        border-style: solid;
        border-radius: 15px 15px 15px 15px;
        margin-left: 15px;
    }

    .rest {
        width: 90%;
        margin: 5%;
        text-align: center;
    }

    .rest img {
        width: 50%;
        height: auto;
    }

    .rest h3 {
        text-align: center;
        font-size: 24px;
        color: rgb(124, 17, 17);
    }

    footer {
        background-color: #f18b05;
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 15px;
    }

    a {
        text-decoration: none;
    }

    .cart-icon {
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

    .rating {
        width: 100%;
        text-align: center;
        padding: 10px;
        position: relative;
        direction: rtl;
    }

    .rating input {
        position: absolute;
        width: 35px;
        height: 50px;
        cursor: pointer;
        transform: translateX(52px);
        opacity: 0;
        z-index: 5;
        text-align: center;
    }

    .rating input:nth-of-type(4):checked~.emo:after,
    .rating input:nth-of-type(4):hover~.emo:after,
    .rating input:nth-of-type(3):checked~.emo:after,
    .rating input:nth-of-type(3):hover~.emo:after {
        content: '\f11a';
    }

    .rating input:nth-of-type(1):checked~.emo:after,
    .rating input:nth-of-type(1):hover~.emo:after,
    .rating input:nth-of-type(2):checked~.emo:after,
    .rating input:nth-of-type(2):hover~.emo:after {
        content: '\f118';
    }

    .rating input:nth-of-type(1) {
        right: 50px;
    }

    .rating input:nth-of-type(2) {
        right: 100px;
    }

    .rating input:nth-of-type(3) {
        right: 150px;
    }

    .rating input:nth-of-type(4) {
        right: 200px;
    }

    .rating input:nth-of-type(5) {
        right: 250px;
    }

    .rating input:nth-of-type(6) {
        right: 300px;
    }

    .rating input:checked~.star:after,
    .rating input:hover~.star:after {
        content: '\f005';
    }

    .rating .star {
        display: inline-block;
        font-family: FontAwesome;
        font-size: 30px;
        text-align: center;
        color: #FBB202;
        cursor: pointer;
        margin: 0;
        padding: 0;
    }

    .rating .star:after {
        content: '\f006';
    }

    .picc {
        border-radius: 200px;
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
        <img src="FastFood.png" class="logo2">
        <h1><em>It's not just food, It's an Experience.</em></h1>
        <br><br><br><br>
    </div>
    <table class="rest">
        <tr>
            <td style="margin:200px"><a href="Zaza.html"><img src="Zaza.jpg" class="picc">
                    <h3>مطاعم ظاظا<br><br></h3>
                </a>
                <?php
                $db = mysqli_connect("localhost", "root", "12345678", "hubreak_db");
                $q = "select `zaza_r` from zaza_rate";
                $result = mysqli_query($db, $q);
                $total = 0;
                $count = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                    $total += $row['zaza_r'];
                    $count++;
                }
                $avg = $total / $count;
                if ($avg < 1) {
                    print("<span class='rating'>
            <input type='radio' name='s1' ><span class='star'></span>
            <input type='radio' name='s2' ><span class='star'></span>
            <input type='radio' name='s3' ><span class='star'></span>
            <input type='radio' name='s4' ><span class='star'></span>
            <input type='radio' name='s5' ><span class='star'></span></span>");
                } else if ($avg >= 1 and $avg < 2) {
                    print("<span class='rating'>
            <input type='radio' name='s1' /><span class='star'></span>
            <input type='radio' name='s2' /><span class='star'></span>
            <input type='radio' name='s3' /><span class='star'></span>
            <input type='radio' name='s4' /><span class='star'></span>
            <input type='radio' name='s5' checked/><span class='star'> </span></span>");
                } else if ($avg >= 2 and $avg < 3) {
                    print("<span class='rating'>
            <input type='radio' name='s1' /><span class='star'></span>
            <input type='radio' name='s2' /><span class='star'></span>
            <input type='radio' name='s3' /><span class='star'></span>
            <input type='radio' name='s4' checked/><span class='star'></span>
            <input type='radio' name='s5' /><span class='star'></span></span>");
                } else if ($avg >= 3 and $avg < 4) {
                    print("<span class='rating'>
            <input type='radio' name='s1' /><span class='star'></span>
            <input type='radio' name='s2' /><span class='star'></span>
            <input type='radio' name='s3' checked/><span class='star'></span>
            <input type='radio' name='s4' /><span class='star'></span>
            <input type='radio' name='s5' /><span class='star'></span></span>");
                } else if ($avg >= 4 and $avg < 5) {
                    print("<span class='rating'>
            <input type='radio' name='s1' /><span class='star'></span>
            <input type='radio' name='s2' checked/><span class='star'></span>
            <input type='radio' name='s3' /><span class='star'></span>
            <input type='radio' name='s4' /><span class='star'></span>
            <input type='radio' name='s5' /><span class='star'></span></span>");
                } else {
                    print("<span class='rating'>
            <input type='radio' name='s1' checked/><span class='star'></span>
            <input type='radio' name='s2' /><span class='star'></span>
            <input type='radio' name='s3' /><span class='star'></span>
            <input type='radio' name='s4' /><span class='star'></span>
            <input type='radio' name='s5' /><span class='star'></span></span>");
                }
                mysqli_close($db);
                ?>
            </td>
            <td><a href="Village.html"><img src="Village.jpg" class="picc">
                    <h3>مطاعم القرية الطلابية</h3>
                </a><br>
                <?php
                $db2 = mysqli_connect("localhost", "root", "12345678", "hubreak_db");
                $q2 = "select `village_r` from village_rate";
                $result2 = mysqli_query($db2, $q2);
                $total2 = 0;
                $count2 = 0;
                while ($row = mysqli_fetch_assoc($result2)) {
                    $total2 += $row['village_r'];
                    $count2++;
                }
                $avg2 = $total2 / $count2;
                if ($avg2 < 1) {
                    print("<span class='rating'>
            <input type='radio' name='ss1' ><span class='star'></span>
            <input type='radio' name='ss2' ><span class='star'></span>
            <input type='radio' name='ss3' ><span class='star'></span>
            <input type='radio' name='ss4' ><span class='star'></span>
            <input type='radio' name='ss5' ><span class='star'></span></div>");
                } else if ($avg2 >= 1 and $avg2 < 2) {
                    print("<span class='rating'>
            <input type='radio' name='ss1' /><span class='star'></span>
            <input type='radio' name='ss2' /><span class='star'></span>
            <input type='radio' name='ss3' /><span class='star'></span>
            <input type='radio' name='ss4' /><span class='star'></span>
            <input type='radio' name='ss5' checked/><span class='star'></span>></span>");
                } else if ($avg2 >= 2 and $avg2 < 3) {
                    print("<span class='rating'>
            <input type='radio' name='ss1' /><span class='star'></span>
            <input type='radio' name='ss2' /><span class='star'></span>
            <input type='radio' name='ss3' /><span class='star'></span>
            <input type='radio' name='ss4' checked/><span class='star'></span>
            <input type='radio' name='ss5' /><span class='star'></span></span>");
                } else if ($avg2 >= 3 and $avg2 < 4) {
                    print("<span class='rating'>
            <input type='radio' name='ss1' /><span class='star'></span>
            <input type='radio' name='ss2' /><span class='star'></span>
            <input type='radio' name='ss3' checked/><span class='star'></span>
            <input type='radio' name='ss4' /><span class='star'></span>
            <input type='radio' name='ss5' /><span class='star'></span></span>");
                } else if ($avg2 >= 4 and $avg2 < 5) {
                    print("<span class='rating'>
            <input type='radio' name='ss1' /><span class='star'></span>
            <input type='radio' name='ss2' checked/><span class='star'></span>
            <input type='radio' name='ss3' /><span class='star'></span>
            <input type='radio' name='ss4' /><span class='star'></span>
            <input type='radio' name='ss5' /><span class='star'></span></span>");
                } else {
                    print("<span class='rating'>
            <input type='radio' name='ss1' checked/><span class='star'></span>
            <input type='radio' name='ss2' /><span class='star'></span>
            <input type='radio' name='ss3' /><span class='star'></span>
            <input type='radio' name='ss4' /><span class='star'></span>
            <input type='radio' name='ss5' /><span class='star'></span></span>");
                }
                mysqli_close($db2);
                ?>
            </td>
            <td><a href="Espresso.html"><img src="Espresso.jpg" class="picc">
                    <h3>مطاعم اسبريسو<br><br></h3>
                </a>
                <?php
                $db3 = mysqli_connect("localhost", "root", "12345678", "hubreak_db");
                $q3 = "select `espress_r` from espresso_rate";
                $result3 = mysqli_query($db3, $q3);
                $total3 = 0;
                $count3 = 0;
                while ($row3 = mysqli_fetch_assoc($result3)) {
                    $total3 += $row3['espress_r'];
                    $count3++;
                }
                $avg3 = $total3 / $count3;
                if ($avg3 < 1) {
                    print("<span class='rating'>
            <input type='radio' name='sss1' /><span class='star'></span>
            <input type='radio' name='sss2' /><span class='star'></span>
            <input type='radio' name='sss3' /><span class='star'></span>
            <input type='radio' name='sss4' /><span class='star'></span>
            <input type='radio' name='sss5' /><span class='star'></span></span>");
                } else if ($avg3 >= 1 and $avg3 < 2) {
                    print("<span class='rating'>
            <input type='radio' name='sss1' /><span class='star'></span>
            <input type='radio' name='sss2' /><span class='star'></span>
            <input type='radio' name='sss3' /><span class='star'></span>
            <input type='radio' name='sss4' /><span class='star'></span>
            <input type='radio' name='sss5' checked/><span class='star'></span></span>");
                } else if ($avg3 >= 2 and $avg3 < 3) {
                    print("<span class='rating'>
            <input type='radio' name='sss1' /><span class='star'></span>
            <input type='radio' name='sss2' /><span class='star'></span>
            <input type='radio' name='sss3' /><span class='star'></span>
            <input type='radio' name='sss4' checked/><span class='star'></span>
            <input type='radio' name='sss5' /><span class='star'></span></span>");
                } else if ($avg3 >= 3 and $avg3 < 4) {
                    print("<span class='rating'>
            <input type='radio' name='sss1' /><span class='star'></span>
            <input type='radio' name='sss2' /><span class='star'></span>
            <input type='radio' name='sss3' checked/><span class='star'></span>
            <input type='radio' name='sss4' /><span class='star'></span>
            <input type='radio' name='sss5' /><span class='star'></span></span>");
                } else if ($avg3 >= 4 and $avg3 < 5) {
                    print("<span class='rating'>
            <input type='radio' name='sss1' /><span class='star'></span>
            <input type='radio' name='sss2' checked/><span class='star'></span>
            <input type='radio' name='sss3' /><span class='star'></span>
            <input type='radio' name='sss4' /><span class='star'></span>
            <input type='radio' name='sss5' /><span class='star'></span></span>");
                } else {
                    print("<span class='rating'>
            <input type='radio' name='sss1' checked/><span class='star'></span>
            <input type='radio' name='sss2' /><span class='star'></span>
            <input type='radio' name='sss3' /><span class='star'></span>
            <input type='radio' name='sss4' /><span class='star'></span>
            <input type='radio' name='sss5' /><span class='star'></span></span>");
                }
                mysqli_close($db3);
                ?>
            </td>
        </tr>
        <tr>
            <td><a href="Eastern.html"><img src="Eastern.jpg" class="picc">
                    <h3>مطاعم الشرقي<br><br></h3>
                </a>
                <?php
                $db4 = mysqli_connect("localhost", "root", "12345678", "hubreak_db");
                $q4 = "select `east_r` from east_rate";
                $result4 = mysqli_query($db4, $q4);
                $total4 = 0;
                $count4 = 0;
                while ($row4 = mysqli_fetch_assoc($result4)) {
                    $total4 += $row4['east_r'];
                    $count4++;
                }
                $avg4 = $total4 / $count4;
                if ($avg4 < 1) {
                    print("<span class='rating'>
            <input type='radio' name='s6' /><span class='star'></span>
            <input type='radio' name='s7' /><span class='star'></span>
            <input type='radio' name='s8' /><span class='star'></span>
            <input type='radio' name='s9' /><span class='star'></span>
            <input type='radio' name='s0' /><span class='star'></span></span>");
                } else if ($avg4 >= 1 and $avg < 2) {
                    print("<span class='rating'>
            <input type='radio' name='s6' /><span class='star'></span>
            <input type='radio' name='s7' /><span class='star'></span>
            <input type='radio' name='s8' /><span class='star'></span>
            <input type='radio' name='s9' /><span class='star'></span>
            <input type='radio' name='s0' checked/><span class='star'></span></span>");
                } else if ($avg4 >= 2 and $avg4 < 3) {
                    print("<span class='rating'>
            <input type='radio' name='s6' /><span class='star'></span>
            <input type='radio' name='s7' /><span class='star'></span>
            <input type='radio' name='s8' /><span class='star'></span>
            <input type='radio' name='s9' checked/><span class='star'></span>
            <input type='radio' name='s0' /><span class='star'></span></span>");
                } else if ($avg4 >= 3 and $avg4 < 4) {
                    print(" 
        <span class='rating'>
            <input type='radio' name='s6' /><span class='star'></span>
            <input type='radio' name='s7' /><span class='star'></span>
            <input type='radio' name='s8' checked/><span class='star'></span>
            <input type='radio' name='s9' /><span class='star'></span>
            <input type='radio' name='s0' /><span class='star'></span></span>");
                } else if ($avg4 >= 4 and $avg4 < 5) {
                    print("<span class='rating'>
            <input type='radio' name='s6' /><span class='star'></span>
            <input type='radio' name='s7' checked/><span class='star'></span>
            <input type='radio' name='s8' /><span class='star'></span>
            <input type='radio' name='s9' /><span class='star'></span>
            <input type='radio' name='s0' /><span class='star'></span></span>");
                } else {
                    print("<span class='rating'>
            <input type='radio' name='s6' checked/><span class='star'></span>
            <input type='radio' name='s7' /><span class='star'></span>
            <input type='radio' name='s8' /><span class='star'></span>
            <input type='radio' name='s9' /><span class='star'></span>
            <input type='radio' name='s0' /><span class='star'></span></span>");
                }
                mysqli_close($db4);
                ?>
            </td>
            <td><a href="Western.html"><img src="Western.jpg" class="picc">
                    <h3>مطاعم الغربي<br><br></h3>
                </a>
                <?php
                $db5 = mysqli_connect("localhost", "root", "12345678", "hubreak_db");
                $q5 = "select `west_r` from west_rate";
                $result5 = mysqli_query($db5, $q5);
                $total5 = 0;
                $count5 = 0;
                while ($row5 = mysqli_fetch_assoc($result5)) {
                    $total5 += $row5['west_r'];
                    $count5++;
                }
                $avg5 = $total5 / $count5;
                if ($avg5 < 1) {
                    print("<span class='rating'>
            <input type='radio' name='ss6' /><span class='star'></span>
            <input type='radio' name='ss7' /><span class='star'></span>
            <input type='radio' name='ss8' /><span class='star'></span>
            <input type='radio' name='ss9' /><span class='star'></span>
            <input type='radio' name='ss0' /><span class='star'></span></span>");
                } else if ($avg5 >= 1 and $avg5 < 2) {
                    print("<span class='rating'>
            <input type='radio' name='ss6' /><span class='star'></span>
            <input type='radio' name='ss7' /><span class='star'></span>
            <input type='radio' name='ss8' /><span class='star'></span>
            <input type='radio' name='ss9' /><span class='star'></span>
            <input type='radio' name='ss0' checked/><span class='star'></span></span>");
                } else if ($avg5 >= 2 and $avg5 < 3) {
                    print("<span class='rating'>
            <input type='radio' name='ss6' /><span class='star'></span>
            <input type='radio' name='ss7' /><span class='star'></span>
            <input type='radio' name='ss8' /><span class='star'></span>
            <input type='radio' name='ss9' checked/><span class='star'></span>
            <input type='radio' name='ss0' /><span class='star'></span></span>");
                } else if ($avg5 >= 3 and $avg5 < 4) {
                    print("<span class='rating'>
            <input type='radio' name='ss6' /><span class='star'></span>
            <input type='radio' name='ss7' /><span class='star'></span>
            <input type='radio' name='ss8' checked/><span class='star'></span>
            <input type='radio' name='ss9' /><span class='star'></span>
            <input type='radio' name='ss0' /><span class='star'></span></span>");
                } else if ($avg5 >= 4 and $avg5 < 5) {
                    print("<span class='rating'>
            <input type='radio' name='ss6' /><span class='star'></span>
            <input type='radio' name='ss7' checked/><span class='star'></span>
            <input type='radio' name='ss8' /><span class='star'></span>
            <input type='radio' name='ss9' /><span class='star'></span>
            <input type='radio' name='ss0' /><span class='star'></span></span>");
                } else {
                    print("<span class='rating'>
            <input type='radio' name='ss6' checked/><span class='star'></span>
            <input type='radio' name='ss7' /><span class='star'></span>
            <input type='radio' name='ss8' /><span class='star'></span>
            <input type='radio' name='ss9' /><span class='star'></span>
            <input type='radio' name='ss0' /><span class='star'></span></span>");
                }
                mysqli_close($db5);
                ?>
            </td>
            <td><a href="Medicine.html"><img src="Medicine.jpg" class="picc">
                    <h3>مطاعم الطب<br><br></h3>
                </a>
                <?php
                $db6 = mysqli_connect("localhost", "root", "12345678", "hubreak_db");
                $q6 = "select `medic_r` from medicine_rate";
                $result6 = mysqli_query($db6, $q6);
                $total6 = 0;
                $count6 = 0;
                while ($row6 = mysqli_fetch_assoc($result6)) {
                    $total6 += $row6['medic_r'];
                    $count6++;
                }
                $avg6 = $total6 / $count6;
                if ($avg6 < 1) {
                    print("<span class='rating'>
            <input type='radio' name='sss6' /><span class='star'></span>
            <input type='radio' name='sss7' /><span class='star'></span>
            <input type='radio' name='sss8' /><span class='star'></span>
            <input type='radio' name='sss9' /><span class='star'></span>
            <input type='radio' name='sss0' /><span class='star'></span></span>");
                } else if ($avg6 >= 1 and $avg6 < 2) {
                    print("<span class='rating'>
            <input type='radio' name='sss6' /><span class='star'></span>
            <input type='radio' name='sss7' /><span class='star'></span>
            <input type='radio' name='sss8' /><span class='star'></span>
            <input type='radio' name='sss9' /><span class='star'></span>
            <input type='radio' name='sss0' checked/><span class='star'></span></span>");
                } else if ($avg6 >= 2 and $avg6 < 3) {
                    print("<span class='rating'>
            <input type='radio' name='sss6' /><span class='star'></span>
            <input type='radio' name='sss7' /><span class='star'></span>
            <input type='radio' name='sss8' /><span class='star'></span>
            <input type='radio' name='sss9' checked/><span class='star'></span>
            <input type='radio' name='sss0' /><span class='star'></span></span>");
                } else if ($avg >= 3 and $avg6 < 4) {
                    print("<span class='rating'>
            <input type='radio' name='sss6' /><span class='star'></span>
            <input type='radio' name='sss7' /><span class='star'></span>
            <input type='radio' name='sss8' checked/><span class='star'></span>
            <input type='radio' name='sss9' /><span class='star'></span>
            <input type='radio' name='sss0' /><span class='star'></span></span>");
                } else if ($avg6 >= 4 and $avg6 < 5) {
                    print("<span class='rating'>
            <input type='radio' name='sss6' /><span class='star'></span>
            <input type='radio' name='sss7' checked/><span class='star'></span>
            <input type='radio' name='sss8' /><span class='star'></span>
            <input type='radio' name='sss9' /><span class='star'></span>
            <input type='radio' name='sss0' /><span class='star'></span></span>");
                } else {
                    print("<span class='rating'>
            <input type='radio' name='sss6' checked/><span class='star'></span>
            <input type='radio' name='sss7' /><span class='star'></span>
            <input type='radio' name='sss8' /><span class='star'></span>
            <input type='radio' name='sss9' /><span class='star'></span>
            <input type='radio' name='sss0' /><span class='star'></span></span>");
                }
                mysqli_close($db6);
                ?>
            </td>
        </tr>
    </table>
    <footer id="cont">
        <h1 style="margin-top: 20px;">نبذة عنا</h1>
        <p style="margin-top: 10px;"> فريق طلابي من الجامعة الهاشمية حبينا نخدم زملائناالطلاب <br>بتوفير وقتهم وتقديم
            العروض الخاصة فيهم</p>
        <br>
        <img src="instagram.png" width="25px">
        <img src="facebook.png" width="25px">
        <img src="twitter.png" width="25px">
        <br><br>
        <hr>
        <br>
        <h2>Developed By</h2>
        <h3>HU Break Team <span>&copy</span></h3>
    </footer>
</body>

</html>