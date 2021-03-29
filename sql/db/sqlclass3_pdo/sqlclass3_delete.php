<?php 
// try {
//     include("sqlclass3_pdo.php");
//     $id = $_GET["id"];
//     $sql = "DELETE FROM students WHERE id = ?";
//     $stmt = $pdo -> prepare($sql);
//     $stmt -> execute([$id]);
//     header("location:sqlclass3.php");
// }catch(PDOException $e){
//     echo $e -> getMessage();
// }


try {
    include("sqlclass3_pdo.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM students WHERE id = :id";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindParam(":id",$id);
    $stmt -> execute();
    header("location:sqlclass3.php");
}catch(PDOException $e){
    echo $e -> getMessage();
}