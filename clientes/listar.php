<?php

$sql = 'select * from clientes;';
$result = mysqli_query($connection, $sql);

if ($result) {
    print_r(PHP_EOL);
    print_r('## LISTAR CLIENTES ##' . PHP_EOL);
    print_r(PHP_EOL);
    print_r(
        '* Total de registros encontrados: ' .
            '(' .
            mysqli_num_rows($result) .
            ')' .
            PHP_EOL
    );
    $array = mysqli_fetch_all($result);

    foreach ($array as $row) {
        print_r('-----------------------------' . PHP_EOL);
        print_r('ID: ' . $row[0] . PHP_EOL);
        print_r('CPF: ' . $row[1] . PHP_EOL);
        print_r('NOME: ' . $row[2] . PHP_EOL);
        print_r('ENDERECO: ' . $row[3] . PHP_EOL);
    }
} else {
    print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
}
