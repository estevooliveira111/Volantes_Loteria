<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loteria</title>

<!--
    Arquivo carregado para documento "processo.php"  no metodo "method="post"
        variáveis:
            Arquivo  tipo:"type="file"", nome:"name="arquivo"""
-->

</head>
<body>

    <div id="caixa" class="titulo">

        <div class="letra_titulo">

            <h1>Gerador de Volantes para Loterias <strong><br>(CONTROLADOR)</strong><br></h1>

        </div>

    </div>


    <div id="caixa" class="titulo_dos_links">

        <div class="letra_link"><br>

            <a  class="link" href="http://localhost/Volantes_Loteria/Volantes/">Volantes Gerados</a>

            <a class="link" href="http://localhost/Volantes_Loteria/">Inicio</a><br><br>
            
        </div>

    </div>

    <div id="caixa" class="help"><br>

    <h2>Orientação:</h2><br>

        <li>A planilha tem que ser enviada no formato XML:<br> <a class="link_video" href="http">Video para Exemplo<br> </a><br></li>
        <li>Antes de adicionar novos número</li><br>
        <li>Apagar os números antes adicionados</li><br>
    
        

    </div>

    <div id="caixa" class="arquivocarregado">

        <form action="apagar.php" method="post"></form>

            <br><p>Volantes carregados, no servidor <button id="verde">botão</button> em <strong id="verde">VERDE</strong></p><br><br>
        
            <p>Nenhum Volantes no servidor, <button id="vermelho">botão</button> em <strong id="vermelho">VERMELHO</strong></p><br>

            <button id="butao"><a class="link">Botão</a></button><br><br>

            <button type="submit" id="butao"><a class="link" href="apagar.php">Apagar Número</a></button><br><br>

        </form>

    </div>


    <div id="caixa" class="documento">

        <div class="letra_documento">
<br>
                <form action="http://localhost/Volantes_Loteria/dados/index.php" method="post" enctype="multipart/form-data"> 
                    <input id="file" type="file" name="arquivo" id="Arquivo"><br><br>
                    <input class="linkII" name="enviar" type="submit" value="Enviar"> 
                    <input class="linkII" name="apagar" type="reset" value="Apagar">
                </form>
<br>
        </div>

    </div>

    <div id='caixa'>

    <?php

    include 'conexao.php';

    $arquiivo = $_FILES["arquivo"]["tmp_name"]; 
    $tamanho = $_FILES["arquivo"]["size"];
    $tipo    = $_FILES["arquivo"]["type"];
    $nome  = $_FILES["arquivo"]["name"];
    $titulo  = $_POST["titulo"];

    if ( $arquivo != "none" ){
    $fp = fopen($arquivo, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp); 
    
    if($conn){

        $sql="INSERT INTO arquivos VALUES (0,'$nome','$titulo','$conteudo','$tipo')";
        mysqli_query($conn,$sql) or die('Erro');

        $resultado_usuario= "INSERT INTO PESSOAS (Nome, tamanho, tipo, arquivo, titulo) VALUES ('$arquiivo','$tamanho','$tipo','$nome','$titulo')";
        $resultado= mysqli_query($conexao,$resultado_usuario) or die (mysqli_connect_errno());
        die;

    
        mysqli_close($conn);
        header('Location: http://localhost/Volantes_Loteria/dados/');
    
    } else{
      die('Could not connect: ' . mysql_error());
    }
}
    ?>

    </div>

</body>
</html>