<?php
require_once("backend/pdo.php");
include("backend/function/posts.php");
$rows = showAllCatePost($_GET["id"]);
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <?php foreach ($rows as $row) { ?>
            <div class="col-10">
                <h3 class="text-primary"><?php echo $row["title"]; ?></h3>
                <div>
                    分類:<?php echo $row["c_title"]; ?>
                </div>
                <div class="content">
                    <?php echo mb_substr($row["content"], 0, 60, "utf-8"); ?>
                </div>
                <div>
                    <a href="post.php?id=<?php echo $row["id"]; ?>" class="text-right">繼續閱讀</a>
                    發布時間:<?php echo $row["create_at"]; ?>
                </div>
                <hr>
            </div>
        <?php } ?>
    </div>
</div>
<?php include("template/footer.php"); ?>