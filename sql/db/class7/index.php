<?php
try {
    require_once('pdo.php');
    $sql = "SELECT * FROM custom";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(); // 把包裝起來的stmt 拆解取出內容


    // while($row = $stmt -> fetch()){
    //     // var_dump($row);
    //     echo $row["id"]."<br>";
    // } 測試是否能抓到迴圈
    // 46行解決方法 讓資料可以重複使用
    $row_array = array();
    while ($row = $stmt->fetch()) {
        $row_array[] = $row;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>title</h1>
                <a href="custom.php" class="btn btn-primary">新增資料</a>
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>姓名</th>
                        <th>電子郵件</th>
                        <th>電話</th>
                        <th>學歷</th>
                        <th>性別</th>
                        <th>技能</th>
                        <th></th>
                    </tr>
                    <!-- 注意 這邊將資料從檔案庫抽出來後 假設再抽一次會失敗 因為檔案已經被抽出來了 有的時候資料要重複使用的話該如何處理呢? -->
                    <!-- while迴圈大多用於直接抽取 -->
                    <!-- <?php while ($row = $stmt->fetch()) { ?>
                        <tr>
                            <td>
                                <?php echo $row["id"]; ?>
                            </td>
                            <td>
                                <a href="detail.php?id=<?php echo $row["id"] ?>"><?php echo $row["name"]; ?></a>
                            </td>
                            <td>
                                <?php echo $row["mail"]; ?>
                            </td>
                            <td>
                                <?php echo $row["phone"]; ?>
                            </td>
                            <td>
                                <?php echo $row["edu"]; ?>
                            </td>
                            <td>
                                <?php echo $row["gender"]; ?>
                            </td>
                            <td>
                                <?php echo $row["skill"]; ?>
                            </td>
                            <td>
                                return confirm('確認刪除嗎') 是js的語法
                                <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('確認刪除嗎')">刪除</a>
                                <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">修改</a>
                            </td>
                        </tr>
                    <?php } ?> -->

                    <!-- 46行處理方式 -->
                    <?php foreach($row_array as $row){?>
                        <tr>
                            <td>
                                <?php echo $row["id"]; ?>
                            </td>
                            <td>
                                <a href="detail.php?id=<?php echo $row["id"] ?>"><?php echo $row["name"]; ?></a>
                            </td>
                            <td>
                                <?php echo $row["mail"]; ?>
                            </td>
                            <td>
                                <?php echo $row["phone"]; ?>
                            </td>
                            <td>
                                <?php echo $row["edu"]; ?>
                            </td>
                            <td>
                                <?php echo $row["gender"]; ?>
                            </td>
                            <td>
                                <?php echo $row["skill"]; ?>
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('確認刪除嗎')">刪除</a>
                                <a href="edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">修改</a>
                            </td>
                        </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>