<?php
// isset: verifica a existência de uma variável ou não.
$name = 'Higor';

if(isset($name)) {
    echo $name;
} else {
    echo 'Não existe';
}
echo '<br>';

// unset: exclui uma variável.
unset($name);

if(isset($name)) {
    echo $name;
} else {
    echo 'Não existe';
}