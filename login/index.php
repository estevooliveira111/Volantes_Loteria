<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/login/script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>


    

    

    <div>
<br>

            <h1>Login:</h1><br>

<form enctype="multipart/form-data" method="post" action=""><br>
	
	<input type="text" placeholder="Usuario"><br><br>
	<input type="password" name="password" placeholder="Senha"><br><br>
	<input type="submit" name="env">

</form>

	
	
<?php

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
				header("Location: pagina.php");

			}else{
				##ERRO
				echo "Senha incorreta.";

			}



		}

	?>



		

	

<br>
<br>
<br>


    </div>

</body>
</html>