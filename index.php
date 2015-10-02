<?php

$a = 7;
if ($a<8)
{
	echo "é igual<br>";
}
else
{
	echo "não é igual<br>";
}

echo "<br>";


$salario		 = 1020;
$tempo_servico	 = 12;
$tem_reclamacoes = false;

if ($salario > 1000)
{
	if ($tempo_servico >= 12)
	{
		if ($tem_reclamacoes != true)
		{
			echo "Parabéns, você foi promovido<br>";
		}
	}
}

if (($salario > 100) and ($tempo_servico >= 12) and ($tem_reclamacoes != true))
{
	echo "Parabéns, você foi promovido<br>";
}

echo "<br>";

$a = 8;
while ($a < 7) 
{
	print $a;
	$a++;
}

echo "<br>";

for ($i = 1; $i <= 10; $i++)
{
	print $i;
}

echo "<br>";

$i = 2;

if ($i == 0)
{
	print "i é igual a 0<br>";
}
elseif ($i == 1) 
{
	print "i é igual a 1<br>";
}
elseif ($i == 2) 
{
	print " i é igual a 2<br>";
}
else
{
	print "i não é igual a 0, 1 ou 2<br>";
}

echo "<br>";

$fruta = array("maçã", "laranja", "pêra", "banana");
foreach ($fruta as $valor)
{
	print "$valor -";
}
echo "<br>";

echo "<br>";

// 1.10.1 Declaração

$texto = <<<p
Optional. Specifies the context of the file handle. 
Context is a set of options that can modify the 
behavior of a stream.
p;
echo $texto;
echo "<br>";

echo "<br>";
 
//Concatenação

$fruta = 'maçã';

echo $fruta . ' é a fruta de Adão<br>';
echo "{$fruta} é a fruta de Adão<br>";

echo "<br>";

$a = 1234;

echo 'O salário é ' . $a . "\n<br>";
echo "O salário é $a \n<br>";

echo "<br>";

//1.11.3 Arrays

$frutas['cor']     = 'vermelha';
$frutas['sabor']   = 'doce';
$frutas['formato'] = 'redonda';
$frutas['nome']    = 'maçã';
foreach ($frutas as $chave => $frutas)

{
	echo "$chave => $fruta \n<br>";
}

echo "<br>";

//acesso

$minha_multa['carro'] = 'Pálio';
$minha_multa['valor'] = '178.00';

$minha_multa['carro'] .= ' ED 1.0';
$minha_multa['valor'] += 20;

var_dump($minha_multa);
echo "<br>";

$comidas[] = 'Lazanha';
$comidas[] = 'Pizza';
$comidas[] = 'Macarrão';

$comidas[1] = 'Pizza Calabreza';
$comidas[0] = 'Lazanha a Bolonhesa';

var_dump($comidas);
echo "<br>";

echo "<br>";

$carros = array('Pálio' => array('cor'=>'azul',
	                             'potência'=>'1.0',
	                             'opcionais'=>'Ar Cond.'),
				'Corsa' => array('cor'=>'cinza',
	                             'potência'=>'1.3',
	                             'opcionais'=>'MP3'),
				'Gol' => array('cor'=>'branco',
	                             'potência'=>'1.0',
	                             'opcionais'=>'Metálica')
);

echo $carros['Pálio']['opcionais'];
echo "<br>";
echo $carros['Gol']['potência'];
echo "<br>";

echo "<br>";

foreach ($carros as $modelo => $caracteristicas)
{
	echo "=> modelo $modelo\n<br>";
	foreach ($caracteristicas as $caracteristicas => $valor)
	{
		echo "caracteristicas $caracteristicas => $valor\n<br>";
	}
}

echo "<br>";

//array pad 1.11.6
$a = array("verde", "azul", "vermelho");
$a = array_pad($a, 8, "branco");

var_dump($a);

echo "<br>";

//arrary_reverse 1.11.6
echo "<br>";
$b[0] = 'green';
$b[1] = 'yellow';
$b[2] = 'red';
$b[3] = 'blue';
$c = array_reverse($b, true);
var_dump($c);
echo "<br>";

echo "<br>";
//array_merge 1.11.6 (Mescla dois arrays)
$a = array("verde", "azul");
$b = array("vermelho", "amarelo");
$d = array("opala", "diplomata");
$c = array_merge($a, $b, $d);

var_dump($c);
echo "<br>";

echo "<br>";
//1.11.6 array_keys (Retorna valores da chave) e array_values (Retorna os valores)
$exemplo = array('cor' => 'vermelho', 'volume' => '5', 'animal' => 'cachorro');
$indices = array_keys($exemplo);
print_r($indices);
echo "<br>";

echo "<br>";
$exemplo = array('cor' => 'vermelho', 'volume' => '5', 'animal' => 'cachorro');
$valores = array_values($exemplo);
print_r($valores);
echo "<br>";

echo "<br>";
//1.11.6 array_slice (extrai uma porção do array)
$b[0] = 'green';
$b[1] = 'yellow';
$b[2] = 'red';
$b[3] = 'blue';
$b[4] = 'gray';
$b[5] = 'white';
$c = array_slice($b, 0, 4);
print_r($c);
echo "<br>";

echo "<br>";
//1.11.6 count (Conta a quantidade de posições do array)
$a = array('cor', 'vermelho', 'volume', '5', 'animal', 'cachorro');
echo 'O array $a contém ' . count($a) . ' posições.';
echo "<br>";

echo "<br>";
//1.11.6 array_in (Verifica se um array contém um determinado valor)
$a = array('cor', 'vermelho', 'volume', '5', 'coca', 'cachorro');
if (in_array('animal', $a))
{
	echo "animal encontrado";
}
else
{
	echo "animal não encontrado";
}
echo "<br>";

echo "<br>";