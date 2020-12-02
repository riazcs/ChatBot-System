<?php

session_start();
require('settings/core.php');

$phone=$_SESSION['phone'];

if ((isset($_SESSION['verified'])) AND ($_SESSION['verified'] == '1')) 
   {
 
   } 
  else 
   {
     echo "You are not authorized to view this page"; 

     echo "<a href='otp.php?phone=$phone'>Click here to verify your mobile to view the contents</a>";
     exit();
  }


?>