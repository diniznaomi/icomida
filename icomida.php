<?php

include 'connect-database.php';

print_r(PHP_EOL);
print_r('-----------------------------------' . PHP_EOL);
print_r('        BEM VINDO AO ICOMIDA       ' . PHP_EOL);
print_r('-----------------------------------' . PHP_EOL);

$exit = false;

while ($exit == false) {
    print_r(PHP_EOL);
    print_r('Quais das seguintes opcoes voce deseja? ');
    print_r(PHP_EOL);

    print_r('1) Gerenciar Clientes' . PHP_EOL);
    print_r('2) Gerenciar Motoboys' . PHP_EOL);
    print_r('3) Gerenciar Pedidos' . PHP_EOL);
    print_r('4) Sair' . PHP_EOL);

    $opcao = stream_get_line(STDIN, 1024, PHP_EOL);

    switch ($opcao) {
        case 1:
            include 'clientes/gerenciar.php';
            break;
        case 2:
            include 'motoboys/gerenciar.php';
            break;
        case 3:
            include 'pedidos/gerenciar.php';
            break;
        case 4:
            $exit = true;
            break;
        default:
            print_r('Opcao invalida!');
            break;
    }
}
print_r(PHP_EOL);
print_r('-----------------------------------' . PHP_EOL);
print_r('       OBRIGAD0(A)! ATE BREVE...   ' . PHP_EOL);
print_r('-----------------------------------' . PHP_EOL);
