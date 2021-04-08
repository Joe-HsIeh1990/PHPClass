<?php
require_once("backend/pdo.php");
include("backend/function/posts.php");
$row = show($_GET["id"], "blog");
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <form action="updatePost.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <lable for="title">文章內容</lable>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $row["title"]; ?>">
                </div>
                <div class="form-group">
                    <lable for="title">內容</lable>
                    <textarea name="content" id="content" class="form-control" rows="10"><?php echo $row["content"]; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="cate_id">分類</label>
                    <select name="cate_id" id="cate_id" class="form-control">
                        <?php foreach ($rows_c as $row_c) { ?>
                            <option value="<?php echo $row_c["id"]; ?>" <?php echo $row_c["id"] == $row["cate_id"] ? "selected" : "" ?>><?php echo $row_c["title"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <?php if ($row["cover"] == "") { ?>
                        <input type="file" name="cover">
                    <?php } else { ?>
                        <img src="thumbs/<?php echo $row["cover"]; ?>" width="200">
                        <a href="del_img.php?id=<?php echo $row["id"]; ?>&cover=<?php echo $row["cover"]; ?>" class="btn btn-danger  btn-sm">刪除圖片</a>
                        <input type="hidden" name="cover" value="<?php echo $row["cover"]; ?>">
                    <?php } ?>
                </div>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" value="修改文章" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-dark" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>
<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content');
</script>