<?php
$current_dir = "image"; // 設定位置
$dir = opendir($current_dir); //打開路徑
?>

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
    <!-- multipart/form-data 解析檔案 -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img" id="">
        <input type="submit" value="檔案上傳">
    </form>
    <br>
    <br>
    <a href="?new=true">新增文字檔</a>
    <table>
        <?php while ($file = readdir($dir)) { ?>
            <tr>
                <td><a href="<?php echo "{$current_dir}/{$file}" ?>"><?php echo $file; ?></a></td>
                <td><a href="?del=<?php echo "{$current_dir}/{$file}"?>" onclick="retrun comfirm('確定刪除')">刪除</a></td>
            </tr>
        <?php } ?>
    </table>
    <?php 
    if(isset($_GET["del"])){
        unlink($_GET["del"]);  //unlink 為刪除
        header("location:index.php");
    }
    if(isset($_GET["new"])){
        $name = md5(uniqid());// 亂數
        touch("image/{$name}.txt");// 新增   文字檔 檔案一多就有問題 建議還是要進去資料庫
        header("location:index.php");
     
    }
    ?>
</body>

</html>