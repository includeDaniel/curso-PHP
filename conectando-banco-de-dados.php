<?php

$dsn ="mysql:dbname=conta-bancaria;host=localhost";
$dbuser ="root";
$dbpass = "";
 try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $sql = $pdo -> query($sql);
     
    echo "executado com sucessso";

 } catch(PDOexception $e) {
    echo "falhou".$e->getMessage();
 }

?>