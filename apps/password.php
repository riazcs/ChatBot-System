 <?php include('all.php'); ?>
<div class="large-7 columns extra-padding">		 
	<div class="winbox-white ">
	 <h4 class="text-left" style="color:#333"><i class="fi fi-lock"></i> Change Password</h4>
		<?php
		  $old=(isset($_POST['old']))?$sp->real_escape_string(trim($_POST['old'])):'';
		  $new=(isset($_POST['new']))?$sp->real_escape_string(trim($_POST['new'])):'';
		        
		  $old=sha1($old);
		  $new=sha1($new);
		 $check="select * from user where uid='$uid' and upassword='$old'"; 
		 $check=$sp->query($check) or die ($sp->error);
		  
		 
		  if(isset($_POST['submit'])){
		   $count=$check->num_rows;
		   
		      if($count>0){
		      
		      $update="update user set upassword='$new' where uid='$uid'";
			  
			if($sp->query($update)){
				
			echo '<div data-alert class="alert-box success radius">';
			  echo  '<b>Success !</b> password updated successfully';
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			
			}else{
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		    
		      }else{
			echo '<div data-alert class="alert-box alert radius">';
			  echo  '<b>Error !</b> Wrong Current Password...';
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		  
		  }
		        
		?>
	<form action="" method="post" data-abide>
		
		    <div class="row">
		      <div class="large-12 columns">
			  <label for="password">Current Password <small>required</small>
			      <input id="upassword" type="password"  name="old" placeholder="Current password" required></input>
			  </label>
			  <small class="error">Passwords must be at least 4 character alphanumeric.</small>
		      </div>
		    </div>
			
		    <div class="row">
		      <div class="large-12 columns">
			  <label for="password">New Password <small>required</small>
			      <input id="upassword" type="password"  name="new" placeholder="New password" required></input>
			  </label>
			  <small class="error">Passwords must be at least 4  character alphanumeric.</small>
		      </div>
		    </div>
			
			<div class="row">
			<div class="large-12 columns">
			<button type="submit" name="submit" class="button expand radius">Update</button>
			</div>
			</div>
			</form>   
		</div>
</div>


<div class="large-5 columns extra-padding">		 
		<div class="winbox-white text-center">
	
			<h4 class="text-left" style="color:#333"><i class="fi fi-info"></i> Password</h4>
			<p>
			 Your password remain protected if you change your password.
			</p>
			   
		</div>
</div>

