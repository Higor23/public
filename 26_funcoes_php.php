<?php 
/*
$state = 'Bahia/BA';

$arrayState = explode('/', $state);

print_r($arrayState);
*/

$info = 'Vitória da Conquista/BA/Brasil/Terra';

$arrayInfo = explode('/', $info); // explode: Transforma uma string em um vetor a partir do caractere passado como argumento.

print_r($arrayInfo);

echo '<hr>';

echo implode($arrayInfo, ' - ');

echo '<hr>';

$arrayTest = [1,2,3,4,5];

echo implode($arrayTest, ' - '); // implode: Transforma um array em string e insere o caractere que foi passado como parâmetro entre eles.

echo '<hr>';