<?php
$db_host = "localhost";
$db_user = "admin";
$db_pw = "admin";
$db_name = "phpclass";
$conn = @mysqli_connect($db_host, $db_user, $db_pw, $db_name) or die("資料庫連線錯誤");
mysqli_query($conn, "SET NAMES utf8");
