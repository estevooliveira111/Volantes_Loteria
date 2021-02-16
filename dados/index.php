<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/dados/script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Loteria</title>

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

            <a class="link" href="http://localhost/Volantes_Loteria/">Início</a><br><br>
            
        </div>

    </div>




    <div id="caixa" class="help"><br>

    <h2>Orientação:</h2><br>

        <li>A planilha tem que ser enviada no formato XML:<br> <a class="link_video" href="https://www.youtube.com/">Video para Exemplo<br> </a><br></li>
        <li>Antes de adicionar novos número</li><br>
        <li>Apagar os números antes adicionados</li><br>

    </div>




    <div id="caixa" class="arquivocarregado">

        <form action="/dados/apagar/apagar.php" method="post"></form>

            <br><p>Volantes carregados, no servidor <button id="verde">botão</button> em <strong id="verde">VERDE</strong></p><br><br>
        
            <p>Nenhum Volantes no servidor, <button id="vermelho">botão</button> em <strong id="vermelho">VERMELHO</strong></p><br>


            <?php

            include 'conexao.php';

            $arquivo = mysqli_query($conn, "SELECT * FROM Numeros");

            if (mysqli_num_rows($arquivo) == '0'){

              echo  '<button id="vermelho">botão</button><br /><br />';

            } else {

                echo '<button id="verde">botão</button><br /><br />';

            }

            ?>



            <button type="submit" class="link" id="butao">Apagar Número</button><br><br>



        </form>

    </div>




    <div id="caixa" class="documento">

        <div class="letra_documento">


            <br>
                <form action="/dados/enviardados/dados.php" name="form" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="enviou" value="1">
                    <input id="file" type="file" name="arquivo" id="Arquivo"><br><br>
                    <input class="btn btn-primary" id="linkII" name="enviar" type="submit" value="Enviar">

                </form>

            <br>
        </div>

    </div>

</body>
</html>