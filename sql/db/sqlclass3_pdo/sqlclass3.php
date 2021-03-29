<?php
try {
    // 把try 拿掉就無法做例外處理
    include('sqlclass3_pdo.php'); // 這裡可以用include
    $sql = "SELECT * FROM students";
    //預備 陳述式
    $stmt = $pdo->prepare($sql); //透過pdo保護  prepare為預備陳述式 包裝$sql 達成保護
    $row = $stmt->execute(); //把包裝起來的stmt產出
    // $row = $stmt -> execute(); //正常會呈現布林直true 
    // var_dump($row); 

    $row_array = array(); //定義一個空陣列
    while ($rows = $stmt->fetch()) {
        // var_dump($row); // 呈現陣列資料
        // 這邊無法抽出
        // echo $row["name"] . "<br>";
        // echo $row["mail"] . "<br>";
        // echo $row["phone"] . "<br>";
        // echo $row["edu"] . "<br>";
        // echo $row["gender"] . "<br>";
        // echo $row["skill"] . "<br>";

        // 可抽取方式
        $row_array[] = $rows; //存在空陣列 當需要時候就可以重複抽取
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
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
                <h1>學生資料</h1>
                <a href="sqlclass3.create.php">新增資料</a>
                <table class="table">
                    <!-- 上面已使用過while 迴圈所以這邊不能用 -->
                    <?php foreach ($row_array as $row) { ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td>
                                <a href="sqlclass3_detail.php?id=<?php echo $row["id"] ?>">
                                    <?php echo $row["name"]; ?>
                                </a>
                            </td>
                            <td><?php echo $row["mail"]; ?></td>
                            <td><?php echo $row["phone"]; ?></td>
                            <td><?php echo $row["edu"]; ?></td>
                            <td><?php echo $row["gender"]; ?></td>
                            <td><?php echo $row["skill"]; ?></td>
                            <td>
                                <a href="sqlclass3_delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="return confirm('確認刪除嗎?')">刪除</a>
                                <a href="sqlclass3_edit.php?id=<?php echo $row["id"] ?>" class="btn btn-dark">編輯</a>
                            </td>
                        <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>