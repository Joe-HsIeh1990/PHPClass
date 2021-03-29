<?php
include("function.php");
$name = $_POST["name"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$id = $_POST["id"];
$edu = $_POST["edu"];
$gender = $_POST["gender"];
$skills = implode(",", $_POST["skill"]);
update($name, $mail, $phone, $edu, $gender, $skills, $id);
header("sqlclass3.php");
