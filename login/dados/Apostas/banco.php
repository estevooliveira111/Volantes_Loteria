<?php
$servidor='localhost';
$usuario='MASTERUSUARIO';
$senha='37838691WWWww.';
$database='';

$conn= mysqli_connect($servidor, $usuario, $senha, $database);
mysqli_select_db('gerador_de_volantes', $conn);


     if(mysqli_connect_errno($conn)){
         echo"Problemas";
         die();
     }

?>