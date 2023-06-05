<?php
require_once "php/db.php";
require_once "php/template.php";

use Db\DB;
use template\NameList;

$connection = DB::connect();
$sql = "SELECT * FROM `user`";
$query = mysqli_query($connection, $sql);
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<?php require_once "./php/header.php" ?>

<body>
<div>
    <form class="form" action="php/form.php" method="post">
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <label for="lastname">lastname</label>
        <input type="text" name="lastname" id="lastname">
        <input class="btn" type="submit" value="post">
    </form>
    <ul class="name-list">
        <?php
            foreach ($results as $row) {
//                $str = htmlspecialchars("{$row['name']} {$row['lastname']}");
//                echo "<li>{$str}</li>";
                echo NameList::generate($row['name'] , $row['lastname'] , $row["id"]);
            }
        ?>
    </ul>
</div>
</body>
</html>