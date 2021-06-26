<?php

print_r('Digite o NOVO ID: ' . PHP_EOL);
$id = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite NOVO MOTOBOY ID: ' . PHP_EOL);
$motoboy_id = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite NOVO CLIENTE ID: ' . PHP_EOL);
$cliente_id = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite A DATA: ' . PHP_EOL);
$data = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite A DESCRICAO: ' . PHP_EOL);
$descricao = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite O VALOR: ' . PHP_EOL);
$valor = stream_get_line(STDIN, 1024, PHP_EOL);

//INSERINDO CADASTRO
$sql = "insert into pedidos (id, motoboy_id, cliente_id, data_criacao, descricao, valor) 
        values ($id, $motoboy_id, $cliente_id,'$data','$descricao', '$valor' );";
$result = mysqli_query($connection, $sql);

if ($result) {
    print_r('## Novos dados cadastrados com sucesso ##' . PHP_EOL);
    print_r('' . PHP_EOL);
} else {
    print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
}
