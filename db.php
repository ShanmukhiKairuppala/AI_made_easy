<?php
$con = mysqli_connect("localhost", "root", "", "login_register");
if(mysqli_connect_errno()){
   echo "Failed to connect to mysql:" . mysqli_connect_error();
} else
   echo "connection established";
?>