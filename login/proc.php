<?php

if(isset($_POST['env'])){

    //$usuario = 'Administrador';
    ##SENHA PADRAO:
    $usuario='Administrador';  $retval = mysql_query( $conn, $sql );
    if(!$retval)
      {die('Could not delete data: ' . mysql_error());
        }
  
      echo "Deleted data successfully\n";
      mysql_close($conn);
  
    $senhacerta = 1234;

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



}else{
    ##ERRO
    header("Location: http://localhost/Volantes_Loteria/login/index.html");

}

?>
