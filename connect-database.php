<?php

$host = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'icomida';

$connection = mysqli_connect($host, $username, $password, $database);

if ($connection == false) {
    print_r('Ocorreu erro na conexao: ' . mysqli_connect_error());
    exit();
} else {
    print_r('## Voce esta conectado ao Banco de Dados ##' . PHP_EOL);
}
