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
                     <img class="fixed-ratio-resize" src="assets/ico/cse1.png" alt="logo"/>
                     <h5><p>Enter the following to Student log on -</p></h5>
                 </div> 
                 <div class="form-top-right">
                     <i class="fa fa-key"></i>
                 </div></div>


                 <div class="form-bottom">

                    <form role="form" action="" method="post" class="login-form">

                      <?php include('errors.php'); ?>

                      <div class="form-group">
                        <label class="sr-only" for="form-username">User ID</label>
                        <input type="text" name="uid" placeholder="User ID..." class="form-username form-control" id="id"required>
                        <div class="invalid-feedback">
                          <p><font color="#ff6666"><h6> Please enter your user id.</h6></font> </p>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-password">Password</label>
                    <input type="password" name="upassword" placeholder="Password..." class="form-password form-control" id="password"required>
                    <div class="invalid-feedback">
                       <p><font color="#ff6666"><h6>Please enter your password.</h6></font> </p>
                  </div>
              </div>		


              <div class="row" id="col_4"><div id="row_result_type" ><div class="form-group col-md-12">
                <button type="submit" class="btn" name="submit">Login</button></div></div></div>

                <center> Not yet member please <a  class="new" href="student_signup.php">Sign up!</a></center>
                <style>
                .new{
                   color:#090;
               }
               .new:hover{
                   color:#0F0;
               }
               </style>

           </form>
       </div>
   </div>
</div>
<div class="description">
   <p>
      <h5>Developed By: STUDENT Of CSE, MBSTU</h5>

  </p>
</div>
</div>
</div>

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
