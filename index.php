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