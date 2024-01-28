<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>  
    <link rel="stylesheet" href="feedbackdisp.css">
</head>
<body> 
<h1> Feedback </h1>
    <?php
    $con=mysqli_connect("localhost","root","","signup") or die("connection Failed");
    $sql="SELECT * from feedback";
    $result=mysqli_query($con,$sql) or die("query unsucessfull");

    if(mysqli_num_rows($result)>0)
        {
    ?>
<div class="box">
    <!-- table -->
    <table class="table">
        <thead>
           
               <th>Id</th>
               <th>Name</th>
               <th>Feedback</th>
               <th style="border-style:none"> Remove</th>
           
       </thead>
       <tbody>
           <?php
           while($row=mysqli_fetch_assoc($result))
           {
           ?>
              <tr class="tr">
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['name']?></td>
                  <td >
                  <textarea cols="30" rows="3"><?php echo $row['text']?></textarea>
                  </td>
                  <td style="border-style:none;">
                  <a href="removefeedback.php?id=<?php echo $row['id']?>" class="a">Remove</a> 
                  </td>
              </tr>
        <?php
             }
        ?>  
       </tbody>      
   </table>  
    <!-- end table -->
   <?php
    }
   ?>
</div>   
</body>
</html>