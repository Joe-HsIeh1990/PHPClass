<?php
   require_once("conn.php");
   $name = $_POST["name"];
   $phone = $_POST["phone"];
   $mail = $_POST["mail"];
   $edu = $_POST["edu"];
   $gender = $_POST["gender"];
   $skill = $_POST["skill"];

   $sql = "INSERT INTO custom(name,mail,phone,edu,gender,skill)VALUES('$name','$mail','$phone','$edu','$gender','$skill')";
   mysqli_query($conn,$sql);
   header("Location:index.php"); // 島回首業
