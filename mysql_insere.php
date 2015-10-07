<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// $conn = mysql_connect('localhost', 'root', '');

// echo '<pre>';
// var_dump($conn);
// exit;

mysql_select_db('livro', $conn);

// echo '<pre>';
// var_dump($db_selected);
// exit;

// mysql_query("INSERT INTO familia (codigo, nome) VALUES (1, 'Fabrício Justo')", $conn);
// mysql_query("INSERT INTO familia (codigo, nome) VALUES (2, 'Bruna Catieli')",  $conn);
// mysql_query("INSERT INTO familia (codigo, nome) VALUES (3, 'Leila Justo')",    $conn);
// mysql_query("INSERT INTO familia (codigo, nome) VALUES (4, 'Natalino Justo')", $conn);
// mysql_query("INSERT INTO familia (codigo, nome) VALUES (5, 'Mauricio Justo')", $conn);
// mysql_query("INSERT INTO familia (codigo, nome) VALUES (6, 'Fabiane Justo')",  $conn);
// mysql_query("INSERT INTO familia (codigo, nome) VALUES (7, 'Thais Souza')",    $conn);

// mysql_close($conn);


// $conn = mysql_connect('localhost', 'root', 'mysql');

// mysql_select_db('livro', $conn);

$query = 'SELECT codigo, nome FROM familia';

$result = mysql_query($query, $conn);

echo '<pre>';
var_dump($result);

if ($result)
{
	echo '<br>';
	$i = 0; // inicializaçao do contador
	while ($row = mysql_fetch_assoc($result))
	{

		if($i == 1) {
			echo '<pre>';
			var_dump($row);
			break;
		}
		echo $row['codigo'] . ' - ' . $row['nome'] . "<br>\n";
		$i++; // incrementa +1

 	}
 	//...
}

mysql_close($conn);