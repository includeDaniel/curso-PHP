<?php

$dsn ="mysql:dbname=conta-bancaria;host=localhost";
$dbuser ="root";
$dbpass = "";
 try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $sql ="SELECT * FROM contas WHERE senha ='12121212' ";
    $sql = $pdo -> query($sql);

    if($sql -> rowCount() > 0 ) {
        
        foreach($sql-> fetchALL() as $contas ) {
            echo "Titular: ".$contas["titular"]."-".$contas["senha"]."<br/>";
        }

    } else {
        echo "Não ha contas cadastradas";
    }

 } catch(PDOexception $e) {
    echo "falhou".$e->getMessage();
 }

?>