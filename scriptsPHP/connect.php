<?php

$servername = "localhost";
$dbname = "OFPPT_PRO";
$port = "3306";
$user = "root";
$password = "";

try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $user, $password);
    
} catch (PDOException $e) {
    
    print_r($e->getMessage());

}





















?>