<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row justify-content">
        <div class="col-8">
            <div>
                <h2>會員註冊</h2>
            </div>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="user">帳號</label>
                    <input type="text" name="user" id="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pw">密碼</label>
                    <input type="text" name="pw" id="pw" class="form-control">
                </div>
                <input type="submit" value="註冊">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>