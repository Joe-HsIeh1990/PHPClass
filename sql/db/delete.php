<?php 
  require_once("conn.php");
  $id = $_GET["id"];
  $sql = "DELETE FROM custom WHERE id =".$id;
  mysqli_query($conn,$sql);
  header("Location:index.php");
  // 刪除
  // 在mysql 內刪除 DELETE FROM custom WHERE id=8 刪除id 為8的
