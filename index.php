<?php

  include ('scriptsPHP/connect.php');
  include 'scriptsPHP/method.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles: -->
    <link rel="stylesheet" href="styles/bootstrap.css">
    <link rel="stylesheet" href="styles/style.css?v=1.00" type="text/css"">

    <!-- Icons: -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- Title: -->
    <title>index</title>
</head>
<body>

    <!-- Navigation: -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">

            <!-- logo -->
                <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                <span class="d-none d-sm-inline">

            <!-- Php code to test if a user is logged in or not -->
                    <?php
                        if(isset($_SESSION['user'])){
                            echo "Welcome ". $_SESSION['user'];
                        }
                        else{
                            echo "Login";
                        }
                    ?>
                </span>

            </a>

        <!-- Hamburger menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                    <!-- Check if user is logged in or not -->
                    <?php
                        if(isset($_SESSION['user'])){
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="logout.php">Logout</a>
                                </li>';
                        }
                        else{
                            echo '<li class="nav-item">
                                    <a class="nav-link" href="login.php">Login now</a>
                                </li>';
                        }

                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <h1>index.php</h1>
    <a href="login.php">login</a>
    <a href="registration.php">registration</a> -->


    <!-- Scripts: -->
    <script src="scriptsJs/jquery-3.3.1.min.js"></script>
    <script src="scriptsJs/bootstrap.min.js"></script>
    <script src="scriptsJs/script.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

</body>
</html>