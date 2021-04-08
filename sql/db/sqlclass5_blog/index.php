<?php
require_once("backend/pdo.php"); //因為使用global 所以這邊要使用這個路徑
include("backend/function/posts.php");
$rows = showAllPages(4);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <?php foreach ($rows as $row) { ?>
            <div class="col-10">
                <h3 class="text-primary"><?php echo $row["title"]; ?></h3>
                <div>
                    <?php if ($row["cover"] == "") {
                        echo "<img src='https://picsum.photos/id/" . rand(1, 100) . "/800/400' class='w-100'> ";
                    } else {
                        echo "<img src='thumbs/{$row["cover"]}' class='w-100'> ";
                    }
                    ?>
                </div>
                <div>
                    分類:<?php echo $row["c_title"]; ?>
                </div>
                <div class="content">
                    <!-- 這裡的mb_substr在檢視下會包含程式碼 -->
                    <!-- 用strip_tags來刪除多餘的html標籤 -->
                    <?php echo mb_substr(strip_tags($row["content"]), 0, 60, "utf-8"); ?>
                </div>
                <div>
                    作者: <?php echo $row["user"]; ?>
                </div>
                <div>
                    <a href="post.php?id=<?php echo $row["id"]; ?>" class="text-right">繼續閱讀</a>
                    發布時間:<?php echo $row["create_at"]; ?>
                </div>
                <hr>
            </div>
        <?php } ?>
        <div class="col-8">
            <?php pages(4) ?>
        </div>

    </div>
</div>
<?php include("template/footer.php"); ?>