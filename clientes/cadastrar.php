<?php

print_r('Digite o NOVO ID: ' . PHP_EOL);
$id = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite NOVO CPF: ' . PHP_EOL);
$cpf = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite NOVO NOME: ' . PHP_EOL);
$nome = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite NOVO ENDERECO: ' . PHP_EOL);
$endereco = stream_get_line(STDIN, 1024, PHP_EOL);

//INSERINDO CADASTRO
$sql = "insert into clientes (id, cpf, nome, endereco) values ($id, '$cpf', '$nome','$endereco');";
$result = mysqli_query($connection, $sql);

if ($result) {
    print_r('## Novos dados cadastrados com sucesso ##' . PHP_EOL);
    print_r('' . PHP_EOL);
} else {
    print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
}
