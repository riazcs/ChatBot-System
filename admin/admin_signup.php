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
    <link rel="stylesheet" href="assets/css/sweetalert.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script src="js/form_validation.js"></script>

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
                            <h5><p><b>Enter the following to Admin Sign up -</b></p></h5>
                        </div> 
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div></div>


                        <div class="form-bottom">

                            <form role="form" action="" method="post" name="myForm"class="login-form">

                              <?php include('errors.php'); ?>

                              <div class="form-group">
                                <label  for="form-admin_name">Admin Full Name *</label>
                                <input type="text" name="admin_name" placeholder="Admin Full Name..." class="form-control is-invalid" id="admin_name"onchange="allLetter_onchange()" required>
                                <div class="invalid-feedback">
                                   <p><font color="#ff6666"><h6>Admin Full Name is required.</h6></font> </p>
                               </div>
                           </div>  


                           <div class="form-group">
                            <label  for="form-admin_id">User ID *</label>
                            <input type="text" name="admin_id" placeholder="User ID..."  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="User id is your email id"class="form-admin_id form-control" id="admin_id" onchange="admin_id_validation_onchange()"required>
                            <div class="invalid-feedback">
                              <p><font color="#ff6666"><h6>Please provide your email id as user id.</h6></font> </p>
                          </div>
                      </div>

                      <div class="form-group">
                        <label  for="form-degination">Designation *</label>
                        <!-- <input type="text" name="degination" placeholder="Designation..." pattern="[A-Za-z]{3,}" title="Three letter designation title"class="form-degination form-control" id="degination"> -->
                        <select name="designation"placeholder="Designation..."class="form-degination form-control" id="degination">
                          <option value="professor">Professor</option>
                          <option value="Asociate_prof">Associate Professor</option>
                          <option value="asistant_prof">Assistant Professor</option>
                          <option value="lecturer">Lecturer</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="form-phone">Contact Number *</label>
                    <input type="text" name="phone" placeholder="Contact Number..." pattern="[0-9]{11}" title="Give 11 digits Mobile number"class="form-phone form-control" id="phone" onchange="validatePhone_onchange()" required>
                    <div class="invalid-feedback">
                      <p><font color="#ff6666"><h6>Contact number is required.</h6></font> </p>
                  </div>
              </div>
              <div class="form-group">
                <label class="sr-only" for="form-email_address">Email Address</label>
                <input type="email" name="email_address" placeholder="Email Address..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"class="form-email_address form-control" id="email"onchange="validateEmail_onchange()">
                <div class="invalid-feedback">
                  <p><font color="green"><h6>Email address is optional.</h6></font> </p>
              </div>
          </div>

          <div class="form-group">
            <label class="sr-only" for="form-password">Password</label>
            <input type="password" name="password" placeholder="Password..."pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter,one special character and at least 8 or more characters" class="form-password form-control" id="password" onchange="password_validation_onchange()"required>
            <div class="invalid-feedback">
               <p><font color="#ff6666"><h6> Password is required.</h6></font> </p>
           </div>
       </div>  
       <div class="form-group">
        <label class="sr-only" for="form-password">Confirm Password</label>
        <input type="password" name="conformpassword" placeholder="Confirm Password..." class="form-password form-control" id="conformpassword" required>
        <div class="invalid-feedback">
          <p><font color="#ff6666"><h6>Confirm password is required.</h6></font> </p>
      </div>
  </div>      
<br>
  <div class="row" id="col_4"><div id="row_result_type" ><div class="form-group col-md-12">
    <button onclick="popUp()"type="newsubmit" class="btn" name="newsubmit">Submit!</button></div></div></div>
   
    
 <script src="sweetalert.min.js"></script>
  <script>
  function popUp() {
        //alert("HELLO");
        swal(
            "Your signed up complete successfully ",
            "You clicked the button!",
            "success"
            );
    }
    </script>
<br>

<center> Already a member? <a  class="new" href="admin_login.php">Login!</a></center>
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
