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

    <title>Sixteen Clothing Products</title>

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

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Recommendations of</h4>
                        <h2>Indie Games Worth Playing</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--<div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All Products</li>
                            <li data-filter=".des">Featured</li>
                            <li data-filter=".dev">Flash Deals</li>
                            <li data-filter=".gra">Last Minute</li>
                        </ul>
                    </div>
                </div>-->
    <div class="col-md-12">
        <div class="filters-content">
            <div class="row grid">
                <div class="col-lg-4 col-md-4 all des">
                    <div class="product-item">
                        <a href="https://store.steampowered.com/app/413150/Stardew_Valley/"><img
                                src="assets/images/indie/Stardew.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="https://store.steampowered.com/app/413150/Stardew_Valley/">
                                <h4>Stardew valley</h4>
                            </a>
                            <h6>R 159.00</h6>
                            <p>You've inherited a farm plot in Stardew Valley. Can you live off the land and turn
                                these fields into a home?</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Our Rating</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 all dev">
                    <div class="product-item">
                        <a href="https://store.steampowered.com/app/588650/Dead_Cells/"><img
                                src="assets/images/indie/DeadCells.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="https://store.steampowered.com/app/588650/Dead_Cells/">
                                <h4>Dead Cells</h4>
                            </a>
                            <h6>R 139.74</h6>
                            <p>Dead Cells is a rogue-lite, action-platformer.2D souls-lite combat.
                                No checkpoints. Kill, die, learn, repeat.
                            </p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Our Rating</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 all gra">
                    <div class="product-item">
                        <a href="https://store.steampowered.com/app/219150/Hotline_Miami/"><img
                                src="assets/images/indie/hotline miami.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="https://store.steampowered.com/app/219150/Hotline_Miami/">
                                <h4>Hotline Miami</h4>
                            </a>
                            <h6>R 109.00</h6>
                            <p>Hotline Miami is a high-octane action game overflowing with raw
                                brutality, gunplay and skull crushing close combat.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>

                            </ul>
                            <span>Our Rating</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 all gra">
                    <div class="product-item">
                        <a href="https://store.steampowered.com/app/322330/Dont_Starve_Together/"><img
                                src="assets/images/indie/Starve.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="https://store.steampowered.com/app/322330/Dont_Starve_Together/">
                                <h4>Don't Starve Together</h4>
                            </a>
                            <h6>R 105.00</h6>
                            <p>Fight, Farm, Build and Explore Together in the multiplayer
                                expansion to the uncompromising wilderness survival game, Don't Starve.
                            </p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>

                            </ul>
                            <span>Our Rating</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 all dev">
                    <div class="product-item">
                        <a href="https://store.steampowered.com/app/105600/Terraria/"><img
                                src="assets/images/indie/Terraria.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="https://store.steampowered.com/app/105600/Terraria/">
                                <h4>Terraria</h4>
                            </a>
                            <h6>R 109.00</h6>
                            <p>Dig, fight, explore, build! Nothing is impossible in this action-packed
                                adventure game.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Our Rating </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 all des">
                    <div class="product-item">
                        <a href="https://store.steampowered.com/app/457140/Oxygen_Not_Included/"><img
                                src="assets/images/indie/Oxygen.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="https://store.steampowered.com/app/457140/Oxygen_Not_Included/">
                                <h4>Oxygen Not Included</h4>
                            </a>
                            <h6>R 150.00</h6>
                            <p>Oxygen Not Included is a space-colony simulation game. Try to survive, and possibly,
                                thrive.
                            </p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>

                            </ul>
                            <span>Our Rating</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
    </div>
    </div>
    </div>
    </div>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd. - Design: <a rel="nofollow noopener"
                                href="https://templatemo.com" target="_blank">TemplateMo</a></p>
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


</body>

</html>