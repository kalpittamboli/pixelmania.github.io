<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pixelmania.com</title>
   <link rel="stylesheet" href="login1.css">
   <link rel="stylesheet" href="css/all.css">

</head>
<body>
<?php
 include 'dbcon.php';
 if(isset($_POST['submit'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
       
      $email_search="SELECT * from registration where email='$email'";
      $query = mysqli_query($con,$email_search);

      $email_count = mysqli_num_rows($query);
      if($email_count){
          $email_pass = mysqli_fetch_assoc($query);

          $db_pass=$email_pass['password']; 
          $_SESSION['username']=$email_pass['username'];
          $pass_decode = password_verify($password, $db_pass);

             if($pass_decode)
               {
                   if($email_pass['usertype']=="admin"){
                              echo"login sucessful";
                              ?>
                             <script>
                                   location.replace("admin.php");
                             </script>
                               <?php
                    }else
                   {
                    echo"login sucessful";
                    ?>
                   <script>
                         location.replace("user.php");
                   </script>
                     <?php
                   }
               }else
                  {
                   echo"password incorrect";
                  }
      }else{
          echo"invalid email";
      }
    
    }

?>
  <div class="box">
        <div class="left">
              <h1>Login</h1>
        </div>
        <div class="right">
               <div class="form">
                   <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST">
                    <label for="in"><i class="fas fa-user" style="color:darkgray;"></i></label>

                       <input type="email" placeholder="email" name="email" id="in"><br>

                    <label for="pass"><i class="fas fa-lock" style="color:darkgray;"></i></label> 

                       <input type="password" placeholder="Password" name="password" id="pass"><br><br>


                       <input type="submit" name="submit" value="Login" id="btn"><br>
                       
                       
                       <label style="color: rgb(255, 255, 255); font-size: 19px;padding-right:3px;">If you don't have an account?</label>
                       <a href="http://localhost/pixelmania2/login/registration.php" target="_blank">Create Account</a>
                   </form>
               </div>
        </div>
    </div>
</body>
</html>