<?php
require_once("backend/pdo.php");
include("backend/function/posts.php");
delete($_GET["id"],$_GET["cover"]);
header("location:index.php");