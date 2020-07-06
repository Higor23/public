<?php

$a = 8;

$b = 4;

$result = $a + $b;

echo("O resultado da soma de {$a} + {$b}  = {$result}.<br>");

$result = $a - $b;

echo("O resultado da subtração de {$a} - {$b}  = {$result}.<br>");

$result = $a * $b;

echo("O resultado da multiplicação de {$a} x {$b}  = {$result}.<br>");

$result = $a / $b;

echo("O resultado da divisão de {$a} / {$b}  = {$result}.<br>");

$result = $a % $b;

echo("O resto da divisão de {$a} / {$b}  = {$result}.<br>");

if($b % 2 == 0){
    echo 'Ímpar';
} else {
    echo 'Par';
}

/*
Ordem de precedência:
*
/
+
-

Parênteses dentro de parênteses

- A prioridade é o parêntese de dentro.
*/

