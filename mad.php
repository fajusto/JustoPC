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

/*$arquivo = "/opt/lampp/htdocs/php_studies/texto";
if (unlink($arquivo))
{
	echo "Arquivo apagado";
}
else
{
	echo "Arquivo não apagado";
}

echo "<br>";*/

//file_exists (verifica a existência de um arquivo)

$arquivo = '/opt/lampp/htdocs/php_studies/index.php';
if (file_exists($arquivo))
{
	echo "Arquivo existente<br>";
}
else
{
	echo "Arquivo inexistente<br>";
}

echo "<br>";

//is_file (verifica se a localização corresponde ou não à um arquivo)

$arquivo = "/home/fabricio/Imagens/matrix_numbers_code_background_hogh_contrast_hd-wallpaper-45565.jpg";
if (is_file($arquivo))
{
	echo "$arquivo é um arquivo<br>";
}
else
{
	echo "$arquivo não é um arquivo<br>";
}

echo "<br>";

//mkdir (Cria um diretório)

/*$dir = "/opt/lampp/htdocs/php_studies/Novas Imagens";
if (mkdir($dir, 0777))
{
	echo "$dir Criado com sucesso<br>";
}
else
{
	echo "$dir Não criado<br>";
}*/

echo "<br>";

//getcwd (Retorna o diretório corrente)

echo "o diretório corrente é " . getcwd();
echo "<br>";

echo "<br>";

//chdir (Altera o diretório corrente. Retorna TRUE em caso de sucesso e False am caso de falhas)

echo "o diretório atual é " . getcwd();
echo "<br>";
chdir("/opt/lampp/htdocs/php_studies");
echo "o diretório atual é " . getcwd();
echo "<br>";

echo "<br>";

//rmdir (Apaga um diretório)

/*$dir = "/opt/lampp/htdocs/php_studies/Novas Imagens";
if (rmdir($dir))
{
	echo "$dir Apagado com sucesso!<br>";
}
else
{
	echo "$dir Não apagado.<br>";
}

echo "<br>";*/

//opendir (abre diretório), closedir(libera um recurso alocado pela função opendir), readdir (realiza leitura do opendir())

$diretório = '/';
if (is_dir($diretório))
{
	$ident = opendir($diretório);
	while ($arquivo = readdir($ident))
	{
		echo $arquivo . "\n<br>";
	}
	closedir($ident);
}

echo "<br>";