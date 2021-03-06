<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
$accessLvl = $user_data['user_level'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>SA Gaming</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
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
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    <h2>SA <em>Gaming</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home
                                <span class="sr-only">(current)</span>
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


                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <div class="banner header-text">

        <div class="banner-item-01">
            <div class="text-content">

                <h2> SA GAMING CALENDER</h2>
            </div>
        </div>
    </div>
    </div>
    <br>
    <div class=" container">
        <h2><strong>Keep updated</strong></h2>

        <div class="col-md-4">
            <div class="team-member">
                <div class="thumb-container">
                    <img src="assets/images/update_01.jpg" alt="">
                    <div class="hover-effect">
                        <div class="hover-content">

                        </div>
                    </div>
                </div>
                <div class="down-content">
                    <h4>Power Rangers</h4>
                    <span>Streams 01 October 2021</span>
                    <p>Be Sportaneous suitable for all age groups.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="team-member">
                <div class="thumb-container">
                    <img src="assets/images/update_02.jpg" alt="">
                    <div class="hover-effect">
                        <div class="hover-content">

                        </div>
                    </div>
                </div>
                <div class="down-content">
                    <h4>Apex legends </h4>
                    <span>Streams 06 October 2021</span>
                    <p>Stay connected for the latest version.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="team-member">
                <div class="thumb-container">
                    <img src="assets/images/update_03.jpg" alt="">
                    <div class="hover-effect">
                        <div class="hover-content">

                        </div>
                    </div>
                </div>
                <div class="down-content">
                    <h4>The thief</h4>
                    <span>Streams 10 October 2021</span>
                    <p>Catch up with friends.</p>
                </div>












            </div>
        </div>
    </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>SA Gaming

                            - Design: <a rel="nofollow noopener" href="https://templatemo.com"
                                target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


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





    </div>


</html>
</body>