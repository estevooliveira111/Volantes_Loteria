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
        header("Location: http://localhost/Volantes_Loteria/dados/");

    }else{
        ##ERRO
        header("Location: http://localhost/Volantes_Loteria/login/index.html");

    }

?>
