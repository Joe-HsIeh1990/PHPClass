<?php 
session_start();
session_destroy(); //移除全部
// unset($_SESSION["USER"]) 移除指定的
header("location:index.php");