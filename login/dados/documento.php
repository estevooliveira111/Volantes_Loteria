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



$server='localhost';
$usuario='MASTERUSUARIO';
$senha='37838691WWWww.';
$banco='gerador_de_volantes';

    //$conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco") or die('Erro ao conectar ao banco de dados');
    $conexao = mysqli_connect("$server");
    if (mysqli_connect_errno() != 0) {
    //echo "Erro ao acessar banco: " . mysqli_connect_error();
    die();

    mysqli_select_db("$banco") or die( 'Erro na seleção do banco' );


    $queryone ="SELECT NUMEROSDOXML, FROM NUMEROSDOXML";

        $NOME =mysqli_query($conexao,$queryone);


}


	?>