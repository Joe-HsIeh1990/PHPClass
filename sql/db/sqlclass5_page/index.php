<?php
try {
    include('pdo.php');
    // $sql = "SELECT * FROM blog LIMIT 0,3";//顯示幾筆資料LIMIT 0 為第一筆資料開始  3 為共3筆
    $sql = "SELECT * FROM blog";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $total = $stmt->rowCount();
    $per = 3; //定義每一頁幾筆
    $pages = ceil($total / $per);
    // ceil 無條件進位 round四捨誤入 floor無條件退位
    // $page = 1;
    if (!isset($_GET["page"])) {
        $page = 1; //當前頁面
    } else {
        $page = $_GET["page"]; //如果不適就求出第幾頁
    }
    $start = ($page - 1) * $per;
    $sql = "SELECT * FROM  blog LIMIT {$start},{$per}";
    $stmt = $pdo->prepare($sql);
    $rows = array();
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $rows[] = $row;
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    .active{
        font-size: 1.5em;
    }
    </style>
</head>

<body>
    共<?php echo $total ?>
    <div>
        目前頁數<?php echo $page ?>
    </div>
    <ul>
        <?php foreach ($rows as $r) { ?>
            <li><?php echo $r["title"] ?></li>

        <?php } ?>
    </ul>
    <!-- $_SERVER["PHP_SELF"]  PHP_SELF指向當前頁面 $_SERVER為超級全域變數-->
    <!-- 所以將原本index.php改成 $_SERVER["PHP_SELF"] 後續可將它作為模組化-->
    <?php if ($page != 1) { ?>
        <a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=1">第一頁</a>
        <a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php echo $page - 1; ?>">上一頁</a>
    <?php }  ?>
    <?php for ($i = 0; $i < $pages; $i++) {
        $p = $i + 1;
        // echo "<a href='index.php?page={$p}'>{$p}</a>";
        if($p == $page){
            echo "<span class='active' >{$p}</span>";
        }else{
            echo "<a href='{$_SERVER["PHP_SELF"]}?page={$p}'>{$p}</a>";
        }
    }
    ?>
    <?php if ($page != $pages) { ?>
        <a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php echo $page + 1; ?>">下一頁</a>
        <a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php echo $pages ; ?>">最末頁</a>
    <?php } ?>

</body>

</html>