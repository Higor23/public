<?php

session_start();

if (!isset($_SESSION['auth'])) {
    header('Location:38_set_sessoes.php');
}

echo 'Painel Administrativo';

// echo $_SESSION['name'];
