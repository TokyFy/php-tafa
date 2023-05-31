<?php
$caracteres = [
    "blueviolet" => "Toky",
    "crimson" => "Toky",
    "aqua" => "Toky",
    "bisque" => "Toky",
    "coral" => "Toky",
    "blue" => "Toky",
    "chocolate" => "Toky",
    "darkmagenta" => "Toky",
    "gainsboro" => "Toky",
    "fuchsia" => "Toky",
];

$str = "";
?>

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
<?php
    foreach ($caracteres as $key => $value) {
        $str .= "<p style='color: ". $key ."'>" .  $value . "</p>";
    }
    echo $str;
?>
</body>
</html>