<?php

// if ($_POST) {
//     var_dump($_POST);
//     echo $_POST["name"];
//     echo "<br>";
//     echo $_POST["email"];
// }
// // isset($_POST) 判斷是否存在
// if ($_GET) {
//     var_dump($_GET);
//     echo $_GET["name"];
//     echo "<br>";
//     echo $_GET["email"];
// }

// POST 方法路由會是乾淨的
// GET 方法路由會戴上 內容 而且只要相同路徑貼上就會出一樣的結果
// 大多表單都是會用POST 
// 連結會用GET
$name = $_POST["name"];
$mail = $_POST["email"];
$gender = $_POST["gender"];
$hobbys = $_POST["hobby"];
$hobby = implode(",",$hobbys);
$school = $_POST["edu"];




echo "姓名{$name}";
echo "<br>";
echo "Mail{$mail}";
echo "<br>";
echo "性別{$gender}";
echo "<br>";
echo "學校{$school}";
echo "<br>";
echo "興趣 : {$hobby}";

// foreach ($hobbys as $i) {
//     echo $i . ",";
// }
// 陣列建議用implode來處理
if($name == ""){
    echo "錯誤";
}
// empty 式表單內是空的時候
if(empty($name)){
    echo "錯誤";
};

// 傳送到其他葉面 header("location:form.php")
// 假設 今天是船get 的話 就是 在php後面加上?  例如 php?err=1 這樣路由就會變成我們輸入的樣子