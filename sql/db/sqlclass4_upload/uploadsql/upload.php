<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        td,
        tr {
            border: 1px solid #666;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <?php
        $files = glob("images/*.png");
        $file_num = count($files);
        if ($file_num == 0) {
            echo "目前沒有圖片";
        } else {
            echo "目前共有{$file_num}個檔案";
        }
        foreach ($files as $file) {
            echo "<br>"; ?>
            <tr>
                <td><a href="<?php echo $file ?>"><img src="<?php echo $file ?>" height="100" alt=""></a></td>
                <td><a href="?del=<?php echo $file ?>" onclick="retrun comfirm('確定刪除')">刪除</a></td>
            </tr>
        <?php } ?>
    </table>
    <?php
    if (isset($_GET["del"])) {
        unlink($_GET["del"]);  //unlink 為刪除 刪除資料表很麻煩要全面改寫
        header("location:index2.php");
    }
    ?>


</body>

</html>