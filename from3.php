<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <form action="response.php" method="post">
        <div>
            <label for=""></label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for=""></label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">男</label>
            <input type="radio" name="gender" value="男" id="">
            <label for="">女</label>
            <input type="radio" name="gender" value="女" id="">
            <label for="">不透露</label>
            <input type="radio" name="gender" value="不夠露"  id="">
        </div>
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中">高中</option>
                <option value="大學">大學</option>
            </select>
        </div>
        <div>
            <!-- 多選需要用陣列 -->
            <label for="">平面設計</label>
            <input type="checkbox" name="hobby[]" value="平面設計" id="">
            <label for="">3D設計</label>
            <input type="checkbox" name="hobby[]" value="3D設計" id="">
            <label for="">網頁設計</label>
            <input type="checkbox" name="hobby[]" value="網頁設計" id="">
        </div>
        <div>
            <label for=""></label>
            <input type="submit" value="送出">
        </div>
    </form>
    <!-- <form action="response.php" method="get">
        <div>
        <label for=""></label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <input type="email" name="email">
        </div>
        <div>
            <input type="submit" value="送出">
        </div>
    </form> -->
</body>

</html>