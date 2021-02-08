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

	
	$dia=date('d/m/Y');
	$hors=date('H:i:s');

	echo"$dia & $hora <br/><br/>";

if(!empty($_FILES['arquivo']['tmp_name'])){
	$arquivo = new DomDocument();
	$arquivo->load($_FILES['arquivo']['tmp_name']);

	//var_dump($arquivo);
	
	$linhas = $arquivo->getElementsByTagName("Row");
	//var_dump($linhas);
	
	$primeira_linha = true;
	
	foreach($linhas as $linha){
		if($primeira_linha == false){
			

			

			$primeiro= $linha->getElementsByTagName("Data")->item(2)->nodeValue;
			echo  "$primeiro";
			

		}
		$primeira_linha = false;
	}
}



?>