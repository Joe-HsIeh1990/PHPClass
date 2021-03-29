<?php
    include("function.php");
    $row_array = showAll("students");
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