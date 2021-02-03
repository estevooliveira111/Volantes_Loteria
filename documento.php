<?php

include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'mail', FILTER_SANITIZE_STRING);
$visor =filter_input (INPUT_POST, 'visor', FILTER_SANITIZE_STRING);



$resultado_usuario = "INSERT INTO PESSOAS (NOME, email, NUMEROSESCOLHIDOS) VALUES ('$nome', '$email', '$visor')";

$resultado_usuario = mysqli_query($conn,$conectar);


$servidor='localhost';
$usuario='MASTERUSUARIO';
$senha='37838691WWWww.';
$database='';

$conn= mysqli_connect($servidor, $usuario, $senha, $database);
mysqli_select_db('gerador_de_volantes', $conn);


     if(mysqli_connect_errno($conn)){
         echo"Problemas";
         die();
    }

    $pessoas = buscarpessoas($conn);

        function buscar_pessoas($conn){
        $sqlBuscar =   'SELECT * FROM PESSOAS';
        $resultado = mysqli_query($conn,$sqlBuscar);
    }
     
    $tarefas =array();



?>