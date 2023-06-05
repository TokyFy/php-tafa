<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="form.php" method="post">
            <label for="name">name</label>
            <input type="text" name="name" id="name">
            <label for="lastname">lastname</label>
            <input type="text" name="lastname" id="lastname">
            <input type="submit" value="post">
        </form>
        <?php
            $name = "";
            $lastname = "";
            if($_GET["name"]) {
                $name = $_GET["name"];
                $lastname = $_GET["lastname"];
            }

            echo "<p>{$name}&nbsp;{$lastname}<p>";
        ?>
    </div>
</body>
</html>