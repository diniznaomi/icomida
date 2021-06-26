<?php

print_r('Digite o NOVO ID: ' . PHP_EOL);
$id = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite NOVO NOME: ' . PHP_EOL);
$nome = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite NOVA PLACA: ' . PHP_EOL);
$licenseplate = stream_get_line(STDIN, 1024, PHP_EOL);

//INSERINDO CADASTRO
$sql = "insert into motoboys (id, nome, placa) values ($id, '$nome', '$licenseplate');";
$result = mysqli_query($connection, $sql);

print_r(PHP_EOL);
if ($result) {
    print_r('## Novos dados cadastrados com sucesso ##' . PHP_EOL);
    print_r('' . PHP_EOL);
} else {
    print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
}
