<!DOCTYPE html>
<?php

    include_once 'scriptsPHP/method.php';
    $email = "";
    $pw = "";

    if (isset($_COOKIE['email']) and isset($_COOKIE['password'])) 
    {
        $email = $_COOKIE['email'];
        $pw = $_COOKIE['password'];
    
    }

    if(isset($_POST['btnLog'])) 
    {
        $email = $_POST['email'];
        $pw = $_POST['pw'];

        $result = login($email,$pw); 

        if($result == 1)
        {
            session_start();

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pw;

            if(isset($_POST['remember']) and $_POST['remember'] = "remember_info")
            {
                setcookie("email",$_SESSION['email'] , time()+1200, $path = "", $domain = "",$secure = false,$httponly = false );
                setcookie("password",$_SESSION['password'], time()+1200, $path = "", $domain = "",$secure = false,$httponly = false );

            }

            header("location: home.php");

        } else
        {
            echo "error..!!!";
        }
 
    }


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <!-- this 2 link just for test navigation -->
    <a href="index.php">index</a>
    <a href="registration.php">registration</a>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

        <table>
            <tr>
                <td> <label for="mail">Email</label></td>
                <td> <input type="email" name="email" id="mail" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <td> <label for="pass">Password</label></td>
                <td> <input type="Password" name="pw" id="pass" value="<?php echo $pw; ?>"></td>
            </tr>
            <tr>
                <td><label for="remb">remameber me</label></td>
                <td><input type="checkbox" name="remember" id="remb" value="remember_info"></td>
            </tr>
            <tr>
                <td><input type="submit" value="login" name="btnLog"></td>
                <td></td>
            </tr>
        </table>
    </form>

</body>
</html>