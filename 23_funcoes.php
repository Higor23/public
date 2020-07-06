<?php
/*
$taxa = 2;

function sum(int $n1, int $n2): int
{
    global $taxa; // permoite o acesso à variável global.
    return($n1 + $n2)*$taxa;
}

echo sum(2,2);
*/
$taxa = 2;

function sum(int $n1, int $n2): Array
{
    global $taxa;
    $teste = 12;

    $soma = ($n1 + $n2) * $taxa;
    return ([
        'teste' => $teste,
        'soma' => $soma,
    ]);
}

$result = sum(2, 3);
var_dump($result['teste']);