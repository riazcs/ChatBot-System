
<?php

session_start();
require('settings/core.php');
$uid="";
$upassword="";
$uid=$_SESSION['uid'];
$upassword=$_SESSION['upassword'];

  
if(empty($uid) && (empty($upassword)))
{
	       
			echo "<div align='center' style='padding-top:100px' <b>IMPOSSIBLE !!</b> YOU MUST LOGIN FIRST.</div>";	
	        header('refresh:2;url=index.php');
	
}

if(!empty($uid)&& (!empty($upassword))):
	

$userquery= "select * from user where uid='$uid'";
$userquery=$sp->query($userquery) or die($sp->error);
$info=$userquery->fetch_object();
?>  

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="icon" href="assets\ico\mbstu.ico" type="image/icon" />
    <title><?php echo ucfirst($uid);?> | MBSTU </title>

	
        <link rel="stylesheet" href="css/app.css" />
        <link rel="stylesheet" href="formfillup/style3.css" />
		<link href="style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">  
        
	  	 <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
         <script type="text/javascript" src="js/modernizr.js"></script>
     
</head>
  <!--Navigation starts-->
   <?php include 'navigation.php';?>
  <!--Navigation ends -->

	<div class="large-1 columns">
	<!--sidebar-->
   <?php include 'sidebar.php';?>
   <!--sidebar ends -->
	</div>

	  
	<div class="large-11 columns">	  
	  <?php
	  $page=@$_REQUEST['page'];
	  
	  switch($page){
		
		case($page=='main'):
		include('apps/main.php');
		break; 
		
		case($page=='password'):
		include('apps/password.php');
		break;
		case($page=='logout'):
		include('apps/logout.php');
		break;
		/*
		case($page=='resultinfo'):
		include('apps/resultinfo.php');
		break;*/
		
		/*case($page=='profile'):
		include('apps/profile.php');
		break;*/
		
		case($page=='updateprofile'):
		include('apps/updateprofile.php');
		break;

		/*case($page=='addquestions'):
		include('apps/add_question.php');
		break;
		
		*/
		case($page=='chatbot'):
		include('chatbot.php');
		break;
		
		default:
		include('apps/main.php');
		break;  		  
		}
	  
	  ?>
	</div>
    
<?php
$userquery->close();
?>
	                   
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/reveal.js"></script>

</html>

<style>
.foot{
	color: #999;
	height:20px;
	text-align:center;
	font-size:16px;
}
.foot:hover
{
	color:#0C0;
}
</style>
<hr>
    <br> <br><br><br><br><br><br><br><br>
    <div id="full-footer">
             <div id="footer">
				<div class="container">
					<div class="row">
						
                        
						<div class="col-xs-12 col-sm-8 col-md-8">
                        
							<ul class="links">
                            <li class="">
								
                           <a  class="foot" href="#">&copy; Developed By: STUDENT, user, MBSTU</a>
                          
								</li>
								<li class="">
									<a class="foot" href="#">Credits</a>
								</li>
                               
                                <li class="">
									<a class="foot" href="#">Live Campus</a>
								</li>
                                <li class="">
									<a class="foot" href="#">Contact Us</a>
								</li>
                                <li>
									<a class="foot" href="http://mbstu.ac.bd/" target="_blank">MBSTU</a>
								</li>
                               
                               
                                </ul></div>
                            </div>
                        </div></div></div> 
                    </div> 



<?php endif; ?>
