 <!DOCTYPE html>
 <html>
 <head>
  <title>cse</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="col-lg-12">
      <h1 class="text-primary text-center">Admin Controller</h1>
      <br>
      <table class="table table-striped table-hover table-bordered">
        <tr class=" text-center bg-white text-white">
           
         <th hidden> ID</th>
         <th>Username</th>
         <th> Question </th>
         <th>Answer</th>
         <th>Time</th>
         <th>Action</th>
       </tr>
       <?php

       include ('db.php');

       $aid=$_SESSION['admin_id'];

       $q = " select * from question ";//where username='$aid' ORDER BY username DESC LIMIT 5

       $query = mysqli_query($conn,$q);
       while ($res=mysqli_fetch_array($query)) {

        ?>
        <tr class="text-center">
           
          <td hidden><?php echo $res ['id'];?></td>
          <td><?php echo $res ['username'];?></td>
          <td><?php echo $res ['question'];?></td>
          <td><?php echo $res ['answer'];?></td>
          <td><?php echo $res ['date'];?></td>
          <td>
              <a href="edit.php?id=<?php echo $res ['id'];?>"class="btn btn-info">Update</a>
              
            </td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</body>
</html>

