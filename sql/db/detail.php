<?php
require_once("conn.php");
$id = $_GET["id"];
$sql = "SELECT * FROM custom WHERE id = ".$id;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

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
                <h2><?php echo $row["name"]; ?></h2>
                <ul>
                    <li>Mail: <?php echo $row["mail"]?></li>
                    <li>電話: <?php echo $row["phone"]?></li>
                </ul>
                <a href="#" class="btn btn-primary" onclick="history.back()">返回</a>
            </div>
        </div>
    </div>
</body>
</html>