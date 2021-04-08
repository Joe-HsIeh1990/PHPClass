<?php
$db_host = "localhost";
$db_user = "admin";
$db_pw = "admin";
$db_name = "phpclass";
$db_charset = "utf8mb4"; 

try{
    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    $pdo = new PDO($dsn,$db_user,$db_pw);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e -> getMessage();
}
