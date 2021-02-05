<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>nn</title>
</head>
<body>
	
</body>
</html>

<?php

if(!empty($_FILES['arquivo']['tmp_name'])){
	$arquivo = new DomDocument();
	$arquivo->load($_FILES['arquivo']['tmp_name']);
	var_dump($arquivo);
	
	$linhas = $arquivo->getElementsByTagName("Row");
	//var_dump($linhas);
	
	$primeira_linha = true;
	
	foreach($linhas as $linha){
		if($primeira_linha == false){
			$nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
			echo "Nome: $nome <br>";
			
			$email = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
			echo "E-mail: $email <br>";
			
			$niveis_acesso_id = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
			echo "Nivel de Acesso: $niveis_acesso_id <br>";
			
			
			
		}
		$primeira_linha = false;
	}
}

	// $xml = simplexml_load_file($arquivo);

	// foreach($xml->children() as $Worksheet) {
	// 	echo $Worksheet->Row;
	// }


	// $dados = $_FILES['arquivo'];
	// var_dump($dados);
	
	// if(!empty($_FILES['arquivo']['tmp_name'])){
	// 	$arquivo = new DomDocument();
	// 	$arquivo->load($_FILES['arquivo']['tmp_name']);
	// 	var_dump($arquivo);
		
	// 	$linhas = $arquivo->getElementsByTagName("Row");
	// 	var_dump($linhas);

?>