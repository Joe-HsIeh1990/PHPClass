<?php
require_once("backend/pdo.php");
include("backend/function/members_auth.php");
$user = $_POST["user"];
$pw = $_POST["pw"];
if($user == "" || $pw ==""){
    echo "<script>alert('請輸入帳號密碼')</script>";
    header("Refresh:1;url=signup.php?user=0");
}else{
    storeMember($user, $pw);
}
