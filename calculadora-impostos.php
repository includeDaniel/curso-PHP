<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Calculadora de Impostos</h1>
    </br></br>
    <form method="POST">
        Valor do Produto:</br></br>
        <input type="number" name="numero"></br></br>
        Taxa de impostos em (%):</br></br>
        <input type="number" name="porcentagem">
        </br></br>
        <input type="submit" value="calcular"></br></br>
    <form>
    <?php
        if(!empty($_POST['numero']) && !empty($_POST['porcentagem'])) {
            $n1 = $_POST['numero'];
            $n2 = $_POST['porcentagem'];

            $result = ($n1 * $n2) / 100;
            $valorP = $n1 - $result;
            echo "Valor do Produto: "."R$".$n1;
            echo "</br>";
            echo "Taxa de imposto: ".$n2."%";
            echo "</br>";
            echo "<hr>";
            echo "Imposto :".$result;
            echo "</br>";
            echo "Valor do produto :".$valorP;
        }

        
    ?> 
    </div>   
</body>
</html>