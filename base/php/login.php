<?php

$usuario='administrador';
$senhacerta = 12345;

    ## SENHA DIGITADA
    $password = $_POST['password'];

    $usuariocerto=$_POST['usuario'];

    ##VERIFICA SE A SENHA É A MESMA.
    if(( $password == $senhacerta )&&( $usuariocerto == $usuario)) {
        ##CRIA A SESSÃO
        $_SESSION['password'] = $password;
        ##REDIRECIONA
        header("Location: https://estevooliveira111.github.io/Volantes_Loteria/login/dados/");

    }else{
        ##ERRO
        header("Location: https://estevooliveira111.github.io/Volantes_Loteria/login/index.html");

    }

?>
