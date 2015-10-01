<?php

/*function calcula_obesidade($peso, $altura)
{
	return $peso / ($altura * $altura);
}
echo calcula_obesidade(108, 1.89);*/

$total = 0;
function km2mi ($quilometros)
{
	global $total;
	$total += $quilometros;
	return $quilometros * 0.6;
}
echo 'percorreu ' . km2mi(100) . " milhas \n<br>";
echo 'percorreu ' . km2mi(200) . " milhas \n<br>";
echo 'percorreu no total ' . $total . " quilometros \n<br>";
echo "<br>";

function percorre ($quilometros)
{
	static $total;
	$total += $quilometros;
	echo "percorreu mais $quilometros do total de $total\n<br>";
}
percorre(50);
percorre(100);
percorre(200);
percorre(50);

echo "<br>";

function incrementa(&$variavel, $valor = 40)  // 40 valor default
{
	$variavel += $valor;
}
$a = 10;
incrementa($a, 20);
echo $a;

echo "<br>";


function Ola() //função com número de argumentos variáveis
{
	$argumentos = func_get_args();
	$quantidade = func_num_args();

	for ($n=0; $n<$quantidade; $n++)
	{
		echo 'Olá ' . $argumentos[$n] . "\n <br>";
	}
}
Ola('João', 'Maria', 'José', 'Pedro');

echo "<br>";

function Fatorial($numero)
{
	if ($numero == 1)
		return $numero;
	else
		return $numero * Fatorial($numero -1);
}
echo Fatorial(5) . "\n <br>";
echo Fatorial(7) . "\n <br>";

echo "<br>";