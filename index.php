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
    <title>My Path In Ofppt</title>
</head>
<body>

    <!-- Navigation: -->
    <nav class="navbar navbar-expand-lg navbar-dark py-4 bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">

            <!-- Website Logo or user Profile logo -->

                <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">

            </a>

        <!-- Hamburger menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <!-- Links -->
                <ul class="nav navbar-nav navbar-right">

                    <!-- Checking if current page is index.php -->
                    <?php
                        if(basename($_SERVER['PHP_SELF']) != 'index.php'){
                            echo '<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>';
                        }
                        else{
                            echo '';
                        }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">My Path</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Education</a>
                    </li>
                    
                    <!-- Mega menu here -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="about.php">Courses</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Exercises</a>
                    </li>

                    <!-- Link to add post page here -->
                    <?php
                        if(isset($_SESSION['user'])){
                            echo '<li class="nav-item"><a class="nav-link" href="add-post.php">Add Post</a></li>';
                        }
                        else{
                            echo '<li class="nav-item"><a class="nav-link" href="registration.php">Add post now</a></li>';
                        }

                    ?>

                    <!-- Check if user is logged in or not -->
                    <?php
                        if(isset($_SESSION['user'])){
                            echo '<li class="nav-item">
                                    <a class="nav-link active" href="logout.php">'.$_SESSION['user'].'</a>
                                </li>';
                        }
                        else{
                            echo '<li class="nav-item">
                                    <a class="nav-link active" href="login.php">Login now</a>
                                </li>';
                        }

                        ?>
                </ul>
        </div>
    </nav>

    <!-- <h1>index.php</h1>
    <a href="login.php">login</a>
    <a href="registration.php">registration</a> -->

    <!-- Scripts: -->
    <script src="scriptsJs/jquery-3.6.0.js"></script>
    <script src="scriptsJs/bootstrap.bundle.js"></script>
    <script src="scriptsJs/script.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

</body>
</html>