<?php
    function login($email,$pw) 
    {
        try {
            $rep = "select * from profil  where email = '$email' and pass = '$pw'";
            include_once "connect.php";
            
            $statment = $conn->prepare($rep);
            $statment->execute();
            $result = $statment->fetchAll(PDO::FETCH_OBJ);

            if(count($result) > 0)  return 1;
            else return 0;

        } catch (PDOExcepcetion $e) {

            print_r($e->getMessage());
            
        }
    }


    function registration($fname,$lname,$email, $pw,$pw_v) 
    {
        try {
            $rep = "INSERT INTO  profil VALUES('$fname','$lname','$email','$pw','$pw_v' )";
            
            include_once "connect.php";
            
            $statment = $conn->prepare($rep);
            $statment->execute();

            if($statment)  return 1;
            else return 0;

        } catch (PDOExcepcetion $e) {
            
            print_r($e->getMessage());
        }
    }