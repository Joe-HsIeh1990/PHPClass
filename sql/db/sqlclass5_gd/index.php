<?php
//  gd函示
// 建立600 * 400 畫布
$width = 600;
$height = 400;
$canvas = imagecreatetruecolor($width, $height);

// 後面唯色馬
$black = imagecolorallocate($canvas, 0, 0, 0);
$white = imagecolorallocate($canvas, 255, 255, 255);
$red = imagecolorallocate($canvas, 255, 0, 0);
// 填滿顏色
imagefill($canvas, 0, 0, $red);

// 建立線條 兩點一直線 給兩組座標 XY
imageline($canvas,0,0,600,400,$white);
imageline($canvas,600,0,0,400,$white);
header("Content-type: image/jpeg"); //加上這個才會正確顯示圖片
// 建立文字          自行  座標   文字  只能用英文
imagestring($canvas,5,0,0,"HELLO PHP",$white);
// 這時會出現圖片編碼 所以要加上head
imagejpeg($canvas);
