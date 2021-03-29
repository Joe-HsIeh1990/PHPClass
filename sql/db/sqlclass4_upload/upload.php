<?php
//  $filename =  $_FILES["img"]["name"];//檔案名稱
// $filename = md5(uniqid());
$filetype = $_FILES["img"]["type"]; //種類
switch ($filetype) { //上船種類判定 
    case "image/jpg":
        $filename = md5(uniqid()) . ".jpg";
        break;
    case "image/png":
        $filename = md5(uniqid()) . ".png";
        break;
    case "image/gif":
        $filename = md5(uniqid()) . ".gif";
        break;
    default:
        echo "上船失敗";
        return;
}
$filesize = $_FILES["img"]["size"] / 1024; //大小
$error = $_FILES["img"]["error"]; //錯誤 0的話就是沒問題
$tmp_name = $_FILES["img"]["tmp_name"]; //站存
//會先丟到站存 再丟進資料庫

$target = "image/" . $filename; //檔案指定在image 加上檔案名稱
if ($error == 0) { //當成功執行時
    if (move_uploaded_file($tmp_name, $target)) {
        //  move_uploaded_file  會重站存檔 存到目標
        echo "檔案上傳成功";
        header("Refresh:5;url=index.php"); // 五秒連接
    } else {
        echo "上船失敗";
    }
} else {
    echo "上除珊敗";
}
