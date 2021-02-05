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
			echo  '$primeiro<br/>';
			// $segundo= $linha->getElementsByTagName("Cell")->item(3)->nodeValue;
			// echo  '$segundo<br/>';
			// $terceiro= $linha->getElementsByTagName("Cell")->item(4)->nodeValue;
			// echo  '$terceiro<br/>';
			// $quarto= $linha->getElementsByTagName("Cell")->item(5)->nodeValue;
			// echo  '$quarto<br/>';
			// $quinto= $linha->getElementsByTagName("Cell")->item(6)->nodeValue;
			// echo  '$quinto<br/>';
			// $sexto= $linha->getElementsByTagName("Cell")->item(7)->nodeValue;
			// echo  '<br/>';
			// $setimo= $linha->getElementsByTagName("Cell")->item(8)->nodeValue;
			// echo  '<br/>';
			// $oitavo= $linha->getElementsByTagName("Cell")->item(9)->nodeValue;
			// echo  '<br/>';
			// $nono= $linha->getElementsByTagName("Cell")->item(10)->nodeValue;
			// echo "$nono<br/>";
			// $decimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $decimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $decimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $decimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $decimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $decimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $decimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $decimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $decimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $vigesimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $trigesimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quadragesimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimoprimeiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimosegundo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimoterceiro= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimoquarto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimoquinto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimosexto= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimosetimo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimooitavo= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo  '<br/>';
			// $quinquagesimonono= $linha->getElementsByTagName("Cell")->item()->nodeValue;
			// echo '$quinquagesimonono';

			

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