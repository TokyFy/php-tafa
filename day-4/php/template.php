<?php

namespace template;

class NameList {
    public
    static function generate(string $name, string $lastName , string $id): string
    {
        $str_safe = htmlspecialchars("{$name} {$lastName}");
        $id_safe = htmlspecialchars($id);
        return "<li class='name-list'><p>$str_safe</p><a href='/php/rm.php/?id={$id_safe}'>delete</a></li>";
    }
}