<?php
date_default_timezone_set("Asia/Taipei");
function auth($user, $pw)
{
    try {
        global $pdo;
        session_start();
        $sql = "SELECT * FROM members WHERE user=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch();
        if ($row["pw"] == $pw) {
            $_SESSION["USER"] = $user;
            $_SESSION["ID"] = $row["id"];
            $_SESSION["LEVEL"] = $row["level"]; // 權限
            header("location:index.php");
        } else {
            echo "帳號密碼錯誤";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function storeMember($user, $pw)
{
    try {
        global $pdo;
        // $create_at = date("Y-m-d H:i:s");
        // $sql = "INSERT INTO members(user,pw,create_at,update_at)VALUE(?,?,?,?)";
        // $stmt = $pdo->prepare($sql);
        // $stmt -> execute([$user,$pw,$create_at,$create_at]);
        // include("pdo.php");
        $create_at = date("Y-m-d H:i:s");
        $sql_check = "SELECT * FROM members WHERE user = ?";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->execute([$user]);  //假如是1的話 就是資料表中有相同的內容
        if ($stmt_check->rowCount() > 0) {
            echo "<script>alert('帳號重複 將會轉跳至註冊頁面')</script>";
            echo "<script>window.location.href='signup.php'</script>";
        } else {
            echo "帳號可使用";
            $sql = "INSERT INTO members(user,pw,create_at,update_at)VALUES(?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user, $pw, $create_at, $create_at]);
            echo "<script>alert('申請成功 將會轉跳至首頁')</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function showAllmembers()
{
    try {

        global $pdo;
        $sql = "SELECT * FROM members";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = array();
        while ($row  = $stmt->fetch()) {
            $rows[] = $row;
        }
        return $rows;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function changeLevel($level, $id)
{
    try {
        global $pdo;
        $sql = "UPDATE members SET level =? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $new_level = $level == 0 ? 1 : 0;
        $stmt->execute([$new_level, $id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
