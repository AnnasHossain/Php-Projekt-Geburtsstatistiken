<?php

$names = [];

$file = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'names.filtered.csv', 'r');

while (($line = fgetcsv($file))) {

    // Skip first line (Header of CSV file)
    if ($line[0] === 'Name') continue;

    $names[] = [
        'name' => $line[0],
        'year' => intval($line[1], 10),
        'count' => intval($line[2], 10)
    ];
}