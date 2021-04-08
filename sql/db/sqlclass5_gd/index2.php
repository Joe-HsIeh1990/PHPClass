<?php 

// 壓縮圖片方法
$img = "images/AOSfight.jpg";

$canvas = imagecreatefromjpeg($img);

#取得圖片現在的寬高
$canvas_w = imagesx($canvas);
$canvas_h = imagesy($canvas);

// var_dump($canvas_w,$canvas_h);

// 心寬高
// $new_w = $canvas_w / 2;
// $new_h = $canvas_h / 2;
// $new_w = 600;
// $new_h = $canvas_h / $canvas_w *600;

if($canvas_w > $canvas_h){
    $new_w = 600;
    $new_h = $canvas_h / $canvas_w * 600;
}else{
    $$new_h = 600;
    $new_w = $canvs_w / $canvas_h * 600;
}

// var_dump($new_w,$new_h);
$new_canvas = imagecreatetruecolor($new_w,$new_h);
                                      #座標      心寬   新高
imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);




$new_name = uniqid().".jpg";
imagejpeg($new_canvas,"thumbs/{$new_name}");


// 刪除站存 
// imagedestroy($new_canvas);
// imagedestroy($canvas);
