 <?php include('all.php'); ?>
 <div class="large-7 columns extra-padding">
 <div class="winbox-white">
  <h3 class="text-center"> Student Profile Update</h3>
  
  <?php
    $uname=(isset($_POST['uname']))?$sp->real_escape_string(trim($_POST['uname'])):'';
	$ustudentid=(isset($_POST['ustudentid']))?$sp->real_escape_string(trim($_POST['ustudentid'])):'';
	$usession=(isset($_POST['usession']))?$sp->real_escape_string(trim($_POST['usession'])):'';

	$ubatch=(isset($_POST['ubatch']))?$sp->real_escape_string(trim($_POST['ubatch'])):'';
	
	
	$semester=(isset($_POST['semester']))?$sp->real_escape_string(trim($_POST['semester'])):'';
	$ucity=(isset($_POST['ucity']))?$sp->real_escape_string(trim($_POST['ucity'])):'';
	
	$uphone=(isset($_POST['uphone']))?$sp->real_escape_string(trim($_POST['uphone'])):'';
	$uemail=(isset($_POST['uemail']))?$sp->real_escape_string(trim($_POST['uemail'])):'';
 
   $update="update user set uname='$uname',ustudentid='$ustudentid', usession='$usession',  ubatch='$ubatch', semester='$semester', ucity='$ucity',uphone='$uphone',uemail='$uemail' where uid='$uid'" ;
            
    if(isset($_POST['update'])){
		
		if($sp->query($update)){
			echo '<div data-alert class="alert-box success radius">';
			  echo  '<b>Success !</b> Profile updated successfully';
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			header('refresh:2;url=dashboard.php?page=profile');
			
			}else{
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		
		
	}	        
    
  ?>
  <form action="" method="post" data-abide>
    <div class="row">
         <div class="large-12 columns">
			<label>Your Name <small>required</small>
			  <input type="text" name="uname" value="<?php echo $info->uname;?>" required/>
			</label>
			<small class="error">Name is required</small>
		 </div>
	</div>	
    
    
   <div class="row"> 
		 <div class="large-12 columns">
			<label>Student ID <small>required</small>
			  <input type="text" name="ustudentid" value="<?php echo $info->ustudentid;?>" required/>
			</label>
			<small class="error">Student ID is required</small>
		 </div>
         
		 <div class="large-12 columns">
			<label>Session <small>required</small>
			  <input type="text" name="usession" value="<?php echo $info->usession;?>" required/>
			</label>
			<small class="error">Session is required</small>
		 </div>
    </div> 
    
	<div class="row"> 
		 <div class="large-12 columns">
			<label>Current Batch <small>optional</small>
			  <input type="text" name="ubatch" value="<?php echo $info->ubatch;?>" />
			</label>
		 </div>
		 
    </div>
    <div class="row"> 
		 <div class="large-12 columns">
			<label>Home District <small>optional</small>
			  <input type="text" name="ucity" value="<?php echo $info->ucity;?>" />
			</label>
		 </div>
         
		 
    </div>
    <div class="row"> 
		 <div class="large-12 columns">
			<label>Semester No <small>optional</small>
			  <input type="text" name="semester" value="<?php echo $info->semester;?>" />
			</label>
		 </div>
		<div class="large-12 columns">
			<label>Phone Number <small>optional</small>
			  <input type="text" name="uphone" value="<?php echo $info->uphone;?>" />
			</label>
		 </div>
    </div>
    <div class="row">
		<div class="large-12 columns">
		<label>Email <small>required</small>
		  <input type="email" name="uemail" value="<?php echo $info->uemail;?>" required />
		</label>
		<small class="error">An email address is required.</small>
        </div>
    </div>
    
    

    <div class="row">
		<div class="large-12 columns">
		 <button type="submit" name="update" class="small button expand success radius">Update</button>
		</div>
    </div>
    
  </form>      
 </div>
 </div>
 
 <div class="large-5 columns extra-padding">
 <div class="winbox-white ">
  <h3 class="text-left">Profile Puserure</h3>
  <br><br>
      <div class="row">
	   <?php
	        $output_dir = "img/";
		$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
		$extension = @end(explode(".", $_FILES["myfile"]["name"]));
		    if(isset($_POST['upload']))
		    {
			    //Filter the file types , if you want.
			    if ((($_FILES["myfile"]["type"] == "image/gif")
				    || ($_FILES["myfile"]["type"] == "image/jpeg")
				    || ($_FILES["myfile"]["type"] == "image/JPG")
				    || ($_FILES["myfile"]["type"] == "image/png")
				    || ($_FILES["myfile"]["type"] == "image/pjpeg"))
				    && ($_FILES["myfile"]["size"] < 504800)
				    && in_array($extension, $allowedExts)) 
			    {
				      if ($_FILES["myfile"]["error"] > 0)
					    {
					    echo "Return Code: " . $_FILES["myfile"]["error"] . "<br>";
					    }
				    if (file_exists($output_dir. $_FILES["myfile"]["name"]))
				      {
				      unlink($output_dir. $_FILES["myfile"]["name"]);
				      }	
					    else
					    {
					    $pic=$_FILES["myfile"]["name"];
					    $conv=explode(".",$pic);
					    $ext=$conv['1'];	
						    
					    //move the uploaded file to uploads folder;
				          move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$uid.".".$ext);
					    
					    $pics=$output_dir.$uid.".".$ext;
					  
					      
					    $url=$uid.".".$ext;
					    
					    
					    $update="update user set uimgurl='$url' where uid='$uid'";
					    
					    if($sp->query($update)){
						   echo '<div data-alert class="alert-box success radius">';
						      echo  '<b>Success !</b>  Image Updated' ;
						      echo  '<a href="#" class="close">&times;</a>';
						    echo '</div>';
						   header('refresh:3;url=dashboard.php'); 
					    }
					    else{
						    echo '<div data-alert class="alert-box alert radius">';
						      echo  '<b>Error !</b> ' .$sp->error ;
						      echo  '<a href="#" class="close">&times;</a>';
						    echo '</div>';
					    }
					    
					    
					    
					    }
					    
			    }	
			    else{
			    
			       echo '<div data-alert class="alert-box warning radius">';
			        echo  '<b>Warning !</b>  File not Uploaded, Check image' ;
			        echo  '<a href="#" class="close">&times;</a>';
				echo '</div>';
		 
			    }

		    }	    
	         ?>

		<div class="large-3 columns">
		<img src="img/<?php echo $info->uimgurl; ?>" width="100" height="100" alt="User Image"/>
		</div> 
		
		<div class="large-9 columns">
		    <form action="" method="post" enctype="multipart/form-data">
		      <div class="large-12 columns">
			<span style="color:red;">Maximun Image Size 400KB</span><br/><br/>
			<input type="file" name="myfile"  required/>
			</div> 
			
			<div class="large-12 columns">
			<button type="submit" name="upload" class="tiny button radius success">Upload</button>
			</div> 
		    </form>
		</div>
      </div>
 </div>
 </div>
 
