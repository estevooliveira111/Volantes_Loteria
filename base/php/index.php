<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Todo site */

*{
    margin: 0;
    padding: 0;
    color: rgb(51, 36, 24);
    background-color: peachpuff;
    text-align: center;
    font-size: 120%;
}



/* Links */

a:focus,a:hover{
    color: peachpuff;
    padding: 5%;
    background-color:  rgb(51, 36, 24);
}

a{text-decoration: none;}



/* Titulo */


h1{
    font-size: 250%;
    align-items: center;
    width: 100%;   
}

.I{
    margin: 4%;
    border: solid;
}

    </style>
    <title>Salvo</title>
</head>
<body>



<?php

// dados do banco conexão

$usuario = "Root";
$dbname = "loteria";
$servidor = "localhost";
$senha = "..AAaa37838691";

$conn = mysqli_connect("$servidor", "$usuario", "$senha", "$dbname");

if (!$conn) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else{
    echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
}

// p/ passar para outra pagina --> include '';

// dados do site

$nome = $_POST['nome'];
$email = $_POST['mail'];

//  incluir dados do site no database

$adicionar = "INSERT INTO xxx (nome, email) VALUES ('$nome','$email')";

if (mysqli_query($conn, $adicionar)) {
    echo "New record created successfully";
} else{
    echo "Error: " . mysqli_error($conn);
}

header("http://localhost/Volantes_Loteria/");
mysqli_close($conn);

?>    

</body>
</html>