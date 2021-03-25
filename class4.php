<?php

// 同function
function test()
{
    $a = 100;
    echo $a;
}
function test2(){
    $a = 999;
    $b = 1.5;
    $c = $a * $b;
    return $c; // 回傳值
}
function test3($x,$y){
    return $x * $y;
}
test();
echo "<br>";
echo test2();
echo "<br>";
echo test3(1.5,8.9);


// include_require 引入
// 將別的頁面引入 例如 開了個新黨 要將class4.php 拿過去用 
// include("function.php") //此時當前新頁面就會顯示 function的內容

// require_once() 也可以使用 但兩個不同寫法還是有所差異性 後面有once但表只執行一次 
// 當然也有include_once 重點是他只能執行一次
  
// require 遇到錯誤時會中止執行 include會繼續執行
// 也可以用此方法來做 模組化 