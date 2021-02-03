<?php 
	##INICIA A SESSÃO
	session_start(); 

	##CASO NÃO EXISTA SESSÃO RETORNA A PAGINA DE LOGIN.
	if(!isset($_SESSION['password']) == true){

		unset($_SESSION['password']);
		header("Location: .$http/dados/index.html");

	}
	else{
		header("Location: .$http/dados/index.html");

	}



if(isset($_POST['env'])){

	##SENHA PADRAO:
	$default_password = 1234;
	## SENHA DIGITADA
	$password = $_POST['password'];

	##VERIFICA SE A SENHA É A MESMA.
	if( $password == $default_password ){

		##CRIA A SESSÃO
		$_SESSION['password'] = $password;
		##REDIRECIONA
		header("Location: .$http/login/dados/index.html");

	}else{
		##ERRO
		header("Location: .$http/login/index.html");

	}



}

?>