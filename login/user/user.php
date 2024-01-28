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
    <link rel="stylesheet" href="user.css">
</head>
<body>
   <div class="box">
       <h1 style="float: left; margin: 0; color: teal;">USER ACCOUNT</h1>
    
    <a href="logout.php">logout</a>
    <a href="">Profile</a>   
   </div>
     
      <div class="right">
          <h1>HELLO THIS IS </h1><br>
          <h2><?php  echo $_SESSION['username'];   ?></h1>
      </div><br><br>

     
  
</body>
</html>