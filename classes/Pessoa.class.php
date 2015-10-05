<?php
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

