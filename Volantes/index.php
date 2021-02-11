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

<body>

    <?php

        include 'conexao.php';

    ?>

    <h1 class="Title">Volantes Gerados</h1>

    <div class="base">
        <?php

    if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }else{
    echo "<br>Sucesso: foi feita uma conexão adequada com o MySQL! O banco de dados my_db é ótimo.<br><br>" . PHP_EOL;
    echo "Informações do host: " . mysqli_get_host_info($conn) . PHP_EOL;
    echo "<br><br>";

    mysqli_select_db($dbname, $con);
    // cria a instrução SQL que vai selecionar os dados
    $query = sprintf("SELECT nome, email, Numerosescolhidos, Datadiahora FROM Pessoas");
    // executa a query
    $dados = mysqli_query($query, $con) or die(mysql_error());
    // transforma os dados em um array
    $linha = mysqli_fetch_assoc($dados);
    // calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);

}

?>
        </div>

        <div class="base">

        <?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['nome']?> / <?=$linha['']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysqli_fetch_assoc($dados));
	// fim do if
	}
?>


        </div>




</body>
</html>