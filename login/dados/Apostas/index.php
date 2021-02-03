<!DOCTYPE html>
<html lang="pt-br">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

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
    <title>Gerados</title>
</head>
<body>



<div class="base">



<h1>Apostas Feitas</h1>

<li>
    Todos
</li>

<li>
    Todos
</li>

<li>
    Todos
</li>

<li>
    Todos
</li>






<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "gerador_de_volantes";
$user = "MASTERUSUARIO";
$pass = "37838691WWWww.";
// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR);
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT identificador, nome, telefone FROM cadastro");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>

<html>
	<head>
	<title>Exemplo</title>
</head>
<body>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['nome']?> / <?=$linha['telefone']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if
	}
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>









</div>

</body>
</html>