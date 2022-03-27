<?php
// header('Access-Control-Allow-Origin: *');

// header('Access-Control-Allow-Methods: GET, POST');

// header("Access-Control-Allow-Headers: X-Requested-With");
  $lhost = 'localhost';
  $user = 'root';
  $pass = '';
  $dbase = 'customer_login'; 
  
  $conn = mysqli_connect($lhost, $user, $pass, $dbase);
  
  // check connection
  
  if ($conn->connect_error){
      die ("Connection unsuccessful: " .$conn->connect_error);
  }
?>