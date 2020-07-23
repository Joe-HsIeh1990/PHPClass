<!-- 字串大多會在前端做處理 -->
<?php 
$s = "lorem omofmg a df sad f asdfsda adf";
// echo strtoupper($s); //轉大寫
// echo strtolower($s); 變小寫
// echo ucfirst($s); 手字大寫 每一段都會大寫
// echo ucwords($s) 第一個字都大寫

// $new_s = substr($s,0,50); 可以取達50個字母 中文˙上會有錯誤 因為中文適用三個bind 所組成 所以當設定的數量沒辦法整除的話會出現?
// 可以在 substr 前面加上mb 他會變成一個字元為主 
$new_cs = mb_substr($s ,0 ,10 ,"utf-8"); //後面要加上編碼

// 如果今天 css 能做到 不要用js

// 如果 js 能做到就不藥用 php 

// 如果 php 能做到 不要用 mysql

// 但data 另類 js 是抓 遊覽氣的地方的 時間  php上則是伺服器所在的位子時間


?>