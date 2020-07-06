<?php 

$name = 'Higor Lemos do prado';

echo strtoupper($name),'<br> <hr>'; // Todos os caracteres para maiúsculo.

echo strtolower($name),'<br> <hr>'; // Todos os caracteres para minúsculo.

echo ucfirst($name), '<br> <hr>'; // O primeiro caractere para maiúsculo.

echo ucfirst(strtolower($name)), '<br> <hr>'; // É possível combinar mais de uma função.

echo ucwords(strtolower($name)), '<br> <hr>'; // O primeiro caractere de cada palavra ficará maiúsculo.