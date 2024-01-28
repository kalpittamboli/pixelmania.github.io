<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="file.css">
</head>
<body>
    <form action="file.php" method="post" enctype="multipart/form-data">
         <table border="15">
             <tr>
                 <td id="title">Title</td>
                 <td><input type="text" name="title" id="in" required></td>
             </tr>
             <tr>
                 <td id="title">File</td>
                 <td><input type="file" name="image" id="uplod" required></td>
             </tr>
             <tr>
                 
                 <td colspan="2" id="title"><input type="submit" name="submit" value="uplooad" id="btn"></td>
             </tr>
         </table>
    </form>
</body>
</html>
<?php
  $con=mysqli_connect("localhost","root","","signup") or die("connection failed");
  if(isset($_POST['submit']))
    {
      
      $title=$_POST['title'];
      $image_name=$_FILES['image']['name'];
      $temp=$_FILES['image']['tmp_name'];

      move_uploaded_file($temp,"images/$image_name");
      $query=mysqli_query($con,"INSERT into file(title,image)values('$title','$image_name')");

      if($query)
      {
         ?>
         <script>
             alert("File uploaded sucessfully");
         </script>   
         
         <?php
      }else{
        ?>
         <script>
             alert("File not uploaded");
         </script>   
         <?php
      }
    }
?>