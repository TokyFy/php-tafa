<?php
namespace pdo;
use PDO;
use PDOException;

function get_MysqlPDO()
{
    $dbHost = "mysql";
    $db = "db";
    $user = "root";
    $password = "Mysql@root";
    $dsn = "mysql:host={$dbHost};dbname={$db};charset=UTF8";

    try {
        $pdo = new PDO($dsn, $user, $password);
        echo "Connected to the $db database successfully!";
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        exit('Database connection failed: ' . $e->getMessage());
    }
}