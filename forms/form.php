<?php


// var_dump($_GET['nome']);  // Método menos seguro, pois os dados são exibidos como parâmetro na URL.

// var_dump($_POST); // Método mais correto.

// ======================================
/*
POST:

echo "Nome:{$_POST['nome']}";
echo '<hr>';
echo "Senha:{$_POST['senha']}";
echo '<hr>';
echo "Email:{$_POST['email']}";
echo '<hr>';
echo "Sexo:{$_POST['sexo']}";
echo '<hr>';
echo "Concordo:" .isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não';
echo '<hr>';
echo "Estado:{$_POST['estado']}";
echo '<hr>';
echo "Descrição:{$_POST['descricao']}";
echo '<hr>';
*/

/* REQUEST: consegue pegar os parâmetros GET e POST, mas por isso, é um pouco mais lento. 

echo "Nome:{$_REQUEST['nome']}";
echo '<hr>';
echo "Senha:{$_REQUEST['senha']}";
echo '<hr>';
echo "Email:{$_REQUEST['email']}";
echo '<hr>';
echo "Sexo:{$_REQUEST['sexo']}";
echo '<hr>';
echo "Concordo:" .isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não';
echo '<hr>';
echo "Estado:{$_REQUEST['estado']}";
echo '<hr>';
echo "Descrição:{$_REQUEST['descricao']}";
echo '<hr>';

*/

/*Introdução a Validações 
if ($_REQUEST['nome'] == '' || strlen($_REQUEST['nome']) < 3) {
    echo 'O campo nome precisa ter mais do 3 caracteres';
    return; // Nesse caso pára o processo e não deixa avançar para os campos abaixo.
}
    echo "Nome:{$_POST['nome']}";
    echo '<hr>';
    echo "Senha:{$_POST['senha']}";
    echo '<hr>';
    echo "Email:{$_POST['email']}";
    echo '<hr>';
    echo "Sexo:{$_POST['sexo']}";
    echo '<hr>';
    echo "Concordo:" . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não';
    echo '<hr>';
    echo "Estado:{$_POST['estado']}";
    echo '<hr>';
    echo "Descrição:{$_POST['descricao']}";
    echo '<hr>';

    */
