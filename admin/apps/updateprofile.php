 <?php include('all.php'); ?>
 <div class="large-7 columns extra-padding">
 <div class="winbox-white">
  <h3 class="text-center"> Admin Profile Update</h3>
  
  <?php
    $aname=(isset($_POST['admin_name']))?$sp->real_escape_string(trim($_POST['admin_name'])):'';
	$aid=(isset($_POST['admin_id']))?$sp->real_escape_string(trim($_POST['admin_id'])):'';
	$designation=(isset($_POST['designation']))?$sp->real_escape_string(trim($_POST['designation'])):'';

	$acontact=(isset($_POST['contact']))?$sp->real_escape_string(trim($_POST['contact'])):'';
	
	
	$position=(isset($_POST['position']))?$sp->real_escape_string(trim($_POST['position'])):'';
	$acity=(isset($_POST['city']))?$sp->real_escape_string(trim($_POST['city'])):'';
	
	$aphone=(isset($_POST['phone']))?$sp->real_escape_string(trim($_POST['phone'])):'';
	$aemail=(isset($_POST['email_address']))?$sp->real_escape_string(trim($_POST['email_address'])):'';
 
   $update="update admin_tbl set admin_name='$aname',admin_id='$aid', designation='$designation',  contact='$acontact', position='$position', city='$acity',phone='$aphone',email_address='$aemail' where admin_id='$aid'" ;
            
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
			<label>Admin Full Name<small>required</small>
			  <input type="text" name="admin_name" value="<?php echo $info->admin_name;?>" required/>
			</label>
			<small class="error">Name is required</small>
		 </div>
	</div>	
    
    
   <div class="row"> 
		 <div class="large-12 columns">
			<label>Designation <small>required</small>
			  <input type="text" name="designation" value="<?php echo $info->designation;?>" required/>
			</label>
			<small class="error">Designation is required</small>
		 </div>
         
		 <div class="large-12 columns">
			<label>Contact <small>required</small>
			  <input type="text" name="contact" value="<?php echo $info->contact;?>" required/>
			</label>
			<small class="error">Contact is required</small>
		 </div>
    </div> 
    
	<div class="row"> 
		 <div class="large-12 columns">
			<label>Current Postion <small>optional</small>
			  <input type="text" name="postion" value="<?php echo $info->position;?>" />
			</label>
		 </div>
		 
    </div>
    <div class="row"> 
		 <div class="large-12 columns">
			<label>Home District <small>optional</small>
			  <input type="text" name="city" value="<?php echo $info->city;?>" />
			</label>
		 </div>
         
		 
    </div>
    <div class="row"> 
		 <div class="large-12 columns">
			<label>Admin ID <small>required</small>
			  <input type="text" name="admin_id" value="<?php echo $info->admin_id;?>" required/>
			</label>
		 </div>
		<div class="large-12 columns">
			<label>Phone Number <small>optional</small>
			  <input type="text" name="phone" value="<?php echo $info->phone;?>" />
			</label>
		 </div>
    </div>
    <div class="row">
		<div class="large-12 columns">
		<label>Email <small>required</small>
		  <input type="email" name="email_address" value="<?php echo $info->email_address;?>" required />
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
  <h3 class="text-left">Profile Picture</h3>
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
				          move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$aid.".".$ext);
					    
					    $pics=$output_dir.$aid.".".$ext;
					  
					      
					    $url=$aid.".".$ext;
					    
					    
					    $update="update admin_tbl set uimgurl='$url' where admin_id='$aid'";
					    
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
 
