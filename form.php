<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 傳遞資料 -->
    <!-- method 取得內容或遞出 可用post get request method也稱為表單變數-->
    <!-- action 會給指定頁面的Php檔處理 -->
    <form action="form2.php" method="post">
        <select name="edu">
            <option value="國小">國小</option>
            <option value="國中">國中</option>
            <option value="高中">高中</option>
            <option value="大學">大學</option>
        </select>
        <!-- id 是給 js 用  name是給後端用 -->
        <input type="text" name="user" id="user">
        <input type="email" name="email" id="email">
        <input type="submit" value="送出">
    </form>
    <form action="form2.php" method="get">
        <select name="edu">
            <option value="國小">國小</option>
            <option value="國中">國中</option>
            <option value="高中">高中</option>
            <option value="大學">大學</option>
        </select>
        <!-- id 是給 js 用  name是給後端用 -->
        <input type="text" name="user" id="user">
        <input type="email" name="email" id="email">
        <input type="submit" value="送出">
    </form>
</body>

</html>