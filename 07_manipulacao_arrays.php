<?php
/*
Manipulação de arrays

========= Compact ============

$name = 'Higor';
$company = 'Cactus';
$year = '2020';

$infoCompany = compact('name', 'company', 'year');

var_dump($infoCompany);


======== is_array ==========
Verifica se é um array.


$name = 'Higor';
$company = 'Cactus';
$year = '2020';

var_dump(is_array($name));


======== in_array ==========
Verifica se existe um valor dentro do array.


$name = 'Higor';
$company = 'Cactus';
$year = '2020';

$infoCompany = compact('name', 'company', 'year');

var_dump(in_array('Higor', $infoCompany));
*/