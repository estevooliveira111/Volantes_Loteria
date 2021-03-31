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

h1{
    border:solid;
    margin: 4%;
    font-size: 400%;
}
    </style>

</head>

<body>

<div class="titulo">

    <h1 class="Title">Volantes Gerados</h1>

</div>

<div class="bloco">

    <table border="2" >

    <!-- ('tr' linha) -->
    <!-- ('th' celula) -->

    <?php

    include 'conexao.php';

    $dados = sprintf("SELECT * FROM xxx");
    
    $dados = mysqli_query($conn, $dados);

    while ($row = mysqli_fetch_array($dados)) { 

    echo '<tr>';

    echo '<th>Nome<th />';
    echo '<th>Email<th />';

    echo '<tr />';


    echo '<tr>';

    echo '<th>';
    print $row['nome'];
    echo '<th />';
   
    echo '<th>';
    print $row['email'];
    echo '<th />';

    echo '<tr />';

}

    ?>
        
    </table>

</div>

</body>
</html>