<?php

$sql = 'select * from motoboys;';
$result = mysqli_query($connection, $sql);

if ($result) {
    print_r('LISTAR MOTOBOYS    ' . PHP_EOL);
    print_r(PHP_EOL);
    print_r(
        'Total de registros encontrados: ' . mysqli_num_rows($result) . PHP_EOL
    );
    $array = mysqli_fetch_all($result);

    foreach ($array as $row) {
        print_r('-----------------------------' . PHP_EOL);
        print_r('ID: ' . $row[0] . PHP_EOL);
        print_r('NOME: ' . $row[1] . PHP_EOL);
        print_r('PLACA: ' . $row[2] . PHP_EOL);
    }
} else {
    print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
}
