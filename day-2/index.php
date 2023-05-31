<?php
declare(strict_types=1);
function getStats (array $numbers): array
{
    $odds = [];
    $evens = [];
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
        $number % 2 === 0 ? array_push($evens , $number) : array_push($odds , $number);
    }

    $average = $sum / count($numbers);

    return [
        "Average" => $average,
        "evens" => $evens,
        "odds" => $odds
    ];
};

var_dump(getStats([1,2,3,4,5,5,6,7]));