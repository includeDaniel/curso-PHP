<?php
    include 'contato.class.php';
    
    $contato = new Contato();
    $contato->adicionar('Danielkhdsg@gmail.com', 'Daniel Nunes');
    $contato->adicionar('Danielzcomputacao@gmail.com');

    $nome = $contato->getNome('Danielkhdsg@gmail.com',);
    echo "Nome: ".$nome;

    echo "<hr>";

    $lista = $contato->getALL();
    echo "<br>";
    print_r($lista);

    echo "<hr>";

    $contato->editar('Fulano', 'Danielzcomputacao@gmail.com');
    echo "<br>";
    $contato->excluir('Danielzcomputacao@gmail.com');
?>