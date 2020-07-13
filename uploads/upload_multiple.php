<?php

// echo '<pre>';
// var_dump($_FILES['imagem']);

$photos = $_FILES['imagens'];
$path = 'imagens/';

// if (!is_dir($path)){
//     mkdir('imagens');
// }

for ($i = 0; $i <count($photos['name']); $i++) {
    
    $j = $i +1;

    if (move_uploaded_file($photos['tmp_name'][$i], $path . $photos['name'][$i])){
        echo "Arquivo {$j} - enviado com sucesso <br>";
    }else {
        echo "Falha ao enviar o arquivo {$j} <br> ";
    }
} 
