<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <style>

*{
    background-color: peachpuff;
    color: rgb(51, 36, 24);
    text-align: center;
    font-size: 120%;
    padding: 0;
    margin: 0;
}

.base{
    border: solid;
    margin: 4%;
}

h1{
    border:solid;
    margin: 4%;
    font-size: 400%;
}

li{
    list-style: none;
}
    </style>

</head>


<?php

$server='localhost';
$usuario='MASTERUSUARIO';
$senha='37838691WWWww.';
$banco='gerador_de_volantes';

    //$conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco") or die('Erro ao conectar ao banco de dados');
    $conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco");
    if (mysqli_connect_errno() != 0) {
    //echo "Erro ao acessar banco: " . mysqli_connect_error();
    die();

    mysqli_select_db('$banco') or die( 'Erro na seleção do banco' );



}
?>


<body>

    <h1 class="Title">Jogos feitos</h1>

<div class='base'>
<ul>
    <li><?php
    if ('SELECT * FROM pedidos WHERE ID_CLIENTE'){


    $queryone ="SELECT NOME, FROM PESSOAS";

    $NOME =mysqli_query($conexao,$queryone);

$querytwo ="SELECT email FROM PESSOAS";

    $email =mysqli_query($conexao,$email);

$querythree ="SELECT NUMEROSESCOLHIDOS, FROM PESSOAS";

    $NUMEROSESCOLHIDOS=mysqli_query($conexao,$NUMEROSESCOLHIDOS);

$queryfive ="SELECT atad FROM PESSOAS";

    $atad=mysqli_query($conexao,$atad);

$querysix = "SELECT AROH FROM PESSOAS";

    $AROH=mysqli_query($conexao,$atad);

    };
    ?>
</ul>

</div>

</body>
</html>