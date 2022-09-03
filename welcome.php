<?php
session_start();
if(!isset($_SESSION['id']))
{
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hi, <?php  echo $_SESSION['Username']?></h1>
   <form action="logout.php" method="post">
   <a href="logout.php">Logout</a>
   </form>
    

   <script src="./jquery-3.6.0.min.js"></script>
  
</body>

</html>