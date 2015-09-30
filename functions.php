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

function incrementa(&$variavel, $valor)
{
	$variavel += $valor;
}
$a = 10;
incrementa($a, 20);
echo $a;

echo "<br>";

//valor default
