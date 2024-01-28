<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="viewuser.css">
    <link rel="stylesheet" href="css/all.css">
    <style>
     h1{     
         width:60%;
         height:10vh;
         margin-top:2%;
         margin-left:20%;
         margin-bottom:2%;
         padding-top:10px;
         text-align:center;
         border:4px inset white;
         background-color:rgba(255,255,255,.5);
         box-shadow:1px 1px 5px gray;
        }
   </style>
</head>
<body>

<h1>USERS DETAILS <i class="fas fa-users" style="margin-left:20px;"></i></h1>



<table> 
          <tr>
                     <th style="width:2%;border-right:2px solid black; padding:5px;">Id</th>
                     <th style="width:10%;border-right:2px solid black; padding:5px;">Name</th>
                     <th style="width:20%;border-right:2px solid black; padding:5px;">Email</th>
                     <th style="width:8%;border-right:2px solid black; padding:5px;">Mobile</th>
                    
          </tr>
</table>
    <?php
    $con=mysqli_connect("localhost","root","","signup") or die("connection failed");
    $sql="SELECT * from registration where usertype='user'";
    $result=mysqli_query($con,$sql) or die("query unsucessful");

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
          ?>
           <table>
                <tr>
                     <td style="width:2%;border-right:2px solid black; padding:5px;"><?php echo $row['id'];?></td>
                     <td style="width:10%;border-right:2px solid black;padding:5px;"><?php echo $row['username'];?></td>
                     <td style="width:20%;border-right:2px solid black;padding:5px;"><?php echo $row['email'];?></td>
                     <td style="width:8%;border-right:2px solid black;padding:5px;"><?php echo $row['mobile'];?></td>
                    
                 </tr>
             </table>
             
          <?php
        }
    }
    ?>
    <?php
    mysqli_close($con);
    ?>
</body>
</html>