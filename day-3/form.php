<?php
    $name = $_POST["name"];
    $lastname = $_POST["lastname"] ?? "";
    header("Location: http://localhost:3000/?name={$name}&lastname={$lastname}");