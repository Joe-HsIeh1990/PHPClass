<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <form action="store_post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <lable for="title">文章標題</lable>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <lable for="title">內容</lable>
                    <textarea name="content" id="content" class="form-control" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <select name="cate_id" id="cate_id" class="form-control">
                        <?php foreach ($rows_c as $row_c) { ?>
                            <option value="<?php echo $row_c["id"] ?>"><?php echo $row_c["title"] ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cover">封面圖片</label>
                    <input type="file" name="cover" id="cover">
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
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