<?php
// 跟資料庫連線
$db_host = "localhost"; //主機名稱 當初新增使用者時候
$db_user = "admin";  // 使用者
$db_pw = "admin";  // 使用者密碼
$db_name = "phplearn"; //資料庫

$conn = mysqli_connect($db_host, $db_user, $db_pw, $db_name) or die("資料庫連線錯誤"); // 這是連線方法  假如前面錯誤 可以加上or die 在最前面加上@ 可以隱藏錯誤馬 
// 進入資料表 

// 選sql 
// 基本一定要寫 SELECT mail,name FROM 資料表

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql); //用query作執行 這邊echo 會錯誤 只能用var_dump

var_dump($result);
// 資料庫 備份方法 到首頁資料庫 找到自己的資料庫 典籍匯出 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>title</h1>
</body>

</html>