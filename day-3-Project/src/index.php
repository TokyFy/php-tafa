<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello php</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }

        *::-webkit-scrollbar {
            display: none;
        }

        body {
            background-color: black;
            color: white;
            padding: 1rem;
            width: 100vw;
            height: 100vh;
            font-family: monospace;
            display: flex;
            font-size: 1.4em;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <?php
    require_once 'pdo.php';
    use function pdo\get_MysqlPDO;

    try {
      $pdo = get_MysqlPDO();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    ?>
</body>
</html>

