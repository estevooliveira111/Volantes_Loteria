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
			
		$primeiro= $linha->getElementsByTagName("Cell")->item(2)->nodeValue;
		echo "-$primeiro<br/>";
		$segundo= $linha->getElementsByTagName("Cell")->item(3)->nodeValue;
		echo "-$segundo <br/>";
		$terceiro= $linha->getElementsByTagName("Cell")->item(4)->nodeValue;
		echo "-$terceiro<br/>";
		$quarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$sexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$setimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$oitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$nono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$decimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$vigesimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$trigesimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quadragesimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
		$quinquagesimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;	

			

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