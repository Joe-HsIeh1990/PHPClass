<?php
// $db_host = "localhost";
// $db_user = "admin";
// $db_pw = "admin";
// $db_name = "phpclass";
// $conn = @mysqli_connect($db_host, $db_user, $db_pw, $db_name) or die("資料庫連線錯誤");
// //設定編碼 讓中文正常出現
// mysqli_query($conn, "SET NAMES utf8");

// 模組化 將連線資料放進 sqlclass2_conn.php 後再 require_one("sqlclass2_conn.php")
require_once("sqlclass2_conn.php");




$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
// var_dump($result); //$result 是個很大的物件

//---------------  下列方法為展示寫法 正常會用迴圈while -------------
// $row = mysqli_fetch_assoc($result);//用此方法 將物件轉成陣列
// var_dump($row);//此時檢視微陣列 但只會呈現第一筆資料 下面再詞序var_dump會取得第二筆資料
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// var_dump($row);
// echo "<br>";
// $row = mysqli_fetch_assoc($result);
// var_dump($row);

// ----- 迴圈取得資料 也會取得與上列相同的內容---------
// while ($row = mysqli_fetch_assoc($result)) { // mysqli_fetch_assoc使用這個語法索引值就是資料表的名稱
//     // var_dump($row);                       mysqli_fetch_array使用這個的話索引值就會是正常的陣列 如果資料大array會變慢很多
//     //                                       mysqli_fetch_row使用這個的話就得將$row[0]數字 後續處理會比較麻煩故少用
//     echo "<br>";
//     echo $row["id"];
//     echo $row["name"];
//     echo $row["mail"];
//     echo $row["phone"];
//     // 正常部會寫在這裡而是body內
// }

// 新增語法
// 實際上要寫的話 INSERT INTO students(name,mail,phone)VALUES("王曉明","ASFDSDAF@gmail.com","0980481117") //id不用
// 接下來在sqlclass2_store_student.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=r, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="sqlclass2_create_student.php" class="btn btn-primary">
                    新增資料
                </a>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>姓名</th>
                        <th>Mail</th>
                        <th>電話</th>
                        <th>教育程度</th>
                        <th>性別</th>
                        <th>專長</th>
                    </tr>
                    <?php
                    //   第一種寫法
                    // while ($row = mysqli_fetch_assoc($result)) {
                    //     echo "<tr>";
                    //     echo "<td>".$row["id"]."</td>";
                    //     echo "<td>". $row["name"]."</td>";
                    //     echo "<td>". $row["mail"]."</td>";
                    //     echo "<td>". $row["phone"]."</td>";
                    //     echo "</tr>";
                    // }
                    ?>
                    <!-- 第二種寫法 老師常用 -->
                    <?php while ($row = mysqli_fetch_assoc($result)) {  ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td>
                                <a href="sqlclass2_detail.php?id=<?php echo $row["id"]?>">
                                    <?php echo $row["name"]; ?>
                                </a>
                            </td>
                            <td><?php echo $row["mail"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["edu"]; ?></td>
                            <td><?php echo $row["gender"]; ?></td>
                            <td><?php echo $row["skill"]; ?></td>
                            <td>
                                <a href="sqlclass2_delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="return confirm('確認刪除嗎?')">刪除</a>
                                <a href="sqlclass2_edit.php?id=<?php echo $row["id"] ?>" class="btn btn-dark">編輯</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>