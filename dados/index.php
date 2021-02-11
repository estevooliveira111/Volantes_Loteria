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

    if ($_POST['submit']){
        echo'lidar com arquivos';

    }else{
        echo'<br/>Nenhum arquivo enviado<br/><br/>';

    }

    ?>

    </div>

</body>
</html>