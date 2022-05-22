<!DOCTYPE html>
<?php

    include_once 'scriptsPHP/method.php';
    $fname = "";
    $lname = "";
    $fname = "";
    $lname = "";
    $email = "";
    $pw = "";



    if(isset($_POST['btnReg'])) 
    {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email_reg'];
        $pw = $_POST['pass_reg'];
        $pw_v = $_POST['pass_reg_v'];

        $result = registration($fname,$lname,$email, $pw,$pw_v) ; 

        if($result == 1)
        {
            header("location: login.php");

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
    <title>registration</title>
</head>
<body>
    <!-- this 2 link just for test  -->
    <a href="index.php">index</a>
    <a href="registration.php">registration</a>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

        <table>
            <tr>
                <td> <label for="f_name">first name</label></td>
                <td> <input type="text" name="first_name" id="f_name" value="<?php echo $fname; ?>"></td>
            </tr>
            <tr>
                <td> <label for="l_name">last name</label></td>
                <td> <input type="text" name="last_name" id="l_name" value="<?php echo $lname; ?>"></td>
            </tr>
            <tr>
                <td> <label for="mail">email</label></td>
                <td> <input type="email" name="email_reg" id="mail" value="<?php echo $fname; ?>"></td>
            </tr>
            <tr>
                <td> <label for="pass">password</label></td>
                <td> <input type="password" name="pass_reg" id="pass" value="<?php echo $lname; ?>"></td>
            </tr>
            <tr>
                <td><label for="pass">valid password</label></td>
                <td> <input type="password" name="pass_reg_v" id="pass" value="<?php echo $lname; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="create" name="btnReg"></td>
                <td></td>
            </tr>
        </table>
    </form>

</body>
</html>