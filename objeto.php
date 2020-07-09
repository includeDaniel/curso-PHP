<?php
    class Animal {

        public $nome;
        public $idade;

    }

    class Cachorro extends Animal {
        public $latido;
    }

    $duque = new Cachorro();
    $duque->nome = "Duque";
    $duque->latido = "Au Au";

    echo "O cão se chama: ".$duque->nome;
    echo "<br>";
    echo "e ele sabe latir: ".$duque->latido;;
    
?>