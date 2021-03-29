<?php
date_default_timezone_set("Asia/Taipei"); // 直接用語法修改 部用到阿帕契做修改 這裡設定會蓋過伺服器時間
try {
    include("upload_pdo.php");
    $filetype = $_FILES["img"]["type"];
    switch ($filetype) {
        case "image/jpg":
            $filename = md5(uniqid()).".jpg";
            break;
        case "image/png":
            $filename = md5(uniqid()).".png";
            break;
        case "image/gif":
            $filename = md5(uniqid()).".gif";
            break;
        default:
            echo "上傳錯誤檔案";
            return;
    }
    // $sql = "INSERT INTO gallary(name,created_at)VALUES(?,NOW())"; //NOW是資料庫語法 容易發生時區問題 
    $sql = "INSERT INTO gallary(name,created_at)VALUES(?,?)"; //第二種寫法
    $stmt = $pdo->prepare($sql);
    $created_at = date("Y-m-d H:i:s"); // 第二種寫法 date 函式 是照伺服器時間 xmapp 是德國的時間 所以要去xmapp去修改 date.timezone  老師建議不要改 
    // 要改的話 去把原本的最前面家分號 然後再用asia taipei

    $filesize = $_FILES["img"]["size"] / 1024;
    $error = $_FILES["img"]["error"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $target = "images/" . $filename;
    if ($error == 0) {
        if (move_uploaded_file($tmp_name, $target)) {
            echo "檔案上傳成功";
            $stmt->execute([$filename,$created_at]);//第二種寫法 加上$created_at
            header("Refresh:5;url=upload.php");
        } else {
            echo "上船失敗";
        }
    } else {
        echo "上除珊敗";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
