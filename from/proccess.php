<?php 
   $userName = $_GET["Username"] ;
   $password = $_GET["Password"];


    $result =($userName=="admin" && $password=="123")?'dang nhap thanh cong':'dang nhap that bai';
    echo $result;
?>