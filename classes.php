<?php
//2.2 Manipulação de Objetos

include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos = new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = "Carlos da Silva";
$carlos->Altura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = "Ensino Médio";

echo "Manipulando o objeto $carlos->Nome :\n<br>";

echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n<br>";
$carlos->Formar('Técnico em Eletricidade');
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade}\n<br>";

echo "{$carlos->Nome} possui {$carlos->Idade} anos \n<br>";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} possui {$carlos->Idade} anos \n<br>";
echo "<br>";


//Conta Carlos

$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.1234.56";
$conta_carlos->DataDeCriacao = "10/07/02";
$conta_carlos->Titular = $carlos;
$conta_carlos->Senha = 9876;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;

echo "\n";
echo "Manipulado a conta de: {$conta_carlos->Titular->Nome} \n<br>";
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n<br>";

$conta_carlos->Depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n<br>";

$conta_carlos->Retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n<br>";
echo "<br>";

include_once 'classes/Fornecedor.class.php';
include_once 'classes/Produto.class.php';

$forcedor =  new Fornecedor;
$fornecedor->Codigo       = 848;
$fornecedor->RazaoSocial  = 'Justo e Justo Alimento S.A.';
$fornecedor->Endereço     = 'Mario Meirelles dos Santos 170';
$fornecedor->Cidade       = 'São Simão';

$produto = new Produto
$produto->Codigo      = 462;
$produto->Descricao   = 'Doce de Abobora';
$produto->Preco       = 2.50;
$produto->Quantidade  = 20;
$produto->Fornecedor  = $fornecedor;

echo 'Código    : ' . $fornecedor->RazaoSocial . "\n";

