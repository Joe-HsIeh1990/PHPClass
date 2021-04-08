<?php
date_default_timezone_set("Asia/Taipei");
try {
    include("pdo.php");
    $user = $_POST["user"];
    $pw = $_POST["pw"];
    $create_at = date("Y-m-d H:i:s");
    $sql_check = "SELECT * FROM members WHERE user = ?";
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute([$user]);
    $row_count = $stmt_check->rowCount();  //假如是1的話 就是資料表中有相同的內容
    if ($stmt_check->rowCount() > 0) {
        echo  "帳號已被使用";
    } else {
        echo "帳號可使用";
        $sql = "INSERT INTO members(user,pw,create_at,update_at)VALUES(?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user, $pw, $create_at, $create_at]);
        header("location:index.php");
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
