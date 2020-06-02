<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Digite um array</h1>
<form method="POST">
    </br>
    </br>
    <input type="text" name="numero"/>
    </br>
    <input type="submit"  value="Enviar"/>
    <?php
        if(!empty($_POST['numero'])) {
            $numero = $_POST['numero'];

            $numero2 = explode(" ", $numero);
            sort($numero2);

            echo "<pre>";
            print_r($numero2);
        }
    ?>
</form>
</body>
</html>