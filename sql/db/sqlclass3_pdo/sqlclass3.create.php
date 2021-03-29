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
                <form action="sqlclass3_store.php" method="post">
                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input type="text" id="mail" name="mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">電話</label>
                        <input type="text" id="phone" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="edu">學歷</label>
                        <select name="edu" class="form-control">
                            <option value="國小">國小</option>
                            <option value="國中">國中</option>
                            <option value="高中">高中</option>
                            <option value="大學">大學</option>
                            <option value="大學">研究所以上</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div>性別</div>
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="男性">
                            <label for="male" class="form-check-label">男性</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="女性">
                            <label for="female" class="form-check-label">女性</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>技能</div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="graphic" value="平面設計">
                            <label for="graphic" class="form-check-label">平面設計</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="web" value="網頁設定">
                            <label for="web" class="form-check-label">網頁設計</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="max" value="3d設計">
                            <label for="max" class="form-check-label">3d設計</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="新增">
                    <!-- <input type="button" class="btn btn-danger" value="取消" onclick="history.back()"> -->
                    <input type="button" class="btn btn-danger" value="取消" onclick="location.href='sqlclass2.php'">
                </form>
            </div>
        </div>
    </div>
</body>

</html>