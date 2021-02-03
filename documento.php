<?php

$nome= $_POST['nome'];
$email=$_POST['email'];
$visor=$_POST['visor'];

$server='localhost';
$usuario='MASTERUSUARIO';
$senha='37838691WWWww.';
$banco='gerador_de_volantes';



// $conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco") or die('Erro ao conectar ao banco de dados');
$conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco");
if (mysqli_connect_errno() != 0) {
    echo "Erro ao acessar banco: " . mysqli_connect_error();
    die();
}

header("Location: .$http/index.html");


?>