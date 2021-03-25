<!-- 如何接收資料 -->
<!-- 接收一定要大寫 表單的name值 -->
<!-- 正常不會用下面方式讀取　會先定義成變數 （第二航-->

<?php 
      // $user = $_POST["user"];
      // $email = $_POST["email"];
      // $edu =$_POST["edu"];
      // echo $email;
      // echo $user;
      // echo $edu;
      if($_POST){
            echo $_POST["user"];
            echo $_POST["email"];
            echo $_POST["edu"];
      }
      echo "<br>";
      if($_GET){
            echo $_GET["user"];
            echo $_GET["email"];
            echo $_GET["edu"];
      }
?>


<!-- 
    反之 可以用 GET 
    用GET後 會在路由器上 顯示你的 內容
    正常GET 不會用在表單
    GET 是URL參數 所以會顯現在 路由上

    個人隱私資料通常都是用post
    連結通常用get 搜尋的時候大多用get


    
 -->


<!-- 之後遇到$＿　就是超級全域變數 -->