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

?>