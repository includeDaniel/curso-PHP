<?php
class Usuarios {

    private $db;
    
    public function __construct() {
        
        try{
            $this->db = new PDO("mysql:dbname=conta-bancaria;host=localhost", "root", "");
        } catch(PDOExepction $e) {
            echo "FALHOU ". $e->getMessage();
        }    
    }
    public function selecionar($id) {
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        $array = array();
        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        return $array;
    }
    public function inserir($nome, $email, $senha) {
        $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();  
    }
} 


?>s