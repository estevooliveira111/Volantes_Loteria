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
        header("Location: https://estevooliveira111.github.io/Volantes_Loteria/login/dados/index.html");

    }else{
        ##ERRO
        header("Location: https://estevooliveira111.github.io/Volantes_Loteria/login/index.html");

    }



}

?>