<?php
// try{
//    require_once("pdo.php");
//    $name = $_POST["name"];
//    $phone = $_POST["phone"];
//    $mail = $_POST["mail"];
//    $edu = $_POST["edu"];
//    $gender = $_POST["gender"];
//    $skill = implode(",",$_PHOST["skill"]);

//    $sql = "INSERT INTO custom(name,mail,phone,edu,gender,skill)VALUES(?,?,?,?,?,?)";// 這裡不要將變數帶入 以棉遭受攻擊 改用問號來代替
//    $stmt = $pdo->prepare($sql);
//    $stmt->execute([$name,$mail,$edu,$gender,$skill]);

// }catch(PDOException $e){
//     echo $e->getMessage();
// }
//上面為第一種作法

try{
    require_once("pdo.php");
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $mail = $_POST["mail"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $skill = implode(",",$_PHOST["skill"]);
 
    $sql = "INSERT INTO custom(name,mail,phone,edu,gender,skill)VALUES(:name,:mail,:phone,:edu,:gender,:skill)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$mail,$edu,$gender,$skill]);
    $stmt->bindParam(":name",$name);
    $stmt->bindParam(":mail",$mail);
    $stmt->bindParam(":phone",$phone);
    $stmt->bindParam(":edu",$edu);
    $stmt->bindParam(":gender",$gender);
    $stmt->bindParam(":skill",$skill);
 
 }catch(PDOException $e){
     echo $e->getMessage();
 }
//  上面第二種做法比較少人去使用
