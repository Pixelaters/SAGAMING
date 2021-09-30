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
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>ZA Gaming - Starter Kit Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
                    <h2>SA <em>gaming</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                        <li class="nav-item active">
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
    <div class="page-heading StarterKit-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>For all your basic gaming needs</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1>Starter Kits</h1>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="left-content">
                        <br> </br>
                        <h3>High-Tier</h3>
                        <br> </br>
                        <ul class="featured-list">
                            <h6>Computer</h6>
                            <li><a href="https://www.amd.com/en/products/cpu/amd-ryzen-7-5800x">CPU: AMD Ryzen 7 5800X</a></li>
                            <li><a href="https://www.msi.com/Graphics-Card/GeForce-RTX-3080-GAMING-Z-TRIO-10G">GPU: MSI GeForce RTX 3080 GAMING Z TRIO</a></li>
                            <li><a href="https://www.corsair.com/us/en/Categories/Products/Power-Supply-Units/Power-Supply-Units-Advanced/RM-Series%E2%84%A2-80-PLUS-Gold-Power-Supplies/p/CP-9020195-NA">PSU: Corsair RM Series 80 Plus Gold Certified RM750 750W</a></li>
                            <li><a href="https://www.msi.com/Motherboard/MAG-X570S-TOMAHAWK-MAX-WIFI">Motherboard: MSI MAG X570S TOMAHAWK MAX Wi-Fi AMD </a></li>
                            <li><a href="https://www.corsair.com/ww/en/Categories/Products/Memory/Vengeance-PRO-RGB-Black/p/CMW32GX4M2D3600C18">RAM: Corsair Vengeance RGB PRO 32GB 3600MHz DDR4 </a></li>
                            <h6>Peripherals</h6>
                            <li><a href="https://www.logitechg.com/en-za/products/gaming-keyboards/g815-low-profile-rgb-mechanical-gaming-keyboard.html">Keyboard: Logitech G815</a></li>
                            <li><a href="https://www.logitechg.com/en-za/products/gaming-mice/g502-lightspeed-wireless-gaming-mouse.910-005568.html">Mouse: Logitech G502 Lightspeed Wireless</a></li>
                            <li><a href="https://www.lg.com/za/monitors/lg-27GL650F-B">Monitor: LG Ultra Gear Gaming 27GL650F-B</a></li>
                            <li><a href="https://www.logitechg.com/en-za/products/gaming-audio/g733-rgb-wireless-headset.981-000883.html">Headset: Logitech G733 Lightspeed Wireless</a></li>
                        </ul>

                        </div>
                </div>


                <div class="col-md-6">
                    <br> </br>
                    <div class="right-image">
                        <img src="assets/images/Kit1.jpg" alt="">
                    </div>
                    <br> </br>
                    <hr>
                    <br> </br> 
                </div>



                <br> </br>
                <div class="col-md-6">
                    <div class="left-content">
                        <br> </br>
                        <h3>Mid-Tier</h3>
                        <br> </br>
                        <ul class="featured-list">
                            <h6>Computer</h6>
                            <li><a href="https://www.amd.com/en/products/cpu/amd-ryzen-5-3600">CPU: Ryzen 5 3600</a></li>
                            <li><a href="https://www.nvidia.com/en-us/geforce/graphics-cards/gtx-1660-super/">GPU: GTX 1660 Super</a></li>
                            <li><a href="https://www.evetech.co.za/gamdias-kratos-m1-750b-rgb-750w-power-supply/best-deal/7419.aspx">PSU: Gamdias KRATOS M1-750B 750W 80+ Bronze</a></li>
                            <li><a href="https://www.asus.com/Motherboards-Components/Motherboards/PRIME/PRIME-B550M-A/">Motherboard: ASUS PRIME B550M-A </a></li>
                            <li><a href="https://www.klevv.com/ken/products_details/memory/Klevv_BoltX">RAM: KLEVV BOLT X 16GB 3200MHz DDR4</a></li>
                            <h6>Peripherals</h6>
                            <li><a href="https://www.corsair.com/us/en/Categories/Products/Gaming-Keyboards/Standard-Gaming-Keyboards/K55-RGB-PRO-Gaming-Keyboard/p/CH-9226765-NA">Keyboard: Corsair K55 RGB PRO</a></li>
                            <li><a href="https://www.corsair.com/eu/en/Categories/Products/CORSAIR-iCUE/Gaming-Mice/KATAR-PRO/p/CH-930C011-EU">Mouse: Corsair KATAR PRO Ultra-Light</a></li>
                            <li><a href="https://www.viewsonic.com/za/products/lcd/VX2458-C-mhd">Monitor: ViewSonic VX2458-C-MHD 24"</a></li>
                            <li><a href="https://www.corsair.com/us/en/Categories/Products/Gaming-Headsets/Stereo-Headsets/HS50-PRO-STEREO-Gaming-Headset/p/CA-9011215-NA">Headset: Corsair HS50 Pro</a></li>
                        </ul>
                    </div>
                    
                </div>

                <div class="col-md-6">
                    <br> </br>
                    <div class="right-image">
                        <img src="assets/images/Kit2.jpg" alt="">
                        <br> </br>
                        <hr>
                        <br> </br>
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="right-content">
                        <br> </br>
                        <h3>Low-Tier</h3>
                        <br> </br>
                        <ul class="featured-list">
                            <h6>Computer</h6>
                            <li><a href="https://www.amd.com/en/products/apu/amd-ryzen-5-5600g">CPU: AMD Ryzen™ 5 5600G</a></li>
                            <li><a href="https://www.evetech.co.za/gamdias-kratos-m1-600b-rgb-600w-power-supply/best-deal/7418.aspx">PSU: Gamdias KRATOS M1-600B RGB 80+ Bronze</a></li>
                            <li><a href="https://www.msi.com/Motherboard/B450M-BAZOOKA-MAX-WIFI">Motherboard: MSI B450M Bazooka Max WiFi </a></li>
                            <li><a href="https://www.klevv.com/ken/products_details/memory/Klevv_BoltX">RAM: KLEVV BOLT X 16GB 3200MHz DDR4</a></li>
                            <h6>Peripherals</h6>
                            <li><a href="https://www.evetech.co.za/gamdias-ares-m1-gaming-combo/best-deal/6682.aspx">Keyboard: Gamdias ARES M1</a></li>
                            <li><a href="https://www.evetech.co.za/gamdias-ares-m1-gaming-combo/best-deal/6682.aspx">Mouse: Gamdias ZEUS E3</a></li>
                            <li><a href="https://www.dell.com/za/enterprise/p/dell-se2417hgx-monitor/pd">Monitor: Dell SE2417HGX 24" FHD</a></li>
                            <li><a href="https://www.evetech.co.za/gamdias-ares-m1-gaming-combo/best-deal/6682.aspx">Headset: Gamdias EROS E3</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <br> </br>
                    <div class="left-image">
                        <img src="assets/images/Kit3.jpg" alt="">
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
                        <p>Copyright &copy; 2021 ZA Gaming </p>
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