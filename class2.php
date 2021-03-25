<?php 
//  條件判斷
$x = 0;
if($x > 1){
    echo "Success";
}else{
    echo "Failed";
}

$a = $x > 0? "Succes":"Failed";

switch($x){
    case 0:
        echo "0";
        break;
        echo "2";
        break;
        echo "3";
        break;
        echo "失敗";
        break;
        default:
}
echo "<br>";

// 比對範圍不建議用 switch 會用 if 來做比對
// 通常文字會比對文字 數字比對數字


// loops 迴圈
// 重複執行要做的事情

// for迴圈
for($i=0;$i<10;$i++){
    echo $i;
}
$i = 0 ;
echo "<br>";
// while迴圈
while($i < 10){
    echo $i;
    $i++;  //終止條件

}

// 上面迴圈常用兩個 老師大多用while迴圈 因為不用指定結束範圍
// foreach
// 針對陣列迴圈


// array陣列
$a = array(); // 宣告而已
$a[0] = "html";
$a[1] = "css";
$a[2] = "javascript";
$a[3] = "php";
$a[4] = "mysql";
// php沒辦法直接呼叫陣列
// 需要用 echo $a[0] 這種方式叫出

$b = array("a","b","c");

$c = ["a","b","c"];
echo "<br>";
// array  = 陣列
// index = 索引值

// 迭代
// echo count($c); //計算裡面有幾個值
// sort($c);// 遞增
// rsort($c);遞減 相反算起
// ksort($drink)//會依照key去排列
// asort($dirnk) // 會依照值去排列
// krsort($drink) // 會倒過來排列key
// arsort($drink) // 會倒過來排列值
// shuffle($drink); // 隨機整理
for($i=0;$i<count($c);$i++){
    echo $c[$i];
    // 用count來計算值就不需要自己計算一個陣列內有多少值
}
echo "<br>";

$drink = ["紅茶"=>20,"綠茶"=>20,"奶茶"=>30,"珍奶"=>50]; // 這個無法用for迴圈
foreach($drink as $drinks){
    echo "{$drinks}<br>";
}
echo "<br>";
//上面中文為 鑑key 後面數字為 值val
foreach($drink as $key=>$val){
    // echo $key; //這時會出現中文
    // echo $val; //此時會出現數字
    echo "{$key}:{$val}元<br>";
}
echo "<br>";
// in_array
var_dump(in_array("css",$a)); //可以看$a陣列是不是有這個值
if(in_array("css",$a)){
    echo "css存在";
}else{
    echo "css不存在";
}
echo "<br>";
// is_array 判斷是否是陣列
var_dump(is_array($a));
if(is_array($a)){
    echo "是個陣列";
}else{
    echo "不適陣列";
}

// array_push($a,"ASPNET");// 新增
// array_pop($a);// 除掉陣列最後一個
// array_unshift($a,"qqq");//新增一個值在陣列投
// array_shift($a);//移除陣列第一個
// $a[5] = "1234"; //直接增加值
// $a[count($a)];//可同上面效果

foreach($a as $item){
    echo "<p>{$item}</p>";
}

$name = "john";
$mail = "afsaf@gmail.com";
$phone = "0988855555";
$age = "30";

$result = compact("name","mail","phone","age"); //將變數組成陣列
var_dump($result); // 這裡不能用echo 因為陣列跑不出來藥用dump
echo "<br>";
//接著用 foreach來繞出陣列
foreach($result as $key => $val){
    echo "{$key}:{$val} <br>";
}


echo "<br>";
//implode 集中 陣列=>字串 陣列轉換成字串

$a_str = implode("__",$a);
echo $a_str;
// explode 爆炸 字串=>陣列  字串轉陣列
echo "<br>";
$str = "帥哥_就是我_很帥氣";
$str_array = explode("_",$str);
// 此時為陣列無法用echo直接用
var_dump($str_array);
echo "<br>";
foreach($str_array as $s){
    echo $s."<br>";
}
// 陣列轉資料很常用
// 選擇的東西大多都在陣列內 需要用字串來帶出ㄐ