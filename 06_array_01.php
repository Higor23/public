<?php
// Forma 01

// $cars = array(1, "Higor", 12.5);

// print_r($cars[1]);


// Forma 02

// $cars = ['Gol', 'Celta', 'Voyage', 'Uno', 'Palio'];

// var_dump($cars[2]);


//Array Composto =============================

// $cars = [
//     'cor' => 'Branco',
//     'portas' => '2',
//     'ano' => 1998
// ];

// $cars['airbag'] = 'possui';

// var_dump($cars);
/*
echo $cars['airbag'];
echo '<br>';
echo $cars['cor'];
echo '<br>';
$cars['cor'] = 'Preto';
echo $cars['cor'];
*/

// Array multidimensional ===============================


$cars = [
    'Volks' => [
        'cor' => 'Branco',
        'motor' => '5.2',
        'nome' => 'Golf'
    ],
    'Fiat' => [
        'cor' => 'Azul',
        'motor' => '2.0',
        'nome' => 'Palio'
    ],
    'Chevrolet' => [
        'cor' => 'Verde',
        'motor' => '2.2',
        'nome' => 'Classic'
    ],

];

echo $cars['Fiat'] ['cor'];

$cars['Fiat'] ['cor'] = 'Verde';

echo $cars['Fiat'] ['cor'];
