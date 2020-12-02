<?php 

	$aid = "";
	$password="";
	$conformpassword="";
	$aemail="";
	$aname="";
	$errors = array(); 
	$_SESSION['success'] = "";

	$db = mysqli_connect('localhost', 'root', '123', 'chatbot');
	
	
	if (isset($_POST['newsubmit'])) {
	     
		$aname = mysqli_real_escape_string($db, $_POST['admin_name']);
		$aid = mysqli_real_escape_string($db, $_POST['admin_id']);
		$aemail = mysqli_real_escape_string($db, $_POST['email_address']);
		$designation=mysqli_real_escape_string($db,$_POST['designation']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$conformpassword = mysqli_real_escape_string($db, $_POST['conformpassword']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
	
		if (empty($aname)) { array_push($errors, "Name is required"); }
		if (empty($aid)) { array_push($errors, "User ID is required"); }
		//if (empty($aemail)) { array_push($errors, "Email ID is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }

		if ($password != $conformpassword) 
		{
			array_push($errors, "The new two passwords are not same.");
		}
		
		
		if (!empty($aid) && (!empty($password)))
		{ 
		
		     $sql="SELECT * FROM admin_tbl WHERE admin_id='$aid'";
			 $result  = mysqli_query($db,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "User Id already exist, please try new one.");
              }
		 }
		/*if (!empty($aemail))
		{ 
		
		     $sql="SELECT * FROM admin_tbl WHERE email_address='$aemail'";
			 $result  = mysqli_query($db,$sql);
              $totalNumRowResult = mysqli_num_rows($result);
			  
             if($totalNumRowResult > 0)
			  {
              array_push($errors, "Email already exist, please try new one.");
              }
		 }*/
		
	       if (count($errors) == 0)
			 {
			 $password = sha1($password);

			 $q="SELECT * from admin_info where email = '$aid' and mobile = '$phone'" ;
			 //echo($q);
			 $result2  = mysqli_query($db,$q);
             $totalNumRowResult2 = mysqli_num_rows($result2);
             //echo("asdfa"+$totalNumRowResult2);
			 if($totalNumRowResult2 > 0)
			  {
			  $query = "INSERT INTO admin_tbl (admin_id, admin_name, password,email_address,phone,designation) VALUES('$aid', '$aname','$password','$aemail','$phone','$designation')";	
			  $results = mysqli_query($db, $query);		
			 			
				$_SESSION['admin_name'] = $aname;
				$_SESSION['admin_id'] = $aid;
				$_SESSION['email_address'] = $aemail;
				$_SESSION['password'] = $password;
				$_SESSION['designation']=$designation;
				$_SESSION['phone'] = $phone;

				header('location: home.php');
              
              }
			  else{
				array_push($errors, "Please provide your official email id and contact no.");
			  }
			
			
		 }
			
	}


	if (isset($_POST['submit'])) {
				
		$aid = mysqli_real_escape_string($db, $_POST['admin_id']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($aid))
		 {
			array_push($errors, "User ID is required.");
		}
		if (empty($password)) 
		{
			array_push($errors, "Password is required.");
		}
	
		if (count($errors) == 0) {
	
			 $password=sha1($password);
			 
			$query = "SELECT * FROM admin_tbl WHERE admin_id='$aid' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) 
			{
				$_SESSION['admin_id'] = $aid;
				$_SESSION['password']= $password;
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