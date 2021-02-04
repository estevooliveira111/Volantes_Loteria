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