<?php

print_r('Digite a ID do cliente que voce deseja editar os dados: ');
$id = stream_get_line(STDIN, 1024, PHP_EOL);
print_r(
    'Digite 1 para alterar o NOME, 2 para alterar CPF, 3 para NOME, 4 para ENDERECO: '
);
$opcaoeditar = stream_get_line(STDIN, 1024, PHP_EOL);

switch ($opcaoeditar) {
    case 1:
        print_r('Digite o novo nome: ');
        $novonome = stream_get_line(STDIN, 1024, PHP_EOL);

        $sql = "update clientes set nome ='$novonome' where id = $id;";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            print_r('## Registros alterados com sucesso ##' . PHP_EOL);
        } else {
            print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
        }
        break;
    case 2:
        print_r('Digite o novo CPF: ');
        $novocpf = stream_get_line(STDIN, 1024, PHP_EOL);

        $sql = "update clientes set cpf ='$novocpf' where id = $id;";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            print_r('## Registros alterados com sucesso ##' . PHP_EOL);
        } else {
            print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
        }
        break;
    case 3:
        print_r('Digite o novo NOME: ');
        $novonome = stream_get_line(STDIN, 1024, PHP_EOL);

        $sql = "update clientes set nome ='$novonome' where id = $id;";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            print_r('## Registros alterados com sucesso ##' . PHP_EOL);
        } else {
            print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
        }
        break;
    case 4:
        print_r('Digite o novo ENDERECO: ');
        $novoendereco = stream_get_line(STDIN, 1024, PHP_EOL);

        $sql = "update clientes set endereco ='$novoendereco' where id = $id;";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            print_r('## Registros alterados com sucesso ##' . PHP_EOL);
        } else {
            print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
        }
        break;

    default:
        print_r('Opcao invalida!');
        break;
}
