<?php
require_once("backend/pdo.php");
include("backend/function/posts.php");

$title = $_POST["title"];
$content = $_POST["content"];
$cate_id = $_POST["cate_id"];
$id = $_POST["id"];
// 圖片修改
if ($_FILES) {
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
} else {
    $cover = $_POST["cover"];
    $tmp_name = "";
    $error = "";
    $filetype = "";
}





update($title, $content, $cate_id, $cover, $id, $tmp_name, $filetype, $error);
header("Refresh:1;url=post.php?id={$id}");
echo "<script>alert('修改完成')</script>";
