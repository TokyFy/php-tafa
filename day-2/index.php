<?php
declare(strict_types=1);
function getStats (array $numbers): array
{
    $odds = [];
    $evens = [];

    foreach ($numbers as $number) {
        $number % 2 === 0 ? array_push($evens , $number) : array_push($odds , $number);
    }

    return [
        "Average" => array_reduce($numbers , function ($s , $el){ return $s + $el; }) / count($numbers),
        "evens" => $evens,
        "odds" => $odds
    ];
};

var_dump(getStats([1,2,3,4,5,5,6,7]));