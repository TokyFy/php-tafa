<?php
declare(strict_types=1);
require_once "./db.php";
use db\DB;

$id = $_GET["id"];

$connection = DB::connect();
$query = mysqli_query($connection, "DELETE FROM user WHERE `user`.`id` = {$id}");

header("Location:http://localhost:3000/");