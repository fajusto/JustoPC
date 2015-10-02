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

echo "Manipulando o objeto $carlos->Nome :\n";

