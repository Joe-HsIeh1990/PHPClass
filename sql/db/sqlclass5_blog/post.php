<?php
require_once("backend/pdo.php");
include("backend/function/posts.php");
$row = show($_GET["id"], "blog");
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 py-3">
            <h2><?php echo $row["title"]; ?></h2>
            <div>
                分類:<?php echo $row["c_title"]; ?>
            </div>
            <div>
                <?php if ($row["cover"] == "") {
                    echo "<img src='https://picsum.photos/id/" . rand(1, 100) . "/800/400' class='w-100'> ";
                } else {
                    echo "<img src='images/{$row["cover"]}' class='w-100'> ";
                }
                ?>
            </div>
            <div class="content py-5">
                <?php echo $row["content"]; ?>
            </div>
            <div>
                作者:　<?php echo $row["user"]; ?>
            </div>
            <div>建立時間: <?php echo $row["create_at"] ?></div>
            <div>更新時間: <?php echo $row["update_at"]; ?></div>
            <a href="index.php" class="btn btn-dark btn-sm">回首頁</a>
            <!-- 設定只有作者能刪除修改 -->
            <?php if ($_SESSION) { ?>
                <?php if ($row["user_id"] == $_SESSION["ID"]) { ?>
                    <a href="edit_post.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary btn-sm">修改文章</a>
                    <a href="delete_post.php?id=<?php echo $row["id"]; ?>&cover=<?php echo $row["cover"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('確定刪除')">刪除</a>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>