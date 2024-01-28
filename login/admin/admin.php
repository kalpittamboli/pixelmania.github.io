<?php
 session_start();
 if(!isset($_SESSION['username'])){
    
     header('location:login.php');
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
   <div class="box">
      <div class="left">
          <h3 id="name"><?php  echo $_SESSION['username'];   ?></h3>
          <div class="link">
              <a href="#" >Home</a><br><br>
              <a href="">Users</a><br><br>
              <a href="">View Feedback</a><br><br>
              <a href="">Uploaded</a><br><br>
             <a href="logout.php">logout</a><br><br>
          </div>
      </div>
      <div class="right">
          <h1 style="text-align: center; color:white; margin-top: 15px;">ADMIN DASHBORD</h1>
      </div>
   </div>
  
</body>
</html>