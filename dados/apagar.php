<?php

include 'conexao.php';

if(! $conn ){
  die('Could not connect: ' . mysql_error());}

$sql = 'DELETE FROM numeros';

mysql_select_db('gerador_de_volantes');

$retval = mysql_query( $conn, $sql );
if(! $retval )
{
  die('Could not delete data: ' . mysql_error());
}
echo "Deleted data successfully\n";
mysql_close($conn);
//header('Location: http://localhost/Volantes_Loteria/dados/')
?>



?>