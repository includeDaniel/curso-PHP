<?php
    require 'pdo-statement.classes.php';

    $u = new Usuarios();
    $res = $u->selecionar(1);

    print_r($res);

    $u->inserir("romenio", "romeniio@gmail.com", "145");
?>