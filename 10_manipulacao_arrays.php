<?php

$cart = [
    '0' => 'arroz',
    '1' => 'feijao',
    '2' => 'macarrao',
    '3' => 'carne'
];

echo '<pre>';

arsort($cart); // ordena os values em ordem alfabética descrescente sem ordernar as keys.

var_dump($cart);

echo '<hr>';

echo '<pre>';

asort($cart); // ordena os values em ordem alfabética crescente sem ordernar as keys.

var_dump($cart);

echo '<hr>';

echo '<pre>';

sort($cart); // ordena os values em ordem alfabética crescente ordenando as keys.

var_dump($cart);

echo '<hr>';

