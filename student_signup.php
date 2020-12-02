<?php
ob_start();
session_start();
require('settings/core.php');
require('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to CSE</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/ico/mbstu.ico">

</head>
<body>

    <!-- Top content -->
    <div class="top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-sm-offset-0 text">
                        <h3><strong>DEPARTMENT OF COMPUTER SCIENCE & ENGINEERING, MBSTU</strong></h3>
                        <div class="description">
                         <p>
                          <h4><strong>SANTOSH  TANGAIL-1902</strong></h4>
                      </p>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
             <div class="form-top">
              <div class="form-top-left">
                <style> .fixed-ratio-resize
                {
                   max-width: 100%;
                   height: auto;
                   width: auto\9; 
               }
               </style>
               <img class="fixed-ratio-resize" src="assets/ico/cse1.png" alt="logo"class="center"/>
               <h5><p>Enter the following to Sign up -</p></h5>
           </div> 
           <div class="form-top-right">
               <i class="fa fa-key"></i>
           </div></div>


           <div class="form-bottom">

            <form role="form" action="" method="post" class="login-form">

              <?php include('errors.php'); ?>

              <div class="form-group">
                <label class="sr-only" for="form-password">Student Full Name</label>
                <input type="text" name="uname" placeholder="Student Full Name..."pattern="[A-Za-z\s]{5,}" title="Username is only character and minimum 5 character" class="form-password form-control" id="uname"required>
                <div class="invalid-feedback">
                   <p><font color="#ff6666"><h6> Student Full Name is required.</h6></font> </p>
                </div>
            </div>	

            <div class="form-group">
                <label class="sr-only" for="form-username">Student ID</label>
                <input type="text" name="uid" placeholder="Student ID..."pattern="[CE|ce0-9]{7}"title="Start with CE14001 format" class="form-username form-control" id="uid"required>
                <div class="invalid-feedback">
                    <p><font color="#ff6666"><h6> Student ID is required.</h6></font> </p>
              </div>
          </div>

          <div class="form-group">
            <label class="sr-only" for="form-password">Email ID</label>
            <input type="email" name="uemail" placeholder="Email ID..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"class="form-email form-control" id="uemail"required>
            <div class="invalid-feedback">
              <p><font color="#ff6666"><h6>Email ID is required.</h6></font> </p>
          </div>
      </div>
      <div class="form-group">
        <label class="sr-only" for="form-password">Session</label>
        <input type="text" name="usession" placeholder="Session..." title="Session only number"class="form-email form-control" id="usession"required>
        <div class="invalid-feedback">
          <p><font color="#ff6666"><h6> This Field is required.</h6></font> </p>
      </div>
  </div>
  <div class="form-group">
    <label class="sr-only" for="form-password">Contact Number</label>
    <input type="text" name="uphone" placeholder="Contact Number..." pattern="[0-9]{11}" title="Give 11 digits Mobile number"class="form-email form-control" id="uphone">
</div>

<div class="form-group">
    <label class="sr-only" for="form-password">Semester</label>
    <input type="text" name="semester" placeholder="Semester No..."pattern="[a-zA-Z0-9]{3,}"title="Give 8th formate semester" class="form-email form-control" id="semester"required>
    <div class="invalid-feedback">
       <p><font color="#ff6666"><h6>Semester is required.</h6></font> </p>
  </div>
</div>
<div class="form-group">
    <label class="sr-only" for="form-password">Password</label>
    <input type="password" name="upassword" placeholder="Password..." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!/\'^�$%&*()}{@#~?><>,|=_+�-\]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter,one special character and at least 8 or more characters"class="form-password form-control" id="upassword"required>
    <div class="invalid-feedback">
       <p><font color="#ff6666"><h6>Password is required.</h6></font> </p>
  </div>
</div>	
<div class="form-group">
    <label class="sr-only" for="form-password">Confirm Password</label>
    <input type="password" name="uconformpassword" placeholder="Confirm Password..." class="form-password form-control" id="uconformpassword"required>
    <div class="invalid-feedback">
      <p><font color="#ff6666"><h6>Confirm password is required.</h6></font> </p>
  </div>
</div>		

<div class="row" id="col_4"><div id="row_result_type" ><div class="form-group col-md-12">
    <button type="newsubmit" class="btn" name="newsubmit">Submit!</button></div></div></div>

    <center> Already a member? <a  class="new" href="student_login.php">Login!</a></center>
    <style>
    .new{
     color:#090;
 }
 .new:hover{
     color:#0F0;
 }
 </style>






 <div class="description">
     <p>
      <h5>Developed By: STUDENT Of CSE, MBSTU</h5>

  </p>
</div>




<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>         
<script src="bundles/modernizr8fce?v=wBEWDufH_8Md-Pbioxomt90vm6tJN2Pyy9u9zHtWsPo1"></script>
<script src="bundles/scriptsd83f?v=oz581ohlwKFbCRbNAxF4puJyoDQTyWRyWqNWcC00WVw1"></script>
<script defer src="StartJS/Circliful.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>		                    
