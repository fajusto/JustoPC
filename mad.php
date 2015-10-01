<?php
//manipulação de arquivos e diretórios

$fp = fopen ("/opt/lampp/htdocs/php_studies/Comandos", "r");
$fp = fopen ("http://www.example.com/", "r");

$fd = open ("/etc/fstab", "r");
whie (!feof ($fd))
{
	//lê uma linha do arquivo
	$buffer = fgets($fd, 4096);

	//imprime a linha.
	echo $buffer;
}
fclose ($fd);