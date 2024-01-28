<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *
        {
            margin: 0;
            padding: 0;
        }
        body
        {
           background-image: linear-gradient(to right,rgb(0, 221, 255),rgb(97, 0, 243));
           background-attachment: fixed;
        }
       img:hover
       {
           box-shadow:1px 1px 12px aqua;
           transition-duration:.1s;
           height:30%;
           width:30%;
       }
       img
       {
           border:3px inset white;
           margin:2% 0% 0% 2%;
       }
    </style>
</head>
<body>
   <h1 style="text-align:center; color:gold; margin-top:15px;">New</h1>
    <?php
      $con=mysqli_connect("localhost","root","","signup") or die("connection failed");
      $query=mysqli_query($con,"SELECT * from file");
      while($row=mysqli_fetch_array($query)){
        
        $title=$row['title'];
        $image=$row['image'];

      ?>
       
        
        
       
                  <a href="images/<?php echo $image;?>" download="<?php echo $title;?>">
                    <img src="images/<?php echo $image;?>" style="width:30%; height:30%">
                  </a>   
                  
                  <!-- if you want to insert title-->
                   <!-- <!-- <?php echo $title;?>   -->
            
         
         
       <?php } ?>
     
</body>
</html>