
Digite o cpf ou Email para achar o nome do usuario:

<form method="POST">
    <input type="email" name="campo">
    <input type="submit" value="pesquisar"/>
</form>
<hr>
<?php
    if(!empty($_POST['campo'])) {
        $campo = $_POST['campo'];

        try{
            $pdo = new PDO("mysql:dbname=dados;host=localhost", "root", "");
        } catch(PDOException $e) {
            echo "ERRO: ".$e->getMessage();
            exit;
        }
        $sql= "SELECT * FROM usuarios WHERE (email = :email) OR (cpf = :cpf)";
        $sql= $pdo->prepare($sql);
        $sql->bindValue(":email", $campo);
        $sql->bindValue(":cpf", $campo);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $pesquisa = $sql->fetch();

            echo "NOME:".$pesquisa['nome'];
            
        }
    }


?>