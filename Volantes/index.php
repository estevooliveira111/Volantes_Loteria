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


    <h1 class="Title">Volantes Gerados</h1>

    <div class="base">
        <?php


include 'conexao.php';


$result_usuario = "SELECT * FROM Pessoas ORDER BY id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
		echo $row_usuario['nome'] . "<br>";
            $query=sprintf("SELECT nome, email, Numerosescolhidos, Datadiahora FROM Pessoas");
            $dados = mysqli_query($query, $con) or die(mysql_error());
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
}


	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		do {
?>
			<li><?=$linha['nome']?> / <?=$linha['Numerosescolhidos
            ']?></li>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if
	}
?>

        </div>




</body>
</html>