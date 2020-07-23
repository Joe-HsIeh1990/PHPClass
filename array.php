<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // $a = ["js","jq","jp"]; // 跟js 一樣
    // echo $a[2];
    // 陣列方法 盡量在命名後面要用s負數 樣成習慣
    // $fruits = ["apple","orange","pineapple"];
    // $fruits_num = count($fruits); // count 計算陣列的索引直 for迴圈用

    // foreach($fruits as $fruit){
    //     // 這邊foreach 會全盤抓出
    // }

    // for($i = 0;$i <10;$i++){
    //     echo $i;
    // }

    // for($i=0;$i<$count($fruits);$i++){
    //     echo $fruits[$i]."<br>";
    //     // 跟js不同的是要先去 定義變數來計算 索引直 再放入for會圈
    // }
    // 正常會用foreach

    // $members = ["john"=>"20","Mary"=>"30",]; //索引直修改 此時再去echo john 就會出現20 johon會試等於key

    // foreach ($members as $name=>$age){
    //     echo $name.$age; //此時會抓出 john跟20等等
    // }
    $a = ["js","jq","jp"];

    // sort ($fruits)  會依大小遞增
    // rsort()  慧根一班的顛倒 
    // 當索引直自訂時候 會出錯 
    // 所以需要用ksort 去做
    // 假設藥用值去排列 需要用 asort
    // shuffle() 會隨機排列


    // in_array 
    // var_dump(in_array("js",$a)); //判斷 物件是否在陣列內

    // // is_array
    // var_dump(is_array($a)); // 判斷是否是陣列

    // // array_push
    // array_push($a,"Asp.net");
    // // array_pop
    // array_pop($a); //移除最後一個
    // // array_unshift
    // array_unshift($a,"qqq"); // 增加一個值在頭
    // // array_shift
    // array_shift($a); //移除

    //另種增加 先找到原生的陣列
    // $a[5] = "1234" //這樣也是增加 

    // 如何將變數組合成陣列
    // $name = "joe";
    // $mail = "Asd@gmail.com";
    // $phone = "06210616";
    // $result = compact("name","mail","phone"); //組合陣列
    // // var_dump($result); // 此時上會組合起一個陣列
    // foreach ($result as $key => $val){
    //     echo "{$key} : {$val} <br>" ;
    // }




    // implode 集中 陣列-> 字串
    $a = ["js","jq","jp"];
    $b = implode("__",$a); //轉成字串 正常前面的符號會是 __ 或者是 ,
    echo $b;
    // 此時呈現在葉面上 會是 js - jq - jp
    // 在表單處理 多為資料的時候 用上述方法

    // expload 爆炸 字串 --> 陣列
    $str = "內褲__內衣__你好";
    $str_array = explode("__",$str);
    // var_dump($str_array);

    foreach ($str__array as $s){
        echo $s."br";

    }
    // 當存進資料庫時候 要轉換成字串
    // 要取ˋ初時再去轉成陣列

    ?>
</body>
</html>