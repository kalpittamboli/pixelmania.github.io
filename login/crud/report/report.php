<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="report.css">
</head>
<body>  
  <h1>Report</h1>
  <div class="box">
    <div class="content">
  <form action="savereport.php" method="POST">
      <input type="email" placeholder="Email" name="name"><br>
      <textarea rows="4" placeholder="Report" name="text"></textarea><br>
      <input type="submit" name="submit" id="btn">
  </form>    
  </div>
  </div> 
</body>
</html>