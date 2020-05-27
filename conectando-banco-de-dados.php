<?php

$dsn ="mysql:dbname=conta-bancaria;host=localhost";
$dbuser ="root";
$dbpass = "";
 try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $sql ="UPDATE contas SET titular = 'Daniel Nunes da Silva' WHERE id = ' 2333' ";
    $sql = $pdo -> query($sql);
     
    echo "executado com sucessso";

 } catch(PDOexception $e) {
    echo "falhou".$e->getMessage();
 }

?>