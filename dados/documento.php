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

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "Volantes_Loteria";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	
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
			

			

			$primeiro= $linha->getElementsByTagName("Cell")->item(2)->nodeValue;
			echo  "$primeiro";
			$segundo= $linha->getElementsByTagName("Cell")->item(3)->nodeValue;
			echo  "$segundo ";
			$terceiro= $linha->getElementsByTagName("Cell")->item(4)->nodeValue;
			echo  "$terceiro ";
			$quarto= $linha->getElementsByTagName("Cell")->item(5)->nodeValue;
			echo  "$quarto ";
			$quinto= $linha->getElementsByTagName("Cell")->item(6)->nodeValue;
			echo  "$quinto ";
			$sexto= $linha->getElementsByTagName("Cell")->item(7)->nodeValue;
			echo  "$sexto ";
			$setimo= $linha->getElementsByTagName("Cell")->item(8)->nodeValue;
			echo  "$setimo ";
			$oitavo= $linha->getElementsByTagName("Cell")->item(9)->nodeValue;
			echo  "$oitavo ";
			$nono= $linha->getElementsByTagName("Cell")->item(10)->nodeValue;
			echo "$nono ";

			$decimoprimeiro= $linha->getElementsByTagName("Cell")->item(11)->nodeValue;
			echo  "$decimoprimeiro ";
			$decimosegundo= $linha->getElementsByTagName("Cell")->item(12)->nodeValue;
			echo  "$decimosegundo ";
			$decimoterceiro= $linha->getElementsByTagName("Cell")->item(13)->nodeValue;
			echo  "$decimoterceiro ";
			$decimoquarto= $linha->getElementsByTagName("Cell")->item(14)->nodeValue;
			echo  "$decimoterceiro ";
			$decimoquinto= $linha->getElementsByTagName("Cell")->item(15)->nodeValue;
			echo  "$decimoquinto ";
			$decimosexto= $linha->getElementsByTagName("Cell")->item(16)->nodeValue;
			echo  "$decimosexto ";
			$decimosetimo= $linha->getElementsByTagName("Cell")->item(17)->nodeValue;
			echo  "$decimosetimo ";
			$decimooitavo= $linha->getElementsByTagName("Cell")->item(18)->nodeValue;
			echo  "$decimooitavo ";
		 	$decimonono= $linha->getElementsByTagName("Cell")->item(19)->nodeValue;
			echo  "$decimonono ";
			$vigesimoprimeiro= $linha->getElementsByTagName("Cell")->item(20)->nodeValue;
			echo  "$vigesimoprimeiro ";

			$vigesimosegundo= $linha->getElementsByTagName("Cell")->item(21)->nodeValue;
			echo  "$vigesimosegundo ";
			$vigesimoterceiro= $linha->getElementsByTagName("Cell")->item(22)->nodeValue;
			echo  "$vigesimoterceiro ";
			$vigesimoquarto= $linha->getElementsByTagName("Cell")->item(23)->nodeValue;
			echo  "$vigesimoquarto ";
			$vigesimoquinto= $linha->getElementsByTagName("Cell")->item(24)->nodeValue;
			echo  "$vigesimoquinto ";
			$vigesimosexto= $linha->getElementsByTagName("Cell")->item(25)->nodeValue;
			echo  "$vigesimosexto ";
			$vigesimosetimo= $linha->getElementsByTagName("Cell")->item(26)->nodeValue;
			echo  "$vigesimosetimo ";
			$vigesimooitavo= $linha->getElementsByTagName("Cell")->item(27)->nodeValue;
			echo  "$vigesimooitavo ";
			$vigesimonono= $linha->getElementsByTagName("Cell")->item(28)->nodeValue;
			echo  "$vigesimooitavo ";
			$trigesimoprimeiro= $linha->getElementsByTagName("Cell")->item(29)->nodeValue;
			echo  "$trigesimoprimeiro ";
			$trigesimosegundo= $linha->getElementsByTagName("Cell")->item(30)->nodeValue;
			echo  "$trigesimosegundo ";

			$trigesimoterceiro= $linha->getElementsByTagName("Cell")->item(31)->nodeValue;
			echo  "$trigesimoterceiro ";
			$trigesimoquarto= $linha->getElementsByTagName("Cell")->item(32)->nodeValue;
			echo  "$trigesimoquarto ";
			$trigesimoquinto= $linha->getElementsByTagName("Cell")->item(33)->nodeValue;
			echo  "$trigesimoquinto ";
			$trigesimosexto= $linha->getElementsByTagName("Cell")->item(34)->nodeValue;
			echo  "$trigesimosexto ";
			$trigesimosetimo= $linha->getElementsByTagName("Cell")->item(35)->nodeValue;
			echo  "$trigesimosetimo ";
			$trigesimooitavo= $linha->getElementsByTagName("Cell")->item(36)->nodeValue;
			echo  "$trigesimooitavo ";
			$trigesimonono= $linha->getElementsByTagName("Cell")->item(37)->nodeValue;
			echo  "$trigesimonono ";
			$quadragesimoprimeiro= $linha->getElementsByTagName("Cell")->item(38)->nodeValue;
			echo  "$quadragesimoprimeiro ";
			$quadragesimosegundo= $linha->getElementsByTagName("Cell")->item(39)->nodeValue;
			echo  "$quadragesimosegundo ";
			$quadragesimoterceiro= $linha->getElementsByTagName("Cell")->item(40)->nodeValue;
			echo  "$quadragesimoterceiro";

			$quadragesimoquarto= $linha->getElementsByTagName("Cell")->item(41)->nodeValue;
			echo  "$quadragesimoquarto ";
			$quadragesimoquinto= $linha->getElementsByTagName("Cell")->item(42)->nodeValue;
			echo  "$quadragesimoquinto ";
			$quadragesimosexto= $linha->getElementsByTagName("Cell")->item(43)->nodeValue;
			echo  "$quadragesimosexto ";
			$quadragesimosetimo= $linha->getElementsByTagName("Cell")->item(44)->nodeValue;
			echo  "$quadragesimosetimo ";
			$quadragesimooitavo= $linha->getElementsByTagName("Cell")->item(45)->nodeValue;
			echo  "$quadragesimooitavo ";
			$quadragesimonono= $linha->getElementsByTagName("Cell")->item(46)->nodeValue;
			echo  "$quadragesimonono ";
			$quinquagesimoprimeiro= $linha->getElementsByTagName("Cell")->item(47)->nodeValue;
			echo  "$quinquagesimoprimeiro ";
			$quinquagesimosegundo= $linha->getElementsByTagName("Cell")->item(48)->nodeValue;
			echo  "$quinquagesimosegundo ";
			$quinquagesimoterceiro= $linha->getElementsByTagName("Cell")->item(49)->nodeValue;
			echo  "$quinquagesimoterceiro ";
			$quinquagesimoquarto= $linha->getElementsByTagName("Cell")->item(50)->nodeValue;
			echo  "$quinquagesimoquarto ";

			$quinquagesimoquinto= $linha->getElementsByTagName("Cell")->item(51)->nodeValue;
			echo  "$quinquagesimoquinto ";
			$quinquagesimosexto= $linha->getElementsByTagName("Cell")->item(52)->nodeValue;
			echo  "$quinquagesimosexto ";
			$quinquagesimosetimo= $linha->getElementsByTagName("Cell")->item(53)->nodeValue;
			echo  "$quinquagesimosetimo ";
			$quinquagesimooitavo= $linha->getElementsByTagName("Cell")->item(58)->nodeValue;
			echo  "$quinquagesimooitavo ";
			$quinquagesimonono= $linha->getElementsByTagName("Cell")->item(60)->nodeValue;
			echo "$quinquagesimonono ";

				// Sim, eu sei é muito código, mas foi o melhor jeito que pensei. Fiz isso fazendo somas de strings no Pyton, mas pode ficar calmo o código é simples, até fiz tudo em portugues para entender melhor;

			//Inserir o usuário no banco
			$result_usuario = "INSERT INTO NUMEROS (dia,hors,primeirosegundo,terceiro,quarto,quinto,sexto,setimo,oitavo,nono,decimo,decimoprimeiro,decimosegundo,decimoterceiro,decimoquarto,decimoquinto,decimosexto,decimosetimo,decimooitavo,decimononovigesimo,vigesimoprimeiro,vigesimosegundo,vigesimoterceiro,vigesimoquarto,vigesimoquinto,vigesimosexto,vigesimosetimo,vigesimooitavo,vigesimonono,trigesimo,trigesimoprimeiro,trigesimosegundo,trigesimoterceiro,trigesimoquarto,trigesimoquinto,trigesimosexto,trigesimosetimo,trigesimooitavo,trigesimonono,quadragesimo,quadragesimoprimeiro,quadragesimosegundo,quadragesimoterceiro,quadragesimoquarto,quadragesimoquinto,quadragesimosexto,quadragesimooitavo,quadragesimosetimo,quadragesimooitavo,quadragesimonono,quinquagesimo,quinquagesimoprimeiro,quinquagesimosegundo,quinquagesimoterceiro,quinquagesimoquarto,quinquagesimoquinto,quinquagesimosexto,quinquagesimosetimo,quinquagesimooitavo,quinquagesimonono) VALUES ('$dia','$hora','$primeiro'$segundo','$terceiro','$quarto','$quinto','$sexto','$setimo','$oitavo','$nono','$decimo','$decimoprimeiro','$decimosegundo','$decimoterceiro','$decimoquarto','$decimoquinto','$decimosexto','$decimosetimo','$decimooitavo','$decimonono''$vigesimo','$vigesimoprimeiro','$vigesimosegundo','$vigesimoterceiro','$vigesimoquarto','$vigesimoquinto','$vigesimosexto','$vigesimosetimo','$vigesimooitavo','$vigesimonono','$trigesimo','$trigesimoprimeiro','$trigesimosegundo','$trigesimoterceiro','$trigesimoquarto','$trigesimoquinto','$trigesimosexto','$trigesimosetimo','$trigesimooitavo','$trigesimonono','$quadragesimo','$quadragesimoprimeiro','$quadragesimosegundo','$quadragesimoterceiro','$quadragesimoquarto','$quadragesimoquinto','$quadragesimosexto','$quadragesimooitavo','$quadragesimosetimo','$quadragesimooitavo','$quadragesimonono','$quinquagesimo','$quinquagesimoprimeiro','$quinquagesimosegundo','$quinquagesimoterceiro','$quinquagesimoquarto','$quinquagesimoquinto','$quinquagesimosexto','$quinquagesimosetimo','$quinquagesimooitavo','$quinquagesimonono')";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			

		}
		$primeira_linha = false;
	}
}



?>