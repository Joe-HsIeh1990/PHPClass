<?php
// 取得當前資料單筆資料
// require_once("sqlclass3_pro.php");
// $id = $_GET["id"];
// $sql = "SELECT * FROM students WHERE id= " . $id;  // 用 $_GET["id"]; 取得特定ID
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

try{
    include("sqlclass3_pdo.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE id = ?";
    $stmt = $pdo ->prepare($sql);
    $stmt -> execute([$id]);
    $row = $stmt ->fetch();
}catch(PDOException $e){
    echo $e -> getMessage();
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
                <form action="sqlclass3_update.php" method="post">
                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $row["name"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="text" id="mail" name="mail" class="form-control" value="<?php echo $row["mail"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">電話</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="<?php echo $row["phone"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="edu">學歷</label>
                        <select name="edu" class="form-control">
                            <!-- 下列為判定方法 單選用三元 假設有資料的話會顯示該選項 -->
                            <option value="">請選擇</option> 
                            <option value="國小" <?php echo $row["edu"]=="國小"?"selected":"";  ?>>國小</option>
                            <option value="國中" <?php echo $row["edu"]=="國中"?"selected":"";  ?>>國中</option>
                            <option value="高中" <?php echo $row["edu"]=="高中"?"selected":"";  ?>>高中</option>
                            <option value="大學" <?php echo $row["edu"]=="大學"?"selected":"";  ?>>大學</option>
                            <option value="研究所以上" <?php echo $row["edu"]=="研究所以上"?"selected":""; ?>>研究所以上</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div>性別</div>
                         <!-- 下列為判定方法 單選用三元 假設有資料的話會顯示該選項-->
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="男性" <?php echo $row["gender"]=="男性"?"checked":""; ?>>
                            <label for="male">男性</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="女性" <?php echo $row["gender"]=="女性"?"checked":""; ?>>
                            <label for="female">女性</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- 因為已經組合成字串 所以要把它炸成陣列 在下用in_array判斷有沒有該項目有的話會自動打勾-->
                        <div>技能</div>
                        <?php $skill = explode(",",$row["skill"]);?>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="graphic" value="平面設計" <?php echo in_array("平面設計",$skill)?"checked":""; ?>>
                            <label for="graphic" class="form-check-label">平面設計</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="web" value="網頁設計" <?php echo in_array("網頁設計",$skill)?"checked":""; ?>>
                            <label for="web" class="form-check-label">網頁設計</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="3dmax" value="3d設計" <?php echo in_array("3d設計",$skill)?"checked":""; ?>>
                            <label for="3dmax" class="form-check-label">3d設計</label>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                    <!-- 上面hidden 是為了修改單筆資料而設定 -->
                    <input type="submit" class="btn btn-primary" value="修改">
                    <!-- <input type="button" class="btn btn-danger" value="取消" onclick="history.back()"> -->
                    <input type="button" class="btn btn-danger" value="取消" onclick="location.href='sqlclass3.php'">
                </form>
            </div>
        </div>
    </div>
</body>

</html>