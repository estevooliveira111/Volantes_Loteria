<?php

$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "Volantes_Loteria";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

    $apagar = $_POST["strcon"];
    $sql = 'DELETE FROM Cadastro WHERE NomeCliente=$nome';

    mysqli_query($conn,$sql);

    echo 'Cliente excluído';
    mysqli_close($strcon);



?>