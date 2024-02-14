<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "whdfbujusw";


// Create DB Connection
 $con = mysqli_connect($host, $username, $password, $database);


// Try Catch DB Connection

//try {
  //  $pdo = new PDO("mysql:host=$host;dbname=$database", $username, //$password);
  //  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//} catch (PDOException $e) {
   // die("Connection fail: " . $e->getMessage());
//}



// Check DB Connection
 if(!$con){
   die("Connection Failed" . mysqli_connect_error());
 }



?>