<?php
$array = [
    1 => 'a',
    '1' => 'B',
    1.5 => 'c'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}