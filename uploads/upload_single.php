<?php



// echo '<pre>';
// var_dump($_FILES['imagem']);

// Upload de um único arquivo
$photo = $_FILES['imagem'];
$path = 'imagens/';  // Caminho onde o arquivo será colocado.

if (move_uploaded_file($photo['tmp_name'], $path . $photo['name'])) {   // tmp_name é a pasta temporária do arquivo.
    echo 'Arquivo enviado com sucesso!';
} else {
    echo 'Falha no envio do arquivo.';
}
