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
    <link rel="stylesheet" href="css/all.css">
    <style>
        .u{
            width:40%;
            height:20%;
            background-color:rgba(235,235,330,.3);
            border-radius:0px 50px ;
            border-right:5px solid gold;
            box-shadow:2px 2px 20px black;
            padding:10% 0% 0% 10%;
            margin:20%;
        }
        .u a
        {
             color:blue;
             margin:10%;
             padding:10px 15px 10px 15px;
             border:5px solid white;
             border-radius:30px;
             background-color:rgba(235,235,330,.5);
        }
        .u a:hover
        {
            border:5px solid white;
            box-shadow:2px 2px 20px blue inset;
        }
     </style>
</head>
<body>
   <div class="box">
      <div class="left">
      
          <h3 id="name"><i class="fas fa-user-tie" style="font-size:70px; margin-right:20px; color:rgba(24, 0, 55,.5);"></i>
          <?php  echo $_SESSION['username'];   ?>
        </h3>
          <div class="link">
              <a href="#" ><i class="fas fa-home" style="color: rgb(68, 0, 255);"></i> Home</a><br><br>
              <a href="viewusers.php"><i class="fas fa-users" style="color: rgb(68, 0, 255);"></i> Users</a><br><br>
              <a href="crud\feedback\feedbackdisp.php"><i class="fas fa-envelope-open-text" style="color: rgb(68, 0, 255);"></i> Inbox</a><br><br>
              <a href="crud\report\reportdisp.php"><i class="fas fa-bug" style="color: rgb(68, 0, 255);"></i> Report</a><br><br>
              <a href="upload\adminimagesdisp.php"><i class="fas fa-upload" style="color: rgb(68, 0, 255);"></i>  Uploads</a><br><br>
              <a href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=signup&table=registration&pos=0"><i class="fas fa-database" style="color: rgb(68, 0, 255);"></i> Database</a><br><br><br><br>
          </div>
          <a href="logout.php" id="lout"> Logout</a><br><br>
      </div>
      <div class="right">
          <h1 style="text-align: center; color:white; margin-top: 15px;">ADMIN DASHBORD</h1>
          <div class="u"> 
               <a href="newuser.php"><i class="fas fa-user-tag"></i> NEW USER</a>
          </div>
      </div>
   </div>
  
</body>
</html>