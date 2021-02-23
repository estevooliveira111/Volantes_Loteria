<?php

include 'conexao.php';

// forlumário base 

$linhas=$_POST['linhas'];
$colunas=$_POST['colunas'];

if (mysqli_connect_errno() != 0) {
         echo "Erro ao acessar banco: " . mysqli_connect_error();
         die();
         }

    else{
        
        if ($_POST['submit']) {
            


            $atad = date('d/m/Y');
            $AROH = date('H:i:s');

            $resultado_usuario= "INSERT INTO NUMEROS (LINHAS, COLUNAS) VALUES ('$linhas','$colunas')";

            $resultado= mysqli_query($conexao,$resultado_usuario) or die (mysqli_connect_errno());
            die;

            header("Location: http://localhost/Volantes_Loteria/login/dados/");


        }
    }



?>