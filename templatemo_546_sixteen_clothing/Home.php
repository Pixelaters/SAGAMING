<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
$accessLvl = $user_data['user_level'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<!-- 
Home : Zelino
About us: Ziyaad
Contact page: Arisky
Starter kit: Taariq
Indie games: Zaeem
Calander: Khanyisele
-->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>SA GAMING</title>

    <!-- Bootstrap core CSS comment5-->
    <!-- Bootstrap core CSS comment32-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="home.php">

                    <h2>SA <em>Gaming</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home
                                <!-- Ziyaad -->
                                <span class="sr-only"></span> <!-- Removed (current) between the 2 spans as it was creating a weird error on top of nav bar -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="PromotedGames.php">Our Promoted Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="StarterKit.php">Starter Kits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Calandar.php">Calandar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <?php if ($accessLvl == 1) : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="Admin.php">Admin</a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                </div>
            </div>
            <div class="banner-item-02">

                <div class="text-content">
                </div>
            </div>
            <div class="banner-item-03">

                <div class="text-content">
                </div>
            </div>
            <div class="banner-item-04">

                <div class="text-content">
                </div>
            </div>
            <div class="banner-item-05">

                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->
    <!-- Let me know if I should add any promo text to the banner-->

    <div class="latest-PromotedGames">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest PromotedGames</h2>
                        <?php


$sql = "SELECT * FROM sagaming;";
echo '<table border="1" cellspacing="3"  cellpadding="2"> 
<tr> 
<td> <font face="Arial">User ID</font> </td> 
<td> <font face="Arial">User Name</font> </td> 
<td> <font face="Arial">User Email</font> </td> 
<td> <font face="Arial">User Password</font> </td> 
<td> <font face="Arial">User Date</font> </td> 
<td> <font face="Arial">User LEVEL</font> </td> 
</tr>';

$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {


    while ($row = mysqli_fetch_assoc($result)) {



        $fieldname1 = $row['user_id'];
        $fieldname2 = $row['user_name'];
        $fieldname3 = $row['email'];
        $fieldname4 = $row['password'];
        $fieldname5 = $row['date'];
        $fieldname6 = $row['user_level'];

        echo '<tr> 
      <td>' . $fieldname1 . '</td> 
      <td>' . $fieldname2 . '</td> 
      <td>' . $fieldname3 . '</td> 
      <td>' . $fieldname4 . '</td> 
      <td>' . $fieldname5 . '</td> 
      <td>' . $fieldname6 . '</td> 
  </tr>';
    }
}
?>
                        <a href="PromotedGames.php">view all PromotedGames <i class="fa fa-angle-right"></i></a>
                       
                    </div>
                </div>
                <div class="best-features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>SA GAMING</h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-content">
                                    <h4>Looking for the best PromotedGames?</h4>
                                    <p> SA Gaming is website developed for gamers across South Africa to promote and distribute all lastests games including idie. <a rel="nofollow" href="https://templatemo.com/contact">Contact us</a> for more info. What we offer:</p>
                                    <ul class="featured-list">
                                        <li><a href="#">Latest promoted games</a></li>
                                        <li><a href="#">Release dates of all up and coming games</a></li>
                                        <li><a href="#">A gaming community and forums</a></li>
                                        <li><a href="#">Indie games developed by local and international gamers</a></li>
                                        <li><a href="#">Starter kits</a></li>
                                    </ul>
                                    <a href="about.php" class="filled-button">Read More</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right-image">
                                    <img src="assets/images/war never changes.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="call-to-action">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inner-content">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Creative &amp; Unique <em>SA GAMING CALENDER</em> </h4>
                                            <p>A newly developed gaming calender specifically designed for SA Gamers</p>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="Calandar.php" class="filled-button">view</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


                <!-- Additional Scripts -->
                <script src="assets/js/custom.js"></script>
                <script src="assets/js/owl.js"></script>
                <script src="assets/js/slick.js"></script>
                <script src="assets/js/isotope.js"></script>
                <script src="assets/js/accordions.js"></script>


                <script language="text/Javascript">
                    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                    function clearField(t) { //declaring the array outside of the
                        if (!cleared[t.id]) { // function makes it static and global
                            cleared[t.id] = 1; // you could use true and false, but that's more typing
                            t.value = ''; // with more chance of typos
                            t.style.color = '#fff';
                        }
                    }
                </script>


</body>

</html>