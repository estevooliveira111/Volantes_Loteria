<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>    
    <title>Lotería</title>

    <?php

$nome= $_POST['nome'];
$email=$_POST['email'];
$visor=$_POST['visor'];
$atad = date('d/m/Y');
$AROH = date('H:i:s');

$server='localhost';
$usuario='MASTERUSUARIO';
$senha='37838691WWWww.';
$banco='gerador_de_volantes';

    //$conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco") or die('Erro ao conectar ao banco de dados');
    $conexao = mysqli_connect("$server", "$usuario", "$senha", "$banco");
    if (mysqli_connect_errno() != 0) {
    echo "Erro ao acessar banco: " . mysqli_connect_error();
    die();
}

else{

    $resultado_usuario= "INSERT INTO PESSOAS(NOME, email, NUMEROSESCOLHIDOS, atad, AROH) VALUES ('$nome','$email','$visor','$atad','$AROH')";
    $resultado= mysqli_query($conexao,$resultado_usuario);
        header("Location: .$http/index.html");
    };
?>
    
</head>
<body>

    <div class="titulo">

        <div class="letra_titulo">

            <h1>Gerador de Volantes para <a class="link" href="https://estevooliveira111.github.io/Volantes_Loteria/login/">L</a>otería</h1>

        </div>

    </div>

    <form method="POST" action="https://estevooliveira111.github.io//documento.php" name="calc">

    <div class="corpo">

        <div>
            <br>
                <label for="name">Nome</label>
                <input type="text" name="nome"><br><br>
                
                <label for="email">E-mail</label>
                <input type="email" name="mail"><br><br>

            <br><br>

        </div>

    </div>

    <div>

        <input readonly="" type="text" name="visor"/>



    </div>

    <div class="númerosfixos">

        <table border="1">

                <tr>              

    <br><br>

                            <h2><button type="submit">Gerar Jogo</button>

                            <button type="reset">Apagar Jogo</button></h2>

                <td>
                    <input type="button" id="um" value=" 01" onclick="botao(value);" />
                </td>

                <td>
                            <input class="boto" type="button" id="dois" value=" 02" onclick="botao(value);" />
                </td>

                <td>
                            <input class="boto" type="button" id="tres" value=" 03" onclick="botao(value);" />
                </td>

                <td>
                            <input class="boto" type="button" id="quatro" value=" 04" onclick="botao(value);" />
                </td>

                <td>
                            <input class="boto" type="button" id="cinco" value=" 05" onclick="botao(value);" />
                </td>

                <td>
                             <input class="boto" type="button" id="seis" value=" 06" onclick="botao(value);" />
                </td>
                
        </table>


        <table border="1">

                    <td>
                                <input type="button" id="um" value=" 01" onclick="botao(value);" />
                    </td>
    
                    <td>
                                <input type="button" id="dois" value=" 02" onclick="botao(value);" />
                    </td>
    
                    <td>
                                <input type="button" id="tres" value=" 03" onclick="botao(value);" />
                    </td>
    
                    <td>
                                <input type="button" id="quatro" value=" 04" onclick="botao(value);" />
                    </td>
    
                    <td>
                                <input type="button" id="cinco" value=" 05" onclick="botao(value);" />
                    </td>
    
                    <td>
                                 <input type="button" id="seis" value=" 06" onclick="botao(value);" />
                    </td>
    
                    </tr>
    
                 </table>

                 <table border="1">

                    <tr>
        
                    <td>
    
                        <input type="button" id="um" value=" 01" onclick="botao(value);" />
                    </td>
    
                    <td>
                                <input type="button" id="dois" value=" 02" onclick="botao(value);" />
                    </td>
    
                    <td>
                                <input type="button" id="tres" value=" 03" onclick="botao(value);" />
                    </td>
    
                    <td>
                                <input type="button" id="quatro" value=" 04" onclick="botao(value);" />
                    </td>
    
                    <td>
                                <input type="button" id="cinco" value=" 05" onclick="botao(value);" />
                    </td>

                    <td>
                        <input type="button" id="seis" value=" 06" onclick="botao(value);" />
                    </td>
                    
            </table>
    
    
    
            <table border="1">
    
                        <td>
                                    <input type="button" id="um" value=" 01" onclick="botao(value);" />
                        </td>
        
                        <td>
                                    <input type="button" id="dois" value=" 02" onclick="botao(value);" />
                        </td>
        
                        <td>
                                    <input type="button" id="tres" value=" 03" onclick="botao(value);" />
                        </td>
        
                        <td>
                                    <input type="button" id="quatro" value=" 04" onclick="botao(value);" />
                        </td>
        
                        <td>
                                    <input type="button" id="cinco" value=" 05" onclick="botao(value);" />
                        </td>
        
                        <td>
                                     <input type="button" id="seis" value=" 06" onclick="botao(value);" />
                        </td>
        
                        </tr>
        
                     </table>


                 <button name="enviar" type="submit">Fazer Jogo</button>

                 <br><br>

    </form>

            <button>    Nada1</button>
<input type="text">
        


    
</body>
</html>