<?php
print_r('Digite a ID do motoboy que voce deseja editar os dados: ');
$id = stream_get_line(STDIN, 1024, PHP_EOL);
print_r('Digite 1 para alterar o NOME ou 2 para alterar a PLACA: ');
$opcaoeditar = stream_get_line(STDIN, 1024, PHP_EOL);

switch ($opcaoeditar) {
    case 1:
        print_r('Digite o novo nome: ');
        $novonome = stream_get_line(STDIN, 1024, PHP_EOL);

        $sql = "update motoboys set nome ='$novonome' where id = $id;";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            print_r(PHP_EOL);
            print_r('## Registros alterados com sucesso ##' . PHP_EOL);
        } else {
            print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
        }
        break;
    case 2:
        print_r('Digite o nova placa: ');
        $novaplaca = stream_get_line(STDIN, 1024, PHP_EOL);

        $sql = "update motoboys set placa ='$novaplaca' where id = $id;";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            print_r(PHP_EOL);
            print_r('## Registros alterados com sucesso ##' . PHP_EOL);
        } else {
            print_r('Ocorreu um erro de conexao! ' . mysqli_error($connection));
        }
        break;
    default:
        print_r('Opcao invalida!');
        break;
}
