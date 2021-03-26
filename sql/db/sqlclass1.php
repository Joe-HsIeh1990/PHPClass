<?php
$db_host = "localhost"; //主機名稱 當初新增使用者時候
$db_user = "admin"; // 使用者
$db_pw = "admin"; // 使用者密碼
$db_name = "phpclass"; //資料庫
$conn = @mysqli_connect($db_host, $db_user, $db_pw, $db_name)or die("資料庫連線錯誤");
// or die 當資料庫有錯誤 當不能連線時顯示資料庫連線錯誤 
// mysqli_connect前面加上小老鼠可隱藏原始碼 建議開發完後一定要加上不然很容易被害

// 要連接資料庫 顯示資料庫內容 需要用資料庫語法
// 點進藥用的資料庫 點sql
// 第一個重要的是select 選取 第二個是欄位或全選的話用*字號 特定選擇例如 name,mail
// 第三個 寫from 哪個資料表
// select * from students or select name,mail from students

$sql = "SELECT * FROM students"; //取得資料
$result = mysqli_query($conn,$sql); // 連線資料庫$conn及執行語法$sql 
var_dump($result);//檢視會發現$result是個很大的物件 但不是正常顯示




// 如果今天用外面其他電腦 資料庫可以先備份點擊首頁=>資料庫=>找到資料庫=>案匯出 => 案執行;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=r, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>
    title
</h1>
</body>

</html>