<?php
include("function.php");
$name = $_POST["name"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$edu = $_POST["edu"];
$gender = $_POST["gender"];
$skills = implode(",", $_POST["skill"]);
store($name, $mail, $phone, $edu, $gender, $skills);
header("location:sqlclass3.php");