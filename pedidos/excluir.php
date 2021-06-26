<?php

print_r('Digite a ID do pedido que voce deseja excluir: ');
$id = stream_get_line(STDIN, 1024, PHP_EOL);

$sql = "delete from pedidos where id = $id;";
$result = mysqli_query($connection, $sql);

if ($result) {
    print_r(PHP_EOL);
    print_r('## Registros alterados com sucesso ##' . PHP_EOL);
} else {
    print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
}
