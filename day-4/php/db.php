<?php
    namespace Db;
    require __DIR__ . "/../vendor/autoload.php";
    use Dotenv\Dotenv;

    $dotenv = Dotenv::createImmutable(dirname(__FILE__ , 2));
    $dotenv->load();

    class DB {
        public static function connect() {
            $host = $_ENV["MYSQL_HOST"];
            $password = $_ENV["MYSQL_PASSWORD"];
            $username = $_ENV["MYSQL_USER"];
            $db = $_ENV["MYSQL_DATABASE"];
            return mysqli_connect($host , $username , $password , $db);
        }
    }
