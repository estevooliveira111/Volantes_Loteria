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

    <div class="caixa">

        <div class="letra_titulo">

            <h1>Gerador de Volantes para Loterias <strong><br>(CONTROLADOR)</strong><br></h1>

        </div>

    </div>


    <div class="caixa">

        <br><a class="link" href="http://localhost/Volantes_Loteria/Volantes/">Volantes Gerados</a>

        <a class="link" href="http://localhost/Volantes_Loteria/">Início</a><br><br>
            
    </div>

    <script>

    function Mudarestado(el) {
      var display = document.getElementById(el).style.display;
      if (display == "none")
        document.getElementById(el).style.display = 'block';
      else
        document.getElementById(el).style.display = 'none';
    }
    </script>

    <div class="caixad">

                <br><h2>Base de Dados Mega Sena:</h2><br>
                <button type="button" onclick="Mudarestado('minhaDivI')" class="link">Exibir Dados Existentes</button>
                <button type="button" onclick="Mudarestado('minhaDivII')" class="link">Fazer Base de Dados</button><br><br>

        </form> 

    </div>    

    <div class="caixa" id="minhaDivI" style="display:none">

        <table class="botaoi" border="2">
    
            <h2>Base de Dados Existentes:</h2>
    
            <tr>
                <th>Id_Dados</th>
                <th>Hora</th>
                <th>Data</th>
                <th>Dezenas Escolhidas</th>
                <th>xx</th>
            </tr>
    
            <tr>
                <th>xx</th>
                <th>xx</th>
                <th>xx</th>
                <th>xx</th>
                <th>xx</th>
            </tr>
    
            <tr>
                <th>xx</th>
                <th>xx</th>
                <th>xx</th>
                <th>xx</th>
                <th>xx</th>
            </tr>
    
            <tr>
                <th>Números</th>
                <th>xx</th>
                <th>xx</th>
                <th>xx</th>
                <th>xx</th>
            </tr>
    
        </table>
    </div>



    <div class="caixa" id="minhaDivII" style="display:none">

        <BR><h1>Fazer Base de Dados:</h1>
        

        <form id="formulario">

            <br><fieldset>

            <table border="2">

                <legend> Modelo </legend><br>

                    <tr>                
                        <th><label for="linhas">Linhas:</label></th>    
                        <th><input id="linhas" type="number"><br></th></th>

                        <th><label for="colunas">Colunas:</label></th>
                        <th><input type="number"></th>
                        
                        <th><label for="maximo">Máximo:</label></th>
                        <th><input type="number" name="maximo"></th>
                    </tr>

            </table>

            <table border="2">

                    <tr>
                            <th>Escolher Dezenas:</th>
                            <th><input type="checkbox" id="10"><label for="10"> 10</label></th>
                            <th><input type="checkbox" id="20"><label for="20"> 20</label></th>
                            <th><input type="checkbox" id="30"><label for="30"> 30</label></th>
                            <th><input type="checkbox" id="40"><label for="40"> 40</label></th>
                            <th><input type="checkbox" id="50"><label for="50"> 50</label></th>
                            <th><input type="checkbox" id="60"><label for="60"> 60</label></th>
                            <th><input type="checkbox" id="70"><label for="70"> 70</label></th>
                            <th><input type="checkbox" id="80"><label for="80"> 80</label></th>
                            <th><input type="checkbox" id="90"><label for="90"> 90</label></th>
                            <th><input type="checkbox" id="00"><label for="00"> 00</label></th>
                    </tr>

                    <tr>
                            <th>Múltiplos das  Dezenas</th>
                            <th><input type="checkbox" id="1"><label for="1"> 1</label></th>
                            <th><input type="checkbox" id="2"><label for="2"> 2</label></th>
                            <th><input type="checkbox" id="3"><label for="3"> 3</label></th>
                            <th><input type="checkbox" id="4"><label for="4"> 4</label></th>
                            <th><input type="checkbox" id="5"><label for="5"> 5</label></th>
                            <th><input type="checkbox" id="6"><label for="6"> 6</label></th>
                            <th><input type="checkbox" id="7"><label for="7"> 7</label></th>
                            <th><input type="checkbox" id="8"><label for="8"> 8</label></th>
                            <th><input type="checkbox" id="9"><label for="9"> 9</label></th>
                            <th><input type="checkbox" id="0"><label for="0"> 0</label></th>
                    </tr>

                    <tr>
                        <th>Qunatidade de Números</th>

                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>

                        </th>

                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>

                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>

                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>

                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>

                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>

                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>

                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>
                        
                        <th>
                            <select name="" id="">

                                <optgroup>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>

                        <th>
                            <select name="" id="">

                                <optgroup>
                                    <option value="0">0</option>

                                </optgroup>

                            </select>
                        </th>

                    </tr>

                </table>

                <input type="text" id="campo">

            </fieldset>

            <br><input type="submit" class="link" value="Enviar"><br><br>


        </form>

    </div>

    <div class="caixa">

        <script>

var form = document.getElementById('formulario');

var linhas= document.getElementById('linhas');
var
var
var
var
var
var
var
var
var
var
var
var
var

var campo = document.getElementById('campo');

form.addEventListener('submit', function(e) {
    // alerta o valor do campo
    alert(campo.value);

    // impede o envio do form
    e.preventDefault();
});

        </script>

    </div>

</body>
</html>