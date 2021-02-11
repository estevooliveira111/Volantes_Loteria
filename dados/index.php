<?php
session_start();
?>
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

        <li>A planilha tem que ser enviada no formato XML:<br> <a class="link_video" href="https://www.youtube.com/">Video para Exemplo<br> </a><br></li>
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
                <form action="" name="form" method="post" enctype="multipart/form-data">
                <?php if ($msg != false) echo "<div class=\"alert $class\" role=\"alert\">$msg</div>"; ?>
                    <input type="hidden" name="enviou" value="1">
                    <input id="file" type="file" name="arquivo" id="Arquivo"><br><br>
                    <input class="btn btn-primary" id="linkII" name="enviar" type="submit" value="Enviar">

                    
                <div id="caixa">

                <?php 

include "funcoes.php";
 
$msg = false;
 
if( isset($_POST['enviou']) && $_POST['enviou'] == 1 ){
 
    // arquivo
	$arquivo = $_FILES['arquivo'];
 
    // Tamanho máximo do arquivo (em Bytes)
    $tamanhoPermitido = 1024 * 1024 * 2; // 2Mb
 
    //Define o diretorio para onde enviaremos o arquivo
    $diretorio = "dados/xml/";
 
    // verifica se arquivo foi enviado e sem erros
    if( $arquivo['error'] == UPLOAD_ERR_OK ){
 
        // pego a extensão do arquivo
        $extensao = extensao($arquivo['name']);
 
        // valida a extensão
        if( in_array( $extensao, array("pdf") ) ){
 
            // verifica tamanho do arquivo
            if ( $arquivo['size'] > $tamanhoPermitido ){
 
                $msg = "<strong>Aviso!</strong> O arquivo enviado é muito grande, envie arquivos de até ".$tamanhoPermitido/MB." MB.";
                $class = "alert-warning";
 
            }else{
 
                // atribui novo nome ao arquivo
                $novo_nome  = md5(time()).".".$extensao;
 
                // faz o upload
                $enviou = move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
 
                if($enviou){
                    $msg = "<strong>Sucesso!</strong> Arquivo enviado corretamente.";
                    $class = "alert-success";
                }else{
                    $msg = "<strong>Erro!</strong> Falha ao enviar o arquivo.";
                    $class = "alert-danger";
                }
            }
 
        }else{
            $msg = "<strong>Erro!</strong> Somente arquivos PDF são permitidos.";
            $class = "alert-danger";
        }
 
    }else{
        $msg = "<strong>Atenção!</strong> Você deve enviar um arquivo.";
        $class = "alert-info";
    }
}
?>

                </div>

                </form>
            <br>
        </div>

    </div>

</body>
</html>