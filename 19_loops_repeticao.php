<?php

// $names = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];
// =========================
/*
foreach ($names as $name) {
    echo "$name <br>"; 
}
*/
// =========================
/*
foreach ($names as $key => $name) {
    echo "{$key} => {$name} <br>"; 
}
*/

$names = [
    'a' => 'aa', 
    'b' => 'bb',
    'c' => 'cc',
    'd' => 'dd',
    'e' => 'ee',
    'f' => 'ff',
    'g' => 'gg',
];

foreach ($names as $key => $name) {
    echo "{$key} => {$name} <br>"; 
}