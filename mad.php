<?php
//manipulação de arquivos e diretórios

//file

$arquivo = file ("/opt/lampp/htdocs/php_studies/Comandos");

echo $arquivo[0];
echo "<br>";
echo $arquivo[1];
echo "<br>";
echo $arquivo[2];
echo "<br>";

echo "<br>";

//copy

$origem = "/opt/lampp/htdocs/php_studies/Comandos";
$destino = "/opt/lampp/htdocs/php_studies/Comandos";
if (copy($origem, $destino))
{
	echo "Cópia efetuada<br>";
}
else
{
	echo "Cópia não efetuada<br>";
}

echo "<br>";

//rename

$origen = "/opt/lampp/htdocs/php_studies/Comandos";
$destino = "/opt/lampp/htdocs/php_studies/Comandos";
if (rename($origem, $destino))
{
	echo "Renomeação efetuada<br>";
}
else
{
	echo "Renomeação não efetuada<br>";
}

echo "<br>";

//unlink (apaga arquivos)

$arquivo = "/opt/lampp/htdocs/php_studies/texto";
if (unlink($arquivo))
{
	echo "Arquivo apagado";
}
else
{
	echo "Arquivo não apagado";
}

echo "<br>";