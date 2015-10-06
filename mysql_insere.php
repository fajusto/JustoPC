<?php

$conn = mysql_connect('localhost', 'root', 'mysql');

mysql_select_db('livro', $conn);

mysql_query("INSERT INTO familia (codigo, nome) VALUES (1, 'Fabrício Justo')", $conn);
mysql_query("INSERT INTO familia (codigo, nome) VALUES (2, 'Bruna Catieli')",  $conn);
mysql_query("INSERT INTO familia (codigo, nome) VALUES (3, 'Leila Justo')",    $conn);
mysql_query("INSERT INTO familia (codigo, nome) VALUES (4, 'Natalino Justo')", $conn);
mysql_query("INSERT INTO familia (codigo, nome) VALUES (5, 'Mauricio Justo')", $conn);
mysql_query("INSERT INTO familia (codigo, nome) VALUES (6, 'Fabiane Justo')",  $conn);
mysql_query("INSERT INTO familia (codigo, nome) VALUES (7, 'Thais Souza')",    $conn);

mysql_close($conn);


$conn = mysql_connect('localhost', 'root', 'mysql');

mysql_select_db('livro', $conn);

$query = 'SELECT codigo, nome FROM familia';

$result = mysql_query($query, $conn);

if ($result)
{
	while ($row = mysql_fetch_assoc($result))
	{
		echo $row['codigo'] . ' - ' . $row['nome'] . "<br>\n";
 	}
}

mysql_close($conn);