<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);
$accessLvl = $user_data['user_level'] ?? '';

if(!$accessLvl==1){
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>SA GAMING - Admin Page</title>

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
                        <?php endif; 
                        
                        
                        ?>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <br>
        <center>
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
            </center>
    </header>
    </body>

</html>