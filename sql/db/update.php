<?php 

// 修改

require_once("conn.php");
$name = $_POST["name"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];
$edu = $_POST["edu"];
$gender = $_POST["gender"];
$skill = $_POST["skill"];
$id = $_POST["id"];
$sql = "UPDATE custom SET name='$name',phone='$phone',mail='$mail',edu='$edu',gender='$gender',skill='$skill' WHERE id =".$id;
mysqli_query($conn,$sql);
header("Location: index.php");
