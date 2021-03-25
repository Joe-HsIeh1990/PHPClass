<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="store_custom.php" method="post">
                    <div class="form-group">
                        <label for="name">姓名</label>
                        <input type="text" name="name" id="naem" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mail">信箱</label>
                        <input type="text" name="mail" id="mail" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">電話</label>
                        <input type="text" name="phone" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""></label>
                        <select name="" id="">
                            <option value="">請選擇</option>
                            <option value="國小">國小</option>
                            <option value="國中">國中</option>
                            <option value="高中">高中</option>
                            <option value="大專院校">大專院校</option>
                            <option value="研究所以上">研究所以上</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h2>性別</h2>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="male" value="男性">
                            <label for="male">男性</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender" id="female" value="女性">
                            <label for="female">女性</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <h2>技能</h2>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="graphic" value="平面設計">
                            <label for="graphic">平面設計</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="web" value="網頁設計">
                            <label for="web">網頁設計</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skill[]" id="threed" value="3D設計">
                            <label for="threed">3D設計</label>
                        </div>
                    
                    </div>
                    <input type="submit" value="新增" class="btn btn-primary" onclick="alert('test')">
                    <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
                </form>
            </div>
        </div>
    </div>

</body>

</html>