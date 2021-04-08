<?php
require_once("backend/pdo.php");
$id = $_GET["id"];
$cover = $_GET["cover"];

unlink("images/{$cover}");
unlink("thumbs/{$cover}");

$sql = "UPDATE blog SET cover=? WHERE id=?";
$stmt = $pdo->prepare($sql);
$stmt ->execute(['',$id]);//空號是因為上面我們是把cover清空
header("location:edit_post.php?id={$id}");