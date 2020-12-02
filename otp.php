<?php
session_start();

$uphone=$_GET['uphone'];

  $token = "ab290c919a3ec1b42e34ee6b8b1e4655";
   echo "<center>";
   
   if (isset($_POST['code'])) 
   { 
   if ($_SESSION["otp"] == $_POST['code']) 
   {
    echo "You have verified your mobile number successfully.Please close this page and refresh the origin/parent page</br>";
    $_SESSION['verified'] = "1";
	header('location: dashboard.php');
    exit();
   } 
   else 
   {
    echo "You have entered wrong otp code, try again later.";
     exit();
    }
   }
   
if ((isset($_SESSION['verified'])) AND ($_SESSION['verified'] == '1')) 
{
  echo "You are already verifed, you don't need to verify your mobile number again";
  exit();
} 

else 
{

if(isset($_POST['otp'])) 
 {
  $code = substr(md5(mt_rand()), 0, 6);
  
  $to = $uphone;
  
  $message = "Your OTP is $code. You will required this OTP for login (only for first time) into chatbot application";
  $url = "http://api.greenweb.com.bd/api.php";
  $data= array(
  'to'=>"$to",
  'message'=>"$message",
  'token'=>"$token"
  );

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
  curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
  $smsresult = curl_exec($ch);

  $result = mb_substr($smsresult, 0, 2);

  if ($result == 'Ok') 
  {
  echo "Otp code is successfully sent to your mobile, you may have to wait upto 5 min to receive your code";

  $_SESSION["otp"] = $code;
  
  echo "
  Enter the verification code below </br>
  <form action='' method='POST'>
  <input type='text' name='code'>
  <button type='submit' value='code' name='otp'>Verify</button>
  </form>";
  exit();

  }

  else 
  {
  echo "Failed to send Otp. Please try again after sometime"; 
  exit();

  }
} 
  
  
  else {
echo "

  Enter your mobile number to receive OTP code </br>

  <form action=''  method='POST'>

  <input type='text' name='number'>

  <button type='submit' value='otp' name='otp'>Get Otp</button>

  </form>";

  exit();

  }
//it's not required but for extra safety

  exit();

  }

  echo "</center>";
//post your secured contents below
?>
