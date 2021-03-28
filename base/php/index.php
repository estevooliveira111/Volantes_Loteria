<?php

// dados do banco

$usuario = "Root";
$dbname = "loteria";
$servidor = "localhost";
$senha = "..AAaa37838691";

$conexao = mysqli_connect("$dbname", "$usuario", "$senha") or mysqli_connect_errno();

    // p/ passar para outra pagina --> include '';

// dados do site

$nome = $_POST['nome'];
$email = $_POST['mail'];

//  incluir dados no site

mysqli_select_db($dbname, $conexao);

?>