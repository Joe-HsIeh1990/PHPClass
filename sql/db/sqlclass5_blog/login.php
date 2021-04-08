<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form action="auth.php" method="post">
                <div class="form-group">
                    <label for="user">帳號</label>
                    <input type="text" name="user" id="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pw">帳號</label>
                    <input type="password" name="pw" id="pw" class="form-control">
                </div>
                <input type="submit" value="登入" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>