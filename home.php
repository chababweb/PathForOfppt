<!DOCTYPE html>
<?php
    session_start();

    $email = $_SESSION['email'] ;
    $pw = $_SESSION['password'] ;



    if (!isset($_SESSION['email']))
    {
        header("location: login.php");

    } else 
    {
    ?>

        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>home page</title>
            </head>
            <body>
                <!-- this link just for test logout -->
                <a href="sctriptsPHP/disconnected.php">logout</a>

                <h1>home.php</h1>

                
            </body>
        </html>

    <?php
    }


