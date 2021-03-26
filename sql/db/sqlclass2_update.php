<?php
require_once("sqlclass2_conn.php");
// sql語法 
//  "UPDATE students SET name="johon",email="adfas@gga",phone="0988888" WHERE id = 14
$name = $_POST["name"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$id = $_POST["id"];
$edu = $_POST["edu"];
$gender = $_POST["gender"];
$skills = implode(",",$_POST["skill"]);

$sql = "UPDATE students SET name='$name',mail='$mail',phone='$phone',edu='$edu',gender='$gender',skill='$skills' WHERE id=".$id;
mysqli_query($conn,$sql);
header("Location: sqlclass2.php");


// echo $name;
// echo $mail;
// echo $phone;
// echo $id;