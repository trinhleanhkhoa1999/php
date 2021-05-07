<?php 
function connectDB(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "age";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
    // echo "connect thanh cong";
    $conn -> set_charset("utf8");
  }
  return $conn;
}
?>