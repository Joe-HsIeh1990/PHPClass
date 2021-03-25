<?php
$db_host = "localhost"; //主機名稱 當初新增使用者時候
$db_user = "admin";  // 使用者
$db_pw = "admin";  // 使用者密碼
$db_name = "phpclass"; //資料庫

$conn = mysqli_connect($db_host, $db_user, $db_pw, $db_name) or die("資料庫連線錯誤"); // 這是連線方法  假如前面錯誤 可以加上or die 在最前面加上@ 可以隱藏錯誤馬 
//設定編碼 
mysqli_query($conn, "SET NAME utf8");
// 進入資料表庫
// 這邊式phpclass
// 選sql 
// 全選的話 就輸入 SELECT *
// 部分選取的話 可輸入 SELECT name
// 多選的話 要輸入 SELECT name, phone
// 選取後 要在後面 輸入 FROM 哪個資料表 例如 FROM custom
// 假如只輸入 name 跟 mail 的話 會出現裡面 檔案的name mail
// 所以來到 php 在上面執行 sql select 的文法

//顯示資料庫的語法
//$sql = "SELECT * FROM custom";
//$result = mysqli_query($conn, $sql); //query作執行 意思說執行資料庫語法  這邊echo 會錯誤 只能用var_dump 資料存放點 所有的結果都吋在這 
// $row = mysqli_fetch_assoc($result); // 把資料抽出來 會變成陣列 這時候去 var_dump 會取出第一筆 要取締二比 要重複使用 去取得資料 用這個去得資料
// var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result); //取得第二筆 以此類推下娶
// var_dump($row);
// 上述方法不適最終結果 如果有幾萬筆資料的話 不可能用這種方式去處理

// 資料庫 備份方法 到首頁資料庫 找到自己的資料庫 典籍匯出 

// while($row = mysqli_fetch_assoc($result)){ //基本上都用assoc來做 不太會使用 array 或 row 
//     // var_dump($row);
//     // echo "<br>";
//     // 取id 內容
//     echo $row["id"];
//     echo $row["name"];
//     echo $row["mail"];
//     echo $row["phone"];
//     echo "<br>";
// };
// 資料大的時候就用 迴圈方式去做 並且正常會寫在 下面body裡面




// 新增資料
// 在mysqladmin內 點選sql 新增
// INSERT INTO custom(name,mail,phone)
// VALUES("王曉明","dfdsf@gamil.com","0955566666")
// INSERT INTO custom (name,phone,mail) 
// VALUES("白癡中","IDEA@gmail.com","0911457777")
