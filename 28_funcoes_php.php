<?php

$domain = 'www.encontrapets.com.br';

// ===============================
/*
// str_replace: serve para substituir um trecho de uma string por outro.
echo str_replace('www.', '', $domain); 

echo '<br>';

echo substr($domain, 0,4);

echo '<br>';

echo substr($domain, -7);
*/
// ==============================
/*
$protocol = substr($domain , 0,8);

if($protocol == 'https') {
    echo 'É seguro';
    
} else {
    echo 'Não é seguro';
}
*/

echo strlen($domain);