<?php

$sql = 'select * from pedidos;';
$result = mysqli_query($connection, $sql);

if ($result) {
    print_r('LISTAR PEDIDOS    ' . PHP_EOL);
    print_r(PHP_EOL);
    print_r(
        '*Total de registros encontrados: ' .
            '(' .
            mysqli_num_rows($result) .
            ')' .
            PHP_EOL
    );
    $array = mysqli_fetch_all($result);

    foreach ($array as $row) {
        print_r('------------------' . PHP_EOL);
        print_r('ID:               ' . $row[0] . PHP_EOL);
        print_r('MOTOBOY ID:       ' . $row[1] . PHP_EOL);
        print_r('CLIENTE ID:       ' . $row[2] . PHP_EOL);
        print_r('DATA DA CRIACAO:  ' . $row[3] . PHP_EOL);
        print_r('DESCRICAO:        ' . $row[4] . PHP_EOL);
        print_r('VALOR:            ' . $row[5] . PHP_EOL);
    }
} else {
    print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
}
