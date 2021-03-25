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
// $name = $_POST["name"];
// $mail = $_POST["email"];
// $gender = $_POST["gender"];
// $hobbys = $_POST["hobby"];
// $hobby = implode(",", $hobbys); //將陣列集中成字串
// $school = $_POST["edu"];
// $comment = $_POST["comment"];




// echo "姓名: {$name}";
// echo "<br>";
// echo "Mail: {$mail}";
// echo "<br>";
// echo "性別 :{$gender}";
// echo "<br>";
// echo "學校 :{$school}";
// echo "<br>";
// echo "興趣 : {$hobby}";
// echo "<br>";
// echo "評論 : {$comment}";


// 繞迴圈方式  foreach ($hobbys as $hobby) {
//     echo $hobby . ",";
// }
// 陣列建議用implode來處理


// 判定
// if($name == ""){
//     echo "錯誤";
// }
// empty 式表單內是空的時候
if (empty($_POST["name"])) {
    header("location:form3.php?err=2"); //擋住不讓她進下一頁
} else {
    $name = $_POST["name"];
    echo "姓名: {$name}";
    echo "<br>";
};

// 注意input type 是email時會無法吃到上面err=2
if (empty($_POST["mail"])) {
    header("location:form3.php?err=3");
} else {
    $mail = $_POST["mail"];
    echo "Mail: {$mail}";
    echo "<br>";
};
if (empty($_POST["gender"])) {
    header("location:form3.php?err=4");
} else {
    $gender = $_POST["gender"];
    echo "性別 :{$gender}";
    echo "<br>";
};

// 下列兩種方法皆可empty 及 isset
// if (empty($_POST["hobby"])) {
//     header("location:form3.php?err=4");
// } else {
//     $hobbys = $_POST["hobby"];
//     $hobby = implode(",", $hobbys);
//     echo "興趣 : {$hobby}";
//     echo "<br>";
// }

if(!isset($_POST["hobby"])){
    header("location:form3.php?err=5");
}else{
    $hobbys = $_POST["hobby"];
    $hobby = implode(",", $hobbys);
    echo "興趣 : {$hobby}";
    echo "<br>";
};



// if(empty($name)){
//     echo "錯誤";
// };

// 未填寫不給過去新頁面 header("location:form.php")
// 假設 今天是船get 的話 就是 在php後面加上?  例如 php?err=1 這樣路由就會變成我們輸入的樣子
// 並且無法進入下一頁