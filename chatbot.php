<?php include "db.php"; ?>

<?php
$user_name=$_SESSION['uid'];
?>
<div class="large-12 columns">
  <br />
  <style>

  .container1 {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
  }

  .darker {
    border-color: #ccc;
    background-color: #ddd;
  }

  .container1::after {
    content: "";
    clear: both;
    display: table;
  }

  .container1 img {
    float: left;
    max-width: 50px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
  }

  .container1 img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
  }

  .time-right {
    float: right;
    color: #aaa;
  }

  .time-left {
    float: left;
    color: #999;
  }

  div.sticky {
    position: -webkit-sticky;
    position: sticky;
    bottom: 0;
    margin-top: 200px;
    background-color: #ddd;
    padding: 10px 0 0 10px;
    font-size: 20px;
  }
  .square {
    height: auto;
    width: 810px;
    padding: 8px;
    background-color: #fff;
    border: 2px solid #dedede;
  }
  </style>

  <center>
    <span id="ref">
      <div class="square">
        <center><h2 class="text-center">Chat Messages</h2></center>
        <br/>
        <?php 
        $query="select * from chats where username='$user_name' ORDER by date ASC";
        $res=mysqli_query($conn,$query);
        while($data=mysqli_fetch_array($res)){
          $user=$data['user'];
          $chatbot=$data['chatbot'];
          $date=$data['date'];
          ?>
          <div class="container1" style="margin-right: 400px;">
            <img src="user/user.png" alt="Avatar" style="width:100%;">
            <p id="message"><?php echo $user;?></p>
            <span class="time-right"><?php echo $date;?></span>
          </div>

          <div class="container1 darker" style="margin-left: 400px;">
            <img src="user/chatbot.png" alt="Avatar" class="right" style="width:100%;">
            <p><?php echo $chatbot;?></p>
            <span class="time-left"><?php echo $date;?></span>
          </div>

          <?php } ?>
          <div class="sticky">
            <div class="row">
             <div class="col-md-12">
               <div class="input-group mb-3">
                <input type="text" class="form-control" id="msg">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button" onclick="send()">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </span>
    <br/>
  </center>

  <script type="text/javascript">

  function send(){
    var text=$('#msg').val().toLowerCase();


    $.ajax({
      type:"post",
      url:"mysearch.php",
      data:{text:text},
      success:function(data){
                    //alert(data);
                    $('#ref').load(' #ref');
                  }
                });
  }
  </script>

</div>
