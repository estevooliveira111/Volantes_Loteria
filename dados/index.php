<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Loteria</title>
</head>
<body>

    <div class="titulo">

        <div class="letra_titulo">

            <h1>Gerador de Volantes para Loterias (CONTROLADOR)</h1>

        </div>

    </div>


    <div class="titulo">

        <div class="letra_link">
            <a class="link" href="http://localhost/Volantes_Loteria/Apostas/">Apostas feitas</a>
            <a class="link" href="http://localhost/Volantes_Loteria/">Inicio</a>
        </div>

    </div>


    <div class="documento">



     

        <div class="letra_documento">
<br>
            <form action="http://localhost/Volantes_Loteria/dados/documento.php" method="post" enctype="multipart/form-data"> 
                <input type="file" name="arquivo" id="Arquivo"><br><br>
                <input type="submit" value="Enviar"> 
                <input type="reset" value="Apagar">
            </form>
<br>
        </div>

    </div>
    

    <div class="base">

        <div><br>
            <h1>Arquivos Carregados:</h1>
        </div><br>

<?php


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "Volantes_Loteria";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

mysqli_select_db($dbname, $conn);

$query= sprintf("SELECT hors,dia FROM NUMEROS ");

$dados = mysql_query($query, $con) or die(mysql_error());

$linha = mysql_fetch_assoc($dados);


?>
        <div>
            <li><?php

            ?></li>
<br>
            <li>
            <?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['hors']?> / <?=$linha['dia']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysql_fetch_assoc($dados));
	// fim do if
	}
?>            </li>

<br>
        </div>

        <form action="/dados/apagardb.php" method="post">
        
            <button value="apag" type="submit">Apagar Documento</button><br><br>
        
        </form>

    
    

</body>
</html>