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

	//var_dump($arquivo);
	
	$linhas = $arquivo->getElementsByTagName("Row");
	//var_dump($linhas);
	
	$primeira_linha = true;
	
	foreach($linhas as $linha){
		if($primeira_linha == false){
			
			$primeiro = $linha->getElementsByTagName("Cell")->item(2)->nodeValue;
			echo "- $tercerio<br/>";
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