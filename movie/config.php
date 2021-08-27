<?php

$servername = "localhost";
$username = "admin";
$password = "Admin@123";
$db="task3";
  $conn= new PDO("mysql:host=localhost;dbname=task3", $username, $password);
  // set the PDO error mode to exception
  // if($conn)
  // {
  //     echo"connected";
  // }
  //echo "Connected successfully";
//  catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

?>