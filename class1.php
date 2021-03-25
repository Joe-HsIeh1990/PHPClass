<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "hello";
    ?>
    <?php
    echo "<h1>4444</h1>" ?>
    <?php 
    $a = "h"; //字串
    $b = 100;//數值
    $c = true;//布林 boolean
    $d = 0.567;//float 浮點數    
        /*
            資料型態
            1.string 字串
            2.int 整數
            3.float 浮點數
            4.boolean 布林
        */
        // echo $c;

    // echo $c: 下面文法跟js的typeof 一樣可以檢視型別
    var_dump($d);

    // 字串
    $name = "john";
    // echo "Hello".$name;
    // echo "Hello {$name}"
    // echo "Hello $name" ;
    // echo 'Hello $name';

    define("x","我是常數"); //正常常數是儲存些部位變動的變數 並以大寫為主來分辨;
    // define("巨匠電腦","www.yahoo.com.tw");
    echo "<br>";
    echo x;



    // 算數運算子
    $x = 10;
    $y = 16;
    var_dump($x + $y);
    echo "<br>";
    var_dump($x / $y);


    // 比較運算子
    var_dump($x > $y);
    echo "<br>";
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);

    // 指定運算子
    $a = 10;  // 這邊意思指 10指定a



    ?>
    



</body>

</html>