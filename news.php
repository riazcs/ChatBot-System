
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
<div class="container">
  <div class="col-lg-12">
    <h1 class="text-primary text-center">Chatting Histrory</h1>
    <br>
    <table class="table table-striped table-hover table-bordered">
      <tr class=" text-center bg-white text-white">
     
     <th> Chat </th>
        <th>Answer</th>
        <th>Time</th>
      </tr>
      <?php

          include ('db.php');
      
          $uid=$_SESSION['uid'];

          $q = " select * from chats where username='$uid' ORDER BY username DESC LIMIT 5";

          $query = mysqli_query($conn,$q);
          while ($res=mysqli_fetch_array($query)) {

          ?>
      <tr class="text-center">
     
        <td><?php echo $res ['user'];?></td>
        <td><?php echo $res ['chatbot'];?></td>
        <td><?php echo $res ['date'];?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
</body>
</html>
 
