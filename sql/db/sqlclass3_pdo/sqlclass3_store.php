<?php
// 第一種作法
try {
    include("sqlclass3_pdo.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $skills = implode(",", $_POST["skill"]);

    $sql = "INSERT INTO students(name,mail,phone,edu,gender,skill)VALUE(?,?,?,?,?,?)"; //正常不帶變數當有人很熟資料 會怕有串改資料
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $mail, $phone, $edu, $gender, $skills]); //對應上面
    header("location:sqlclass3.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}


// 第二種寫法 但大多情況下都是血地一種寫法
// try {
//     include("sqlclass3_pdo.php");
//     $name = $_POST["name"];
//     $mail = $_POST["mail"];
//     $phone = $_POST["phone"];
//     $edu = $_POST["edu"];
//     $gender = $_POST["gender"];
//     $skills = implode(",", $_POST["skill"]);

//     $sql = "INSERT INTO students(name,mail,phone,edu,gender,skill)VALUE(:name,:mail,:phone,:edu,:gender,:skill)"; //正常不帶變數當有人很熟資料 會怕有串改資料
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(":name", $name); //用bindParam綁定
//     $stmt->bindParam(":mail", $mail);
//     $stmt->bindParam(":phone", $phone);
//     $stmt->bindParam(":edu", $edu);
//     $stmt->bindParam(":gender", $gender);
//     $stmt->bindParam(":skill", $skills);
//     $stmt->execute();
//     header("location:sqlclass3.php");
// } catch (PDOException $e) {
//     echo $e->getMessage();
// }
