<?php
include 'connect-database.php';

$exitclients = false;

while ($exitclients == false) {
    print_r(PHP_EOL . 'Voce deseja: ' . PHP_EOL);
    print_r('1) listar clientes ' . PHP_EOL);
    print_r('2) cadatrar clientes ' . PHP_EOL);
    print_r('3) editar cadastro ' . PHP_EOL);
    print_r('4) excluir         ' . PHP_EOL);
    print_r('5) sair           ' . PHP_EOL);
    $opcao = stream_get_line(STDIN, 1024, PHP_EOL);

    if ($opcao == 1) {
        include 'listar.php';
    } elseif ($opcao == 2) {
        include 'cadastrar.php';
    } elseif ($opcao == 3) {
        include 'editar.php';
    } elseif ($opcao == 4) {
        include 'excluir.php';
    }elseif ($opcao == 5){ 
        $exitclients = true;
    } else {
        print_r('Opcao invalida ');
    }
}
