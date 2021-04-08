<?php
require_once("backend/pdo.php");
include("backend/function/members_auth.php");

$user = $_POST["user"];
$pw = $_POST["pw"];
auth($user,$pw);

