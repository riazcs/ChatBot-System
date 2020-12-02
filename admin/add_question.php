<?php

require('db.php');
$user_name=$_SESSION['admin_id'];

if(isset($_POST['questionadd']))

{
 $question = $_POST['question'];
 $answer = $_POST['answer'];

 
 $q = "INSERT INTO question (question, answer,username) VALUES ('$question', '$answer','$user_name')";
 
        if($sp->query($q)){
   
      echo '<div data-alert class="alert-box success radius">';
        echo  '<b>Success !</b> Profile updated successfully';
        echo  '<a href="#" class="close">&times;</a>';
      echo '</div>';
      
      header('refresh:2;url=dashboard.php?page=addquestions');
      
      }
    
    else{
      echo '<div data-alert class="alert-box warning radius">';
        echo  '<b>Error !</b> '.$sp->error;
        echo  '<a href="#" class="close">&times;</a>';
      echo '</div>';
      }
}
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="col-lg-6 m-auto">
  <form method="post">
    <br>
    <br>
    <div class="card">
      <div class="card-header bg-dark">
        <h1 class="text-white text-center"> ADD QUESTION </h1>
      </div>
      <br>
      <label> Question: </label>
      <input type="text" name="question" class="form-control">
      <br>
      <label> Answer: </label>
      <input type="text" name="answer" class="form-control">
      <br>
      <button class="btn btn-success" type="submit" name="questionadd"> Submit </button>
      <br>
    </div>
  </form>
</div>
</body>
</html>