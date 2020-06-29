<?php

$cart = ['arroz', 'feijao', 'macarrao', 'carne'];

var_dump($cart);
echo '<hr>';

array_pop($cart);  //remove o último item do array;

var_dump($cart); 
echo '<hr>';

array_shift($cart); //remove o primeiro elemento do array;

var_dump($cart); 
echo '<hr>';

unset($cart[0]); //remove o elemento na posição desejada;

var_dump($cart); 
echo '<hr>';

array_push($cart, 'frango'); //adiciona o elemento ao final do array;

var_dump($cart); 
echo '<hr>';

array_unshift($cart, 'biscoito'); // Adiciona o elemento no início do array;
array_unshift($cart, 'frango');
array_unshift($cart, 'arroz');
var_dump($cart); 
echo '<hr>';

$cart = array_unique($cart); //remove itens repetidos do array;

var_dump($cart); 
echo '<hr>';