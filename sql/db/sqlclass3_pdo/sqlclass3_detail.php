<?php
try {
    include("sqlclass3_pdo.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo $row["name"] ?></h2>
                <ul>
                    <li>Mail: <?php echo $row["mail"]; ?></li>
                    <li>電話: <?php echo $row["phone"]; ?></li>
                    <li>教育程度: <?php echo $row["edu"]; ?></li>
                    <li>性別: <?php echo $row["gender"]; ?></li>
                    <li>專長: <?php echo $row["skill"]; ?></li>
                    <a href="#" class="btn btn-primary" onclick="history.back()">返回上一頁</a>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>