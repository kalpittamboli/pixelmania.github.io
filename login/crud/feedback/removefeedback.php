<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $id=$_GET['id'];

        
        $con=mysqli_connect("localhost","root","","signup") or die("connection Failed");
        $sql="DELETE FROM feedback WHERE id={$id}";
        $result=mysqli_query($con,$sql) or die("query unsucessfull");
    
        header("Location:http://localhost/pixelmania2/login/crud/feedback/feedbackdisp.php");
       
        mysqli_close($con);
    ?>
</body>
</html>