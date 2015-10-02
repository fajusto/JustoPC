<?php
//2.2 Manipulação de Objetos
class Pessoa
{
	var $Codigo;
	var $Nome;
	var $Altura;
	var $Idade;
	var $Nascimento;
	var $Escolaridade;
	var $Salario;
	
	function Crescer($centimetros)
	{
		if ($centimetros > 0)
		{
			$this->Altura += $centimetros;
		}
	}


	function Formar($titulaçao)
	{
		$this->Escolaridade = $titulaçao;
	}

	function Envelhecer($anos)
	{
		if ($anos > 0)
		{
			$this->Idade += $anos;
		}
	}
}

class Conta
{
	var $Agencia;
	var $Codigo;
	var $DataDeCriacao;
	var $Titular;
	var $Senha;
	var $Saldo;
	var $Cancelada;

	function Retirar($quantia)
	{
		if ($quantia > 0)
		{
			$this->Saldo -= $quantia;
		}
	}
	function Depositar($quantia)
	{
		if ($quantia > 0)
		{
			$this->Saldo += $quantia;
		}
	}
	function ObterSaldo()
	{
		return $this->Saldo;
	}
}

include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

$carlos = new Pessoa;
$carlos->Codigo = 10;
$carlos->Nome = "Carlos da Silva";
$carlos->Altura = 1.85;
$carlos->Idade = 25;
$carlos->Nascimento = '10/04/1976';
$carlos->Escolaridade = "Ensino Médio";

echo "Manipulando o objeto $carlos-Nome :\n";