<?php
function showAll($table)
{
    try {
        include('sqlclass3_pdo.php');
        $sql = "SELECT * FROM {$table}";

        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row_array = array();
        while ($rows = $stmt->fetch()) {
            $row_array[] = $rows;
        }
        return $row_array; //必須回傳直 才會在其他頁收到$row_array
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function show($id)
{
    try {
        include("sqlclass3_pdo.php");
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function store($name, $mail, $phone, $edu, $gender, $skills)
{
    try {
        include("sqlclass3_pdo.php");
        $sql = "INSERT INTO students(name,mail,phone,edu,gender,skill)VALUE(?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $mail, $phone, $edu, $gender, $skills]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function delete($id)
{
    try {
        include("sqlclass3_pdo.php");
        $sql = "DELETE FROM students WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function update($name, $mail, $phone, $edu, $gender, $skills, $id)
{
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
}
