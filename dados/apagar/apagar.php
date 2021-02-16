<?php

include 'conexao.php';

$valor=$_POST['Numeros'];

if($valor=='Numeros'){

  if($conn){

  $sql = 'DELETE FROM Numeros';

  mysqli_query($conn,$sql) or die('Erro ao tentar excluir registro');

  echo 'Cliente excluído';

  mysqli_close($conn);
  header('Location: http://localhost/Volantes_Loteria/dados/');

} else{
  die('Could not connect: ' . mysql_error());
}

header('Location: http://localhost/Volantes_Loteria/dados/');

}

?>