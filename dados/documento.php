<?

$dados = $_FILES['arquivo'];
$xml= simplexml_load_string($dados);

	foreach($xml->Row->Row as $Row){
		echo $Row->Cell;
	};


?>