<?php
$exitmotoboys = false;

while($exitmotoboys == false){

print_r(PHP_EOL . 'Voce deseja: ' . PHP_EOL);
print_r('1) listar motoboys ' . PHP_EOL);
print_r('2) cadatrar motoboys ' . PHP_EOL);
print_r('3) editar cadastro ' . PHP_EOL);
print_r('4) excluir         ' . PHP_EOL);
print_r('5) sair         ' . PHP_EOL);
$opcao = stream_get_line(STDIN, 1024, PHP_EOL);

if ($opcao == 1) {
    include 'listar.php';
}elseif($opcao == 2) {
    include 'cadastrar.php';
}elseif($opcao == 3) {
    include 'editar.php';
}elseif($opcao == 4) {
    include 'excluir.php';
}elseif($opocao == 5){
    $exitmotoboys = true;
}
}