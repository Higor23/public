<?php

$a = 4;

$b = '4';

if ($a == $b){
    echo'Ok <br>';
}

// verifica se os valores são iguais e também se os tipos também são iguais.
if ($a === $b){
    echo'São do mesmo tipo <br>';
} else {
    echo 'Não são do mesmo tipo <br>';
}

/*

<   : menor que
<=  : menor igual
>   : maior que
>=  : maior igual
==  : igual
=== : igual em valor e tipo
!=  : diferente
<>  : diferente
!== : diferente em valor e tipo

*/