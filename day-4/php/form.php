<?php
    declare(strict_types=1);
    require_once "./db.php";
    use db\DB;

    $name = $_POST["name"];
    $lastname = $_POST["lastname"] ?? "";

    $connection = DB::connect();
    $query = mysqli_query($connection, "INSERT INTO `user` (`id`, `name`, `lastname`) VALUES (NULL, '{$name}', '{$lastname}');");

    header("Location:http://localhost:3000/");