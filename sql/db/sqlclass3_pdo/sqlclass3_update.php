<?php
try {
    include("sqlclass3_pdo.php");
    $name = $_POST["name"];
    $mail = $_POST["mail"];
    $phone = $_POST["phone"];
    $id = $_POST["id"];
    $edu = $_POST["edu"];
    $gender = $_POST["gender"];
    $skills = implode(",", $_POST["skill"]);
    $sql = "UPDATE 
                students 
            SET 
                name = ?,
                phone = ?,
                mail = ?,
                edu = ?,
                gender = ?,
                skill = ? 
            WHERE 
                id = ? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $mail, $phone, $edu, $gender, $skills, $id]);

    header("location:sqlclass3.php");
} catch (PDOException $e) {
    echo $e->getMessage();
}
