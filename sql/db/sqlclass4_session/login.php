<?php 
session_start(); // 沒有寫這行的話就部會存放進session的位子
$name = $_POST["name"];
$_SESSION["USER"] = $name;
header("Refresh:3;url=index.php");

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
    <h1><?php echo $_SESSION["USER"]."你好"; ?></h1>
    <a href="logout.php">登出</a> 
</body>
</html>
