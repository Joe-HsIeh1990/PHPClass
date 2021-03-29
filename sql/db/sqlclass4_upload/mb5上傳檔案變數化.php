<?php 
$s = "fasfd";
// echo md5($s); //會出現亂碼 但相同的$s還是有可能重複
echo md5(uniqid()); // 產生隨機黨名 帶附檔名需要再處理
$filetype = $_FILES["img"]["type"];
switch ($filetype) { //來處理檔名問題
    case "image/jpg":
        $filename = md5(uniqid()) . "jpg";
        break;
    case "image/png":
        $filename = md5(uniqid()) . "png";
        break;
    case "image/fig":
        $filename = md5(uniqid()) . "fig";
        break;
    default:
        echo "上船失敗";
        return;
}
