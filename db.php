<?php

      $servername="localhost";
      $username="root";
      $password="123";
      $dbname="chatbot";
      date_default_timezone_set("Asia/Dhaka");
      $server_time=date("Y-m-d H:i:s");

      $conn=new mysqli($servername,$username,$password,$dbname);

      if($conn){

      }else{

          echo "Failed to Connect";
    }

?>
