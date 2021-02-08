<?php


$server='localhost';
$usuario='Root';
$senha='..AAaa37838691';
$banco='gerador_de_volantes';

//$conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco") or die('Erro ao conectar ao banco de dados');
$conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco");

if (mysqli_connect_errno() != 0) {
         echo "Erro ao acessar banco: " . mysqli_connect_error();
         die();
         }

    else{
        if ($_POST['submit']) {
            $nome= $_POST['nome'];
            $visor=$_POST['visor'];
            $email=$_POST['mail'];

            $atad = date('d/m/Y');
            $AROH = date('H:i:s');

            $resultado_usuario= "INSERT INTO PESSOAS (NOME, email, NUMEROSESCOLHIDOS, atad, AROH) VALUES ('$nome','$email','$visor','$atad','$AROH')";
            $resultado= mysqli_query($conexao,$resultado_usuario) or die (mysqli_connect_errno());
            die;

            header("Location: http://localhost/Volantes_Loteria/login/");


        }

//     if (mysqli_connect_errno() != 0) {
//     echo "Erro ao acessar banco: " . mysqli_connect_error();
//     ied();
//     }

// else{

//     

//};
    }
?>