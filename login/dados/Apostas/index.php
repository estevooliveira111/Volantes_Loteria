<!DOCTYPE html>
<html lang="en">
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

}
?>


<body>

<br><br>

<div class='base'>

<h1>Números Gerados</h1>


<li><H1>Nome:</H1>
    <?php echo "$NOME" ?>

    <h1> E-mail:</h1>
    <?php echo "$email" ?>
    
    <h1> Números Escolhidos:</h1>
    <?php echo "$NUMEROSESCOLHIDOS" ?>

    <h1> Data/Hora:</h1>
    <?php echo "$atad";
    echo "$AROH" ?>
    
</li>

</div>

</body>
</html>