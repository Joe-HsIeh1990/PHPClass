<?php
session_start(); //暫時存在放server端資料
//$_SESSION["USER"] ="JOHN"; //會員登入登出 有這行就是登入 沒這行就是登出 不管在哪裡都可以得到john
if($_SESSION){
    echo $_SESSION["USER"]."你好";
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
    <form action="login.php" method="post">
        <input type="text" name="name">
        <input type="submit" value="登入">
    </form>
    
</body>

</html>