<?php
// pdo檔名用pdo  用mysqli的話用conn
$db_host = "localhost";
$db_user = "admin";
$db_pw = "admin";
$db_name = "phpclass";
$db_charset = "utf8mb4"; 

// $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
// $pdo = new PDO($dsn,$db_user,$db_pw);

// 例外處理 有點類似 ifelse

try{
    // 正常dsn會放在這裡
    // 小箭頭 為物件導向用
    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    $pdo = new PDO($dsn,$db_user,$db_pw);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    // 當出問題時
    echo $e -> getMessage();
}

