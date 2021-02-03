<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/login/script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

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

<body>


    

    

    <div>
<br>

            <h1>Login:</h1><br>

<form enctype="multipart/form-data" method="post" action=""><br>
	
	<input type="text" placeholder="Usuario"><br><br>
	<input type="password" name="password" placeholder="Senha"><br><br>
	<input type="submit" name="env">

</form>
	

<br>
<br>
<br>


    </div>

</body>
</html>