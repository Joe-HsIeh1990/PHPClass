<?php
require_once("backend/pdo.php"); //因為使用global 所以這邊要使用這個路徑
include("backend/function/posts.php");
$title = $_POST["title"];
$content = $_POST["content"];
$cate_id = $_POST["cate_id"];


// 上傳 可以在這邊做 也可以在function做
$filetype = $_FILES["cover"]["type"];
switch ($filetype) {  
    case "image/jpg":
        $cover = md5(uniqid()) . ".jpg";
        break;
    case "image/png":
        $cover = md5(uniqid()) . ".png";
        break;
    case "image/gif":
        $cover = md5(uniqid()) . ".gif";
        break;
    default:
        echo "上傳失敗";
        return;
}
$tmp_name = $_FILES["cover"]["tmp_name"];
$error = $_FILES["cover"]["error"];
storePost($title, $content, $cate_id,$cover,$tmp_name,$filetype,$error);
header("location:index.php");

