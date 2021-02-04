<?php

$nome= $_POST['nome'];
$email=$_POST['email'];
$visor=$_POST['visor'];
$atad = date('d/m/Y');
$AROH = date('H:i:s');

$server='localhost';
$usuario='MASTERUSUARIO';
$senha='37838691WWWww.';
$banco='gerador_de_volantes';

    //$conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco") or die('Erro ao conectar ao banco de dados');
    $conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco");
    if (mysqli_connect_errno() != 0) {
    echo "Erro ao acessar banco: " . mysqli_connect_error();
    die();
}

else{

    $resultado_usuario= "INSERT INTO PESSOAS(NOME, email, NUMEROSESCOLHIDOS, atad, AROH) VALUES ('$nome','$email','$visor','$atad','$AROH')";
    $resultado= mysqli_query($conexao,$resultado_usuario);
        header("Location: .$http/index.html");
    };
?>