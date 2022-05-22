<?php

function connect($user,$password){
            try {
                //code...
                $conn = new PDO('mysql:host=localhost;dbname=OFPPT_PRO;port=3306',$user,$password);
               






            } catch (PDOException $e ) {
                //throw $th;
                $error = $e->getMessage();
                print_r($error);
            }

}




















?>