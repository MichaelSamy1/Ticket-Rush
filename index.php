<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- <link rel="stylesheet" href="CinemaAR.css"> -->
    <link rel="stylesheet" href="CSS/Index.css">
    <title>Ticket Rush | Home Page</title>
    <style>


        /* matches */
        .link-container {
            display: flex;
            justify-content: flex-end;
            width: 100%; /* Adjust as needed */
            margin: 0px 50px 20px auto; /* Center the links horizontally */
        }

        .link-container a {
            margin-left: 20px;
            padding: 20px;
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            transition: .2s;
            border: #185099 solid 2px;
            border-radius: 10px;
            background: black;
        }
        .link-container a:hover {
            color: #185099;
            font-weight: 800;
        }


        /* .navbar .nav-center a{
            margin-left: 20px;
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            transition: .2s;
        } */

        /* .navbar .nav-center a:hover{
            color: #185099;
            font-weight: 800;
        } */

        .navbar .nav-center .activehome{
            color: #185099;
            font-weight: 800;
            border-bottom: 2px solid #113f7c;
        }

        .navbar .nav-center .activehome:hover{
            color: #2b6cc2;
            font-weight: 800;
            border-bottom: 2px solid #113f7c;
        }




        /* machtes cards */

        .all-matches {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .match-card {
            background-color: #000000;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 1080px;
        }

        .match-card img {
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .match-details {
            padding: 60px;
            /* display: flex;
            justify-content: space-between; */
            
        }

        .match-details h2 {
            margin-top: 0;
            font-size: 18px;
            color: #ffffff;
        }

        .match-details p {
            margin: 5px 0;
            font-size: 14px;
            color: #ffffff;
        }
        .teams{
            display: flex;
            justify-content: space-around;
            align-items: center;


            background: #121212;
            padding: 20px;
            border-radius: 10px;
        }
        
    </style>
</head>
<body>
    <!-- Section 1 -->
    <section class="content">
        <!-- First Bar Contain left,right,center -->
        <main class="navbar">
            <!-- left Contain: Logo(Cinema Time Logo) -->
            <div class="nav-left">
                <a href="Log_in_Page.html">
                    <Button>تسجيل خروج</Button>
                </a>    
                <!-- <a href="Index_EN.html" class="change-lang">EN</a> -->
                <div class="search-container">
                    <span src="photos/search.png" onclick="toggleSearch()">
                        search
                    </span>
                    <input type="text" class="search-input" id="searchInput" placeholder="Search...">
                </div>

                <!-- <div class="search-container">
                    <img src="photos/search.png" alt="Search" class="search-icon" onclick="toggleSearch()">
                    <input type="text" class="search-input" id="searchInput" placeholder="Search...">
                </div> -->
            </div>
            
            <!-- <div class="nav-list-phone">
                <select name="" id="">
                    <li>hello</li>
                    <li>my</li>
                    <li>game</li>
                    <li>two</li>
                </select>
            </div> -->

            <!-- Center Bar Contain: Main,movies,cinemas -->
            <div class="nav-center">
                <a href="Index.php" class="activehome">الرئيسية</a>
                <a href="Cinema_Page.php">السينما</a>
                <a href="Theater_Page.php">المسرح</a>
                <a href="Matches.php">المباريات</a>
                <a href="Events.php">الحفلات</a>
                <a href="Parks.php">الحدائق</a>
            </div>
            <!-- Right Bar Contain: Search,Log In -->
            <div class="nav-right">
                <a href="Index.php">Ticket Rush</a>
                
            </div>
        </main>
    </section>

    <section class="main-movies">
        <div class="title-right">
            <h2>السينما</h2>
        </div>
        <br>
        <!-- Movies Cards -->
        <?php
    $con = new mysqli("localhost","root","","ticket");
                  if($con->connect_error){
                      die("failed to connect:".$con->connect_error);}
                      else{
                        $q= "SELECT * FROM event WHERE event_type = ('Cinema')";
                        $result = $con->query($q);
                      } 
                      
                while($row = mysqli_fetch_array($result))
                        {echo "
        <div class='card'>
            <div class='poster'>
            <img src='data:image;base64,".base64_encode($row['image'])." ' alt='image'>
            </div> 
            <div class='datalist'>
                <h1>{$row['event_title']}</h1>
                <p>{$row['info']}</p>
                <div class='age-rate'>
                    <p>{$row['age_rating']}</p>
                </div>
                <div class='seemore_Book'>
                    <a href='./Info_Page_AR.php?id={$row['event_id']}'><button>تفاصيل</button></a>
                    <a href='./seat.php?id={$row['event_id']}'><button class='book'>احجز الان</button></a>
                </div>
            </div>
        </div>
        ";}
        ?>
        
        <div class="seemore_Book" style="direction: ltr; margin: 20px;">
            <a href="Cinema_Page.php"><button class="book" style="padding-right: 30px; padding-left: 45px;">عرض الكل</button></a>
        </div>
    </section>
    <hr class="dashed">


    <!-- Theater -->


    <section class="main-movies">
        <div class="title-right">
            <h2>المسرح</h2>
        </div>
        <br>
        <!-- Movies Cards -->
        <?php
    $con = new mysqli("localhost","root","","ticket");
                  if($con->connect_error){
                      die("failed to connect:".$con->connect_error);}
                      else{
                        $q= "SELECT * FROM event WHERE event_type = ('Theater')";
                        $result = $con->query($q);
                      } 
                      
                while($row = mysqli_fetch_array($result))
                        {echo "
        <div class='card' style='width: 90%; direction: rtl;'>
            <div class='poster'>
            <img src='data:image;base64,".base64_encode($row['image'])." ' alt='image'>
            </div>
            <div class='datalist' style='font-weight: 600; padding: 5px;'>
                <h1 style='margin-right: 30px;'>{$row['event_title']}</h1>
                <p><span><img src='photos/location.png' alt='' style='width: 18px; padding-left: 5px;'></span> مسرح الجمهورية</p>
                <p><span><img src='photos/date.png' alt='' style='width: 18px; padding-left: 5px;'></span>{$row['event_date']}</p>

                <div class='seemore_Book' style='direction: ltr; margin: 20px;'>
                    <a href='Theater-info.php?id={$row['event_id']}'><button class='book' style='padding-right: 40px;'>احجز الان</button></a>
                </div>
            </div>
        </div>
        ";}
        ?>
        <div class="seemore_Book" style="direction: ltr; margin: 20px;">
            <a href="Theater_Page.php"><button class="book" style="padding-right: 30px; padding-left: 45px;">عرض الكل</button></a>
        </div>
    </section>
    <!-- <hr class="solid"> -->
    <hr class="dashed">


    <!-- Matches -->
    <section class="main-movies">
        <div class="title-right">
            <h2>المباريات</h2>
        </div>
        <br>
        <!-- Matches Cards -->
        <div class="all-matches" dir="rtl">
        <?php
    $con = new mysqli("localhost","root","","ticket");
                  if($con->connect_error){
                      die("failed to connect:".$con->connect_error);}
                      else{
                        $q= "SELECT * FROM event WHERE event_type = ('Match')";
                        $result = $con->query($q);
                      } 
                      
                while($row = mysqli_fetch_array($result))
                        {echo "
            <div class='match-card'>
                <div class='match-details'>
                    <div class='teams'>
                        <div class='team2'>
                            <div class='img-holder1' style='width: 50px;'>
                            <img src='data:image;base64,".base64_encode($row['image'])." ' alt='image'>
                            </div>

                            <h2>{$row['character1']}</h2>
                        </div>
                        <br>
                        <h2>VS</h2>
                        <br>
                        <div class='team2'>
                            <div class='img-holder2'>
                            <img src='data:image;base64,".base64_encode($row['image2'])." ' alt='image' style='width: 50px;'>
                            </div>
                            <h2>{$row['character2']}</h2>
                        </div>
                    </div>
                    <div class='time-place' style=' display: flex; justify-content: space-evenly; margin: 25px;'>
                        <p><span><img src='photos/location.png' alt='' style='width: 18px; padding-left: 5px;'></span> الملعب: استاد الأسكندرية , الاسكندرية</p>
                        <p><span><img src='photos/date.png' alt='' style='width: 18px; padding-left: 5px;'></span> التاريخ: {$row['event_date']}</p>
                        <p> {$row['event_time']} </p>
                    </div>
                    <div class='seemore_Book' style='direction: ltr;'>
                        <a href='payment.html'><button class='book' style='padding-right: 40px; 
                                                                                max-width: 100%;
                                                                                margin: auto;
                                                                                padding: 5px 0px 5px 100px;
                                                                                width: 250px;'>احجز الان</button></a>
                    </div>
                </div>
            </div>
            ";}
            ?> 
        </div>
        <!-- See All Button -->
        <div class="seemore_Book" style="direction: ltr; margin: 20px;">
            <a href="Matches.php"><button class="book" style="padding-right: 30px; padding-left: 45px;">عرض الكل</button></a>
        </div>
    </section>
    <!-- <hr class="solid"> -->
    <hr class="dashed">

    <!-- Events -->
    <section class="main-movies">
        <div class="title-right">
            <h2>الحفلات</h2>
        </div>
        <br>
        <?php
    $con = new mysqli("localhost","root","","ticket");
                  if($con->connect_error){
                      die("failed to connect:".$con->connect_error);}
                      else{
                        $q= "SELECT * FROM event WHERE event_type = ('Event')";
                        $result = $con->query($q);
                      } 
                      
                while($row = mysqli_fetch_array($result))
                        {echo "
        <div class='card' style='width: 90%; direction: rtl;'>
            <div class='poster'>
            <img src='data:image;base64,".base64_encode($row['image'])." ' alt='image'>
            </div>
            <div class='datalist' style='font-weight: 600; padding: 5px;'>
                <h1 style='margin-right: 30px;'>{$row['event_title']}</h1>
                <p><span><img src='photos/location.png' alt='' style='width: 18px; padding-left: 5px;'></span> مسرح الجمهورية</p>
                <p><span><img src='photos/date.png' alt='' style='width: 18px; padding-left: 5px;'></span>{$row['event_date']}</p>

                <div class='seemore_Book' style='direction: ltr; margin: 20px;'>
                    <a href='Theater-info.php'><button class='book' style='padding-right: 40px;'>احجز الان</button></a>
                </div>
            </div>
        </div>
        ";}
        ?>

        <div class="seemore_Book" style="direction: ltr; margin: 20px;">
            <a href="Events.php"><button class="book" style="padding-right: 30px; padding-left: 45px;">عرض الكل</button></a>
        </div>
    </section>

    <hr class="dashed">

    <section class="main-movies">
        <div class="title-right">
            <h2>الحدائق</h2>
        </div>
        <br>
        <!-- Parks Cards -->
            <!-- Card 1 -->
            <?php
    $con = new mysqli("localhost","root","","ticket");
                  if($con->connect_error){
                      die("failed to connect:".$con->connect_error);}
                      else{
                        $q= "SELECT * FROM event WHERE event_type = ('Park')";
                        $result = $con->query($q);
                      } 
                      
                while($row = mysqli_fetch_array($result))
                        {echo "
        <div class='card' style='width: 90%; direction: rtl;'>
            <div class='poster'>
            <img src='data:image;base64,".base64_encode($row['image'])." ' alt='image'>
            </div>
            <div class='datalist' style='font-weight: 600; padding: 5px;'>
                <h1 style='margin-right: 30px;'>{$row['event_title']}</h1>
                <p><span><img src='photos/location.png' alt='' style='width: 18px; padding-left: 5px;'></span> مسرح الجمهورية</p>
                <p><span><img src='photos/date.png' alt='' style='width: 18px; padding-left: 5px;'></span>{$row['event_date']}</p>

                <div class='seemore_Book' style='direction: ltr; margin: 20px;'>
                    <a href='Theater-info.php'><button class='book' style='padding-right: 40px;'>احجز الان</button></a>
                </div>
            </div>
        </div>
        ";}
        ?>

            <div class="seemore_Book" style="direction: ltr; margin: 20px;">
                <a href="parks.php"><button class="book" style="padding-right: 30px; padding-left: 45px;">عرض الكل</button></a>
            </div>
    </section>
    
    <hr class="solid">
    <section class="copyrights">
            <div class="p-left">
                <!-- <img src="photos/payments/GooglePay.png" alt="">
                <img src="photos/payments/ApplePay.png" alt=""> -->
                <img src="photos/payments/Mastercard.png" alt="">
                <img src="photos/payments/Visa.png" alt="">
                <!-- <img class="fawry" src="photos/payments/fawry_pay.png" alt=""> -->
    
                
            </div>
            <div class="p-right">
                <h3><span>Ticket Rush</span>. كل الحقوق محفوظة © 2024</h3>
            </div>
        </section>
    <script src="JS/Ticket_Rush(AR).js"></script>
    <script src="JS/info_Page_AR.js"></script>
    <!-- Search Bar Hidden -->
</body>
</html>
