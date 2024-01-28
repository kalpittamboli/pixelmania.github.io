<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="registration1.css">
  <style>
    a{
      
      font-size:25px;
      text-shadow:2px 2px 10px black;
    }
    span
    {
      color:white;
      font-size:20px;
    }
  </style>
</head>
<body>

<?php
  include 'dbcon.php';
 if(isset($_POST['submit']))
 {
     $username=mysqli_real_escape_string($con,$_POST['username']);
     $email=mysqli_real_escape_string($con,$_POST['email']);
     $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
     $password=mysqli_real_escape_string($con,$_POST['password']);
     $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);
 

     $pass = password_hash($password,PASSWORD_BCRYPT);
     $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

     $emailquery="SELECT * FROM registration WHERE email = '$email'  ";
     $query=mysqli_query($con,$emailquery);
     
     $emailcount=mysqli_num_rows($query);

       if($emailcount>0)
       {
          ?>
               
           <script>
                alert("email already exist");
           </script>
          <?php
       }else
       {
           if($password===$cpassword)
           {
                 $insertquery="INSERT INTO registration( username, email, mobile, password, cpassword) VALUES('$username','$email','$mobile','$pass',' $cpass')";
                 $iquery=mysqli_query($con,$insertquery);   
                 
                 if($iquery)
                     {
                         ?>
                          <script>
                            alert(" insert sucessfull");
                          </script>

                        <?php 
                      }
                     else
                       {
    
                              ?>
                          <script>
                           alert("insert not sucessfull");
                         </script>
                            <?php
                       }
                }else
           {
            ?>
            <script>
             alert("password not matched");
           </script>
              <?php
           }
       }
    }
?>

<!-- <form action="" method="post">
  <input type="text" name="username"><br>
  <input type="email" name="email"><br>
  <input type="number" name="mobile"><br>
  <input type="password" name="password"><br>
  <input type="password" name="cpassword"><br>
  <input type="submit" name="submit">
</form>
 -->
 <div class="box">
        <div class="left">
              <h1 style="text-align: right;">Regist-</h1>
        </div>
        <div class="right">
               <div class="form">
                   <form action="" method="POST">
                    <label for="in"><i class="fas fa-user" style="color:rgb(255, 255, 255);"></i></label>

                       <input type="text" name="username" placeholder="Username" id="in" required><br>
                    
                    <label for="in1"><i class="fas fa-envelope"style="color:white;"></i></label>
                      
                       <input type="email" name="email" placeholder="Email" id="in1"required><br> 
                       
                    <label ><i class="fas fa-phone"style="color:white;"></i></label>
                       
                       <input type="number" name="mobile" placeholder="mobile" id="in1"required><br>   
                   
                   <label for="pass"><i class="fas fa-lock" style="color:rgb(255, 255, 255);"></i></label>   
                       
                       <input type="password" name="password" placeholder="Password" id="pass"required><br>   
                    
                   <label for="pass1"><i class="fas fa-lock" style="color:rgb(255, 255, 255);"></i></label>   
                       
                       <input type="password" name="cpassword" placeholder="Confirm Password" id="pass1"required><br><br>
                       
                       <input type="submit" name="submit" value="Submit" id="btn"><br><br><br>

                   <span> Have an account?</span>  <a href="http://localhost/pixelmania2/login/login.php">Login</a>
                   </form>
               </div>
        </div>
        <div class="left1">
            <h1 style="text-align: left;">-ration</h1>
      </div>
    </div>


</body>
</html>