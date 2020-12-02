<?php

session_start();
require('settings/core.php');

$uphone=$_SESSION['uphone'];

if ((isset($_SESSION['verified'])) AND ($_SESSION['verified'] == '1')) 
   {
 
   } 
  else 
   {
     echo "You are not authorized to view this page"; 

     echo "<a href='otp.php?uphone=$uphone'>Click here to verify your mobile to view the contents</a>";
     exit();
  }


?>