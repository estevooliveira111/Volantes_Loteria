<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria</title>
    <style>

*{
    background-color: peachpuff;
    color: rgb(51, 36, 24);
    text-align: center;
    font-size: 120%;
    padding: 0;
    margin: 0;
}

.base{
    border: solid;
    margin: 4%;
}

h1{
    border:solid;
    margin: 4%;
    font-size: 400%;
}

li{
    list-style: none;
}
    </style>

</head>

<body>

    <?php

        include 'conexao.php';
    
    ?>

    <h1 class="Title">Volantes Gerados</h1>

    <div class="base">
        <?php

    if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
    }else{

    echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
    echo "Conectou com sucesso";




    
    mysqli_close($conn);
}

    
        
        ?>
        </div>




</body>
</html>