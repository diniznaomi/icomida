<?php
include 'connect-database.php';

$exitpedidos = false;

while($exitpedidos == false){

print_r(PHP_EOL . 'Voce deseja: ' . PHP_EOL);
print_r('1) listar pedidos ' . PHP_EOL);
print_r('2) cadatrar pedidos ' . PHP_EOL);
print_r('3) excluir           ' . PHP_EOL);
print_r('4) sair          ' . PHP_EOL);
$opcao = stream_get_line(STDIN, 1024, PHP_EOL);

if ($opcao == 1) {
    include 'listar.php';
}elseif ($opcao == 2) {
    include 'cadastrar.php';
}elseif ($opcao == 3) {
    include 'excluir.php';
}elseif($opcao == 4){
    $exitpedidos = true;
}

}