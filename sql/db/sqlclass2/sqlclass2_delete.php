<?php

// 刪除sql語法
// $sql = "DELETE FROM students WHERE id = 7" 刪除第七比 where是指定
require_once("sqlclass2_conn.php");
$id = $_GET["id"];
echo  $id;

$sql = "DELETE FROM students WHERE id =".$id;
mysqli_query($conn,$sql);
header("Location:sqlclass2.php");