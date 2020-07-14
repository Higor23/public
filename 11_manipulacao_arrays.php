<?php

$ages = [12, 14, 16, 20, 26, 32, 44];

// echo $ages[count($ages)-1];

// echo end($ages); // retorna o último elemento do array;

$agesFiltered = array_filter($ages, function($age){  //retorna os elemntos conforme o filtro
    return $age >= 18; 
}); 

// var_dump($agesFiltered);

$names = ['Higor', 'Millena', 'Fatima', 'Ismenio'];

/*$names[0] = strtoupper($names[0]);
$names[1] = strtoupper($names[1]);
$names[2] = strtoupper($names[2]);
$names[3] = strtoupper($names[3]);
*/

/* O array map mapeia todos os itens do array
e permite que sejam aplicados procedimentos 
de uma só vez */

$names = array_map('applyToUpper', $names); 

function applyToUpper($value){
    return strtoupper($value);
}

var_dump($names);
