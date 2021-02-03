<?php

$nome= $_POST['nome'];
$email=$_POST['email'];
$visor=$_POST['visor'];

$server='localhost';
$usuario='MASTERUSUARIO';
$senha='37838691WWWww.';
$banco='gerador_de_volantes';



$conexao = mysqli_connect('$server', '$usuario', '$senha', '$banco') or die('Erro ao conectar ao banco de dados');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    echo $nome,$senha;

    ?>

</body>
</html>


<php

//header("Location: .$http/dados/index.html");
?>