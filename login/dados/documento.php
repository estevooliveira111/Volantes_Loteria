<?php
	//$dados = $_FILES['arquivo'];
	//var_dump($dados);
	
	//if(!empty($_FILES['arquivo']['tmp_name'])){
	//	$arquivo = new DomDocument();
	//	$arquivo->load($_FILES['arquivo']['tmp_name']);
	//	//var_dump($arquivo);
	//	
	//	$linhas = $arquivo->getElementsByTagName("Row");
	//	//var_dump($linhas);


	$temporario = $_FILES["Arquivo"]["tmp_name"];

	$xml = simplexml_load_file($temporario);


	$xml = new DOMDocument();

	$xml->load($_["Arquivo"]["tmp_name"]);

		var_dump($xml);

//		$linha = $xml->getElementsByTagName("Row");


//		var_dump($linha);
//
//	foreach ( $linha as $linha){
//			$n = $linha->getElementsByTagName("Data") ->item(0)->nodeValue;
//			echo "Nome: $n";
//		}

	?>