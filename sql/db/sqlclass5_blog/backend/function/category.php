<?php
date_default_timezone_set("Asia/Taipei");
function showAllCate()
{
    try {
        global $pdo;
        // $sql = "SELECT * FROM {$table}";
        $sql = "SELECT * FROM category ORDER BY id ASC"; // ORDER BY排序的資料表像是ID 或者是時間  DES遞減ASC遞增
        // 
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $row_array = array();
        while ($rows = $stmt->fetch()) {
            $row_array[] = $rows;
        }
        return $row_array;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
// function show($id, $table)
// {
//     try {
//         global $pdo;
//         $sql = "SELECT * FROM $table WHERE id = ?";
//         $stmt = $pdo->prepare($sql);
//         $stmt->execute([$id]);
//         $row = $stmt->fetch();
//         return $row;
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
// }

function storeCate($title, $slug)
{
    try {
        global $pdo; 
        $sql = "INSERT INTO category(title,slug,create_at)VALUE(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $create_at = date("Y-m-d H:i:s");
        $stmt->execute([$title,$slug,$create_at]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
function deleteCate($id)
{
    try {
        global $pdo;
        $sql = "DELETE FROM category WHERE id =?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

// function update($title, $content, $id)
// {
//     try {
//         global $pdo;
//         $update_at = date("Y-m-d H:i:s");
//         $sql = "UPDATE 
//                     blog
//                 SET 
//                     title = ?,
//                     content = ?,
//                     update_at = ? 
//                 WHERE 
//                     id = ? ";
//         $stmt = $pdo->prepare($sql);
//         $stmt->execute([$title, $content, $update_at, $id]);
//     } catch (PDOException $e) {
//         echo $e->getMessage();
//     }
// }
