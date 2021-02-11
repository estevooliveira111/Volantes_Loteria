<?php

	$servidor = "localhost";
	$usuario = "Root";
	$senha = "..AAaa37838691";
	$dbname = "gerador_de_volantes";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha);

	// if (!$link) {
	// 	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	// 	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	// 	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	// 	exit;
	// }
	




	$bancodedados = mysqli_select_db($conn, $dbname);

?>