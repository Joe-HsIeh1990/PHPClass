<!-- php 內建類別 連線資料庫 會協助擋住一些sql 攻擊 用這種方式去做表單叫好 -->
<?php 
$db_host = "localhost"; //主機名稱 當初新增使用者時候
$db_user = "admin";  // 使用者
$db_pw = "admin";  // 使用者密碼
$db_name = "phpclass"; //資料庫
$db_charset = "utf8mb4"; // 跟conn 不一樣 這邊編碼要先儲存
// define("DB_USER","admin"); 可以用常數來處理
// define("DB_PW","admin");



//例外處理 有一點點像是 if else 
try {
    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    $pdo = new PDO($dsn,$db_user,$db_pw); // 用常數的話 後面改成DB_USER DB_PW
    // 小箭頭在物件導向時候使用
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT); // 比較特殊的錯誤中才會有特別警示
    // 正常處理
}catch(PDOException $error){
    //錯誤訊息
    echo $e -> getMessage();

}
