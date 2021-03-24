<?php

include 'conexao.php';

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

            header("Location: https://estevooliveira111.github.io/Volantes_Loteria/");


        }
    }
?>