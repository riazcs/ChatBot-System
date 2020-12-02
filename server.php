<?php 

	$uid = "";
	$upassword="";
	$uconformpassword="";
	$uemail="";
	$uname="";
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '123', 'chatbot');
	
	
	if (isset($_POST['newsubmit'])) {
	     
		$uname = mysqli_real_escape_string($db, $_POST['uname']);
		$uid = mysqli_real_escape_string($db, $_POST['uid']);
		$uemail = mysqli_real_escape_string($db, $_POST['uemail']);
		$upassword = mysqli_real_escape_string($db, $_POST['upassword']);
		$uconformpassword = mysqli_real_escape_string($db, $_POST['uconformpassword']);
		$uphone = mysqli_real_escape_string($db, $_POST['uphone']);
		

	
		if (empty($uname)) { array_push($errors, "Name is required"); }
		if (empty($uid)) { array_push($errors, "User ID is required"); }
		if (empty($uemail)) { array_push($errors, "Email ID is required"); }
		if (empty($upassword)) { array_push($errors, "Password is required"); }

		if ($upassword != $uconformpassword) 
		{
			array_push($errors, "The new two passwords are not same.");
		}
		
		
		if (!empty($uid) && (!empty($upassword)))
		{ 
		
		     $sql="SELECT * FROM user WHERE uid='$uid'";
			 $result  = mysqli_query($db,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Username already exist, please try new one.");
              }
		 }
		if (!empty($uemail))
		{ 
		
		     $sql="SELECT * FROM user WHERE uemail='$uemail'";
			 $result  = mysqli_query($db,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Email already exist, please try new one.");
              }
		 }
		
	       if (count($errors) == 0)
			 {
			 $upassword = sha1($upassword);
			
			$query = "INSERT INTO user (uid, uname, upassword,uemail) VALUES('$uid', '$uname','$upassword','$uemail')";
		
			
			 $results = mysqli_query($db, $query);		
			 			
				$_SESSION['uname'] = $uname;
				$_SESSION['uid'] = $uid;
				$_SESSION['uemail'] = $uemail;
				$_SESSION['upassword'] = $upassword;
				$_SESSION['uphone'] = $uphone;
				
				
				header('location: home.php');
		 }
			
	}


	if (isset($_POST['submit'])) {
				
		$uid = mysqli_real_escape_string($db, $_POST['uid']);
		$upassword = mysqli_real_escape_string($db, $_POST['upassword']);

		if (empty($uid))
		 {
			array_push($errors, "User ID is required.");
		}
		if (empty($upassword)) 
		{
			array_push($errors, "Password is required.");
		}
	
		if (count($errors) == 0) {
	
			 $upassword=sha1($upassword);
			 
			$query = "SELECT * FROM user WHERE uid='$uid' AND upassword='$upassword'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) 
			{
				$_SESSION['uid'] = $uid;
				$_SESSION['upassword']= $upassword;
				$_SESSION['success'] = "Congratulation! You are now logged in.";
				header('location: dashboard.php');
			}
			else
			 {
				array_push($errors, "Wrong information please input again.");
			 }
			}
		
			 
		}

?>