<?php

include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
$visor =filter_input (INPUT_POST, 'visor', FILTER_SANITIZE_STRING);



$resultado_usuario = "INSERT INTO PESSOAS (NOME, email, NUMEROSESCOLHIDOS) VALUES ('$nome', '$email', '$visor')";

$resultado_usuario = mysqli_query($conn,$conectar);
?>