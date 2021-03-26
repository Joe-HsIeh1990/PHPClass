<?php
// 新增資料部分
require_once("sqlclass2_conn.php");
$name = $_POST["name"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$edu = $_POST["edu"];
$gender = $_POST["gender"];
$skills = implode(",",$_POST["skill"]);

$sql = "INSERT INTO students(name,mail,phone,edu,gender,skill)VALUES('$name','$mail','$phone','$edu','$gender','$skills')";
mysqli_query($conn,$sql);

header("Location:sqlclass2.php");