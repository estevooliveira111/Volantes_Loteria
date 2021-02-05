<?php

if(isset($_POST['env'])){

    //$usuario = 'Administrador';
    ##SENHA PADRAO:
    $senhacerta = 1234;

    ## SENHA DIGITADA
    $password = $_POST['password'];

    $usuariocerto=$_POST['usuario'];

    ##VERIFICA SE A SENHA É A MESMA.
    if(( $password == $senhacerta )&&( $usuariocerto == $usuario)) {

        ##CRIA A SESSÃO
        $_SESSION['password'] = $password;
        ##REDIRECIONA
        header("Location: https://estevooliveira111.github.io/Volantes_Loteria/login/dados/index.html");

    }else{
        ##ERRO
        header("Location: https://estevooliveira111.github.io/Volantes_Loteria/login/index.html");

    }



}else{
    ##ERRO
    header("Location: https://estevooliveira111.github.io/Volantes_Loteria/login/index.html");

}

?>
